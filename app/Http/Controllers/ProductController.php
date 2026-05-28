<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
  public function index()
  {
    // Show all products
    $products = [
      'jewelry-scale' => 'Jewelry Scale',
      'table-top-scale' => 'Table Top Scale',
      'platform-scale' => 'Platform Scale',
      'mobile-bench-scale' => 'Mobile/Bench Scale',
      'heavy-duty-scale' => 'Heavy Duty Scale',
    ];

    return view('pages.products.index', compact('products'));
  }

  public function jewelryScale()
  {
    return view('pages.products.jewelry-scale');
  }

  public function tableTopScale()
  {
    return view('pages.products.table-top-scale');
  }

  public function platformScale()
  {
    return view('pages.products.platform-scale');
  }

  public function mobileBenchScale()
  {
    return view('pages.products.mobile-bench-scale');
  }

  public function heavyDutyScale()
  {
    return view('pages.products.heavy-duty-scale');
  }

  // Optional: Dynamic product detail
  public function show($slug)
  {
    $products = [
      'jewelry-scale' => 'Jewelry Scale',
      'table-top-scale' => 'Table Top Scale',
      'platform-scale' => 'Platform Scale',
      'mobile-bench-scale' => 'Mobile/Bench Scale',
      'heavy-duty-scale' => 'Heavy Duty Scale',
    ];

    if (!array_key_exists($slug, $products)) {
      abort(404);
    }

    return view('pages.products.show', [
      'product' => (object) [
        'slug' => $slug,
        'name' => $products[$slug],
        'description' => 'Description for ' . $products[$slug]
      ]
    ]);
  }
}
