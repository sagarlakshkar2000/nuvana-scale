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
    return $this->create();
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
    DB::beginTransaction();

    try {
      // Validate the request
      $validated = $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'sku' => 'nullable|string|unique:products,sku',
        'description' => 'nullable|string',
        'badge' => 'nullable|string',
        'status' => 'required|in:active,inactive',
        'predefined_specs' => 'nullable|array',
        'specifications' => 'nullable|array',
        'images' => 'nullable|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
      ]);

      // Generate SKU if not provided
      $sku = $request->sku;
      if (empty($sku)) {
        $sku = 'NUV-' . strtoupper(\Illuminate\Support\Str::random(6));
      }

      // Generate unique slug
      $slug = \Illuminate\Support\Str::slug($request->name) . '-' . time();

      // Merge predefined specs with custom specs
      $allSpecifications = [];

      // Add predefined specifications (only non-empty values)
      if ($request->has('predefined_specs')) {
        foreach ($request->predefined_specs as $key => $value) {
          if (!empty($value)) {
            $allSpecifications[$key] = $value;
          }
        }
      }

      // Add custom specifications
      if ($request->has('specifications')) {
        foreach ($request->specifications as $spec) {
          if (!empty($spec['key']) && !empty($spec['value'])) {
            $allSpecifications[$spec['key']] = $spec['value'];
          }
        }
      }

      // ✅ Create Product (matching your form fields)
      $product = Product::create([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'slug' => $slug,
        'sku' => $sku,
        'description' => $request->description,
        'badge' => $request->badge,
        'is_active' => $request->status === 'active' ? 1 : 0,
        'specifications' => !empty($allSpecifications) ? json_encode($allSpecifications) : null,
      ]);

      // ✅ Handle Images (multiple upload)
      if ($request->hasFile('images')) {
        foreach ($request->file('images') as $index => $image) {
          $path = $image->store('products', 'public');

          // If you have ProductImage model
          ProductImage::create([
            'product_id' => $product->id,
            'image_url' => $path,
            'sort_order' => $index,
            'is_primary' => $index === 0,
          ]);
        }
      }

      DB::commit();

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

  public function edit()
  {

  }

  public function update()
  {

  }

  public function destroy()
  {

  }
}
