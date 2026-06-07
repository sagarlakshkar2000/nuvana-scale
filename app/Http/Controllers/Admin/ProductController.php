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
      // ✅ Create Product
      $product = Product::create([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'slug' => Str::slug($request->name) . '-' . time(),
        'sku' => 'NUV-' . strtoupper(Str::random(6)),

        'short_description' => $request->short_description,
        'description' => $request->description,

        'price' => $request->price,
        'old_price' => $request->old_price,

        'rating' => $request->rating,
        'reviews_count' => $request->reviews_count,

        'stock_status' => $request->stock_status,
        'badge' => $request->badge,
      ]);

      // ✅ Handle Images (multiple upload)
      if ($request->hasFile('images')) {
        foreach ($request->file('images') as $index => $image) {

          $path = $image->store('products', 'public');

          ProductImage::create([
            'product_id' => $product->id,
            'image_url' => $path,
            'sort_order' => $index
          ]);
        }
      }

      // ✅ Handle Specifications (dynamic fields)
      if ($request->spec_key && $request->spec_value) {

        foreach ($request->spec_key as $index => $key) {

          if (!empty($key) && !empty($request->spec_value[$index])) {

            ProductSpecification::create([
              'product_id' => $product->id,
              'key' => $key,
              'value' => $request->spec_value[$index],
              'group_name' => $request->spec_group[$index] ?? 'General',
              'is_predefined' => true,
            ]);
          }
        }
      }

      DB::commit();

      return redirect()->back()->with('success', 'Product created successfully');

    } catch (\Exception $e) {

      DB::rollBack();

      return redirect()->back()->with('error', $e->getMessage());
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
