<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ProductSpecification;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::with('category')->orderBy('id', 'desc')->paginate(10);
    return view('admin.product.index', [
      'title' => 'Product List',
      'products' => $products
    ]);
  }
  public function create()
  {
    $defaultSpecs = [
      'General' => ['Brand', 'Model Number', 'Material'],
      'Capacity' => ['Maximum Capacity', 'Minimum Capacity', 'Accuracy'],
      'Display' => ['Display Type', 'Battery Type'],
    ];

    return view('admin.product.create', [
      'title' => 'Product Management',
      'categories' => Category::where('is_active', 1)->get() ?? collect(),

      // ✅ Config fallback handling
      'stockStatuses' => config('product.stock_status') ?? [
        'in_stock' => 'In Stock',
        'out_of_stock' => 'Out of Stock',
        'preorder' => 'Pre Order',
      ],

      'badges' => config('product.badge') ?? [
        'trending' => 'Trending',
        'new' => 'New',
        'best_seller' => 'Best Seller',
      ],

      // ✅ Main fix here
      'specFields' => config('product.specifications') ?? $defaultSpecs,
    ]);
  }

  public function store(Request $request)
  {
    // dd($request->all());

    DB::beginTransaction();

    try {
      $validated = $this->validateRequest($request);

      $product = Product::create(
        $this->prepareProductData($validated, $request)
      );

      $this->storeSpecifications($product, $request);
      $this->storeImages($product, $request);

      DB::commit();

      \Illuminate\Support\Facades\Cache::forget('home_trending_products');

      return redirect()
        ->route('admin.products.index')
        ->with('success', 'Product created successfully!');

    } catch (\Exception $e) {
      DB::rollBack();

      return redirect()
        ->back()
        ->withInput()
        ->with('error', 'Error: ' . $e->getMessage());
    }
  }

  /* =========================
     VALIDATION
  ========================= */
  private function validateRequest($request)
  {
    return $request->validate([
      'name' => 'required|string|max:255',
      'category_id' => 'required|exists:categories,id',
      'slug' => 'required|string',
      'sku' => 'nullable|string|unique:products,sku',
      'description' => 'nullable|string',
      'badge' => 'nullable|string',
      'status' => 'required|in:active,inactive',
      'predefined_specs' => 'nullable|array',
      'specifications' => 'nullable|array',
      'images' => 'nullable|array',
      'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:5120',
      'features' => 'nullable|array',
      'ideal_for' => 'nullable|array',
      'why_choose_nuvana' => 'nullable|array',
      'faqs' => 'nullable|array',
    ]);
  }

  /* =========================
     PRODUCT DATA
  ========================= */
  private function prepareProductData($validated, $request)
  {
    return [
      'category_id' => $validated['category_id'],
      'name' => $validated['name'],
      'slug' => $validated['slug'],
      'sku' => $validated['sku'] ?? $this->generateSku(),
      'description' => $validated['description'] ?? null,
      'badge' => $validated['badge'] ?? null,
      'is_active' => $validated['status'] === 'active',
      'features' => $this->cleanArray($request->features),
      'ideal_for' => $this->cleanArray($request->ideal_for),
      'why_choose_nuvana' => $this->cleanWhyChoose($request),
      'faqs' => $this->cleanFaqs($request),
    ];
  }

  /* =========================
     SKU
  ========================= */
  private function generateSku()
  {
    return 'NUV-' . strtoupper(\Illuminate\Support\Str::random(6));
  }

  /* =========================
     SPECIFICATIONS
  ========================= */
  private function storeSpecifications($product, $request)
  {
    $specs = collect();

    // predefined
    foreach ($request->predefined_specs ?? [] as $key => $value) {
      if (!empty($value)) {
        $specs->push([
          'key' => trim($key),
          'value' => trim($value),
          'group_name' => 'General',
          'is_predefined' => true,
        ]);
      }
    }

    // custom
    foreach ($request->specifications ?? [] as $spec) {
      if (!empty($spec['key']) && !empty($spec['value'])) {
        $specs->push([
          'key' => trim($spec['key']),
          'value' => trim($spec['value']),
          'group_name' => 'Custom',
          'is_predefined' => false,
        ]);
      }
    }

    $product->specifications()->createMany($specs->toArray());
  }

  /* =========================
     IMAGES
  ========================= */
  private function storeImages($product, $request)
  {
    if (!$request->hasFile('images')) {
      $product->images()->create([
        'image_url' => 'products/product-1.png',
        'sort_order' => 1,
      ]);
      return;
    }

    foreach ($request->file('images') as $index => $image) {
      $path = $image->store('products', 'public');

      $product->images()->create([
        'image_url' => $path,
        'sort_order' => $index + 1,
      ]);
    }
  }

  /* =========================
     HELPERS
  ========================= */
  private function cleanArray($array)
  {
    return array_values(array_filter($array ?? []));
  }

  private function cleanWhyChoose($request)
  {
    return collect($request->why_choose_nuvana ?? [])
      ->filter(fn($item) => !empty($item['title']) && !empty($item['description']))
      ->values()
      ->toArray();
  }

  private function cleanFaqs($request)
  {
    return collect($request->faqs ?? [])
      ->filter(fn($faq) => !empty($faq['question']) && !empty($faq['answer']))
      ->values()
      ->toArray();
  }

  public function edit(Product $product)
  {
    $defaultSpecs = [
      'General' => ['Brand', 'Model Number', 'Material'],
      'Capacity' => ['Maximum Capacity', 'Minimum Capacity', 'Accuracy'],
      'Display' => ['Display Type', 'Battery Type'],
    ];

    $product->load(['specifications', 'images']);

    // Group existing specifications
    $existingSpecs = $product->specifications->pluck('value', 'key')->toArray();

    return view('admin.product.edit', [
      'title' => 'Edit Product',
      'product' => $product,
      'categories' => Category::where('is_active', 1)->get() ?? collect(),
      'existingSpecs' => $existingSpecs,
      'stockStatuses' => config('product.stock_status') ?? [
        'in_stock' => 'In Stock',
        'out_of_stock' => 'Out of Stock',
        'preorder' => 'Pre Order',
      ],
      'badges' => config('product.badge') ?? [
        'trending' => 'Trending',
        'new' => 'New',
        'best_seller' => 'Best Seller',
      ],
      'specFields' => config('product.specifications') ?? $defaultSpecs,
    ]);
  }

  public function update(Request $request, Product $product)
  {
    DB::beginTransaction();

    try {
      $validated = $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'slug' => 'required|string',
        'sku' => 'nullable|string|unique:products,sku,' . $product->id,
        'description' => 'nullable|string',
        'badge' => 'nullable|string',
        'status' => 'required|in:active,inactive',
        'predefined_specs' => 'nullable|array',
        'specifications' => 'nullable|array',
        'features' => 'nullable|array',
        'ideal_for' => 'nullable|array',
        'why_choose_nuvana' => 'nullable|array',
        'faqs' => 'nullable|array',
        'images' => 'nullable|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
      ]);

      // Format why_choose_nuvana to remove empty entries
      $whyChooseNuvana = [];
      if ($request->has('why_choose_nuvana')) {
        foreach ($request->why_choose_nuvana as $item) {
          if (!empty($item['title']) && !empty($item['description'])) {
            $whyChooseNuvana[] = $item;
          }
        }
      }

      // Format faqs to remove empty entries
      $faqs = [];
      if ($request->has('faqs')) {
        foreach ($request->faqs as $faq) {
          if (!empty($faq['question']) && !empty($faq['answer'])) {
            $faqs[] = $faq;
          }
        }
      }

      $features = array_filter($request->features ?? []);
      $idealFor = array_filter($request->ideal_for ?? []);

      $product->update([
        'category_id' => $validated['category_id'],
        'name' => $validated['name'],
        'slug' => $validated['slug'],
        'sku' => $request->sku ?? $product->sku,
        'description' => $validated['description'],
        'badge' => $validated['badge'],
        'is_active' => $validated['status'] === 'active' ? 1 : 0,
        'features' => array_values($features),
        'ideal_for' => array_values($idealFor),
        'why_choose_nuvana' => $whyChooseNuvana,
        'faqs' => $faqs,
      ]);

      // Handle specs
      $allSpecifications = [];
      if ($request->has('predefined_specs')) {
        foreach ($request->predefined_specs as $key => $value) {
          if (!empty($value)) {
            $allSpecifications[$key] = $value;
          }
        }
      }
      if ($request->has('specifications')) {
        foreach ($request->specifications as $spec) {
          if (!empty($spec['key']) && !empty($spec['value'])) {
            $key = trim($spec['key']);
            $value = trim($spec['value']);
            $allSpecifications[$key] = $value;
          }
        }
      }

      // Sync specs
      ProductSpecification::where('product_id', $product->id)->delete();
      foreach ($allSpecifications as $key => $value) {
        ProductSpecification::create([
          'product_id' => $product->id,
          'key' => $key,
          'value' => $value,
          'group_name' => 'General',
          'is_predefined' => 1,
        ]);
      }

      // Handle deleted images
      if ($request->has('delete_images')) {
        $imagesToDelete = ProductImage::whereIn('id', $request->delete_images)->get();
        foreach ($imagesToDelete as $img) {
          \Illuminate\Support\Facades\Storage::disk('public')->delete($img->image_url);
          $img->delete();
        }
      }

      // ✅ Handle Images (multiple upload)
      if ($request->hasFile('images')) {
        $maxSort = ProductImage::where('product_id', $product->id)->max('sort_order') ?? 0;
        foreach ($request->file('images') as $index => $image) {
          $path = $image->store('products', 'public');
          ProductImage::create([
            'product_id' => $product->id,
            'image_url' => $path,
            'sort_order' => $maxSort + $index + 1,
          ]);
        }
      }

      DB::commit();

      \Illuminate\Support\Facades\Cache::forget('home_trending_products');

      return redirect()
        ->route('admin.products.index')
        ->with('success', 'Product updated successfully!');

    } catch (\Exception $e) {
      DB::rollBack();

      return redirect()
        ->back()
        ->withInput()
        ->with('error', 'Error: ' . $e->getMessage());
    }
  }

  public function destroy(Product $product)
  {
    $product->delete();
    \Illuminate\Support\Facades\Cache::forget('home_trending_products');
    return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
  }
}
