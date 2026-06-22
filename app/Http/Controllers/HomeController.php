<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
  private function getTrendingProducts()
  {
    return \Illuminate\Support\Facades\Cache::remember('home_trending_products', 3600, function () {
      return Product::with(['category', 'images', 'specifications'])
        ->latest()
        ->take(8)
        ->get();
    });
  }

  public function index()
  {
    $trending_products = $this->getTrendingProducts();
    $hero_slides = \App\Models\Banner::where('is_active', true)
        ->orderBy('order', 'asc')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('pages.home', compact(['trending_products', 'hero_slides']));
  }

  public function about()
  {
    return view('pages.about');
  }
}
