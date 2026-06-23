<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
  private function getTrendingProducts()
  {
    return \Illuminate\Support\Facades\Cache::remember('home_trending_products', 3600, function () {
      return Product::with(['category', 'images', 'specifications'])
        ->where('is_active', 1)
        ->latest()
        ->take(8)
        ->get();
    });
  }

  public function index()
  {
    $trending_products = $this->getTrendingProducts();

    // Cache banners
    $hero_slides = \Illuminate\Support\Facades\Cache::remember('home_hero_slides', 3600, function () {
      return \App\Models\Banner::where('is_active', true)
        ->orderBy('order', 'asc')
        ->orderBy('created_at', 'desc')
        ->get();
    });

    // Cache the latest 5 published WordPress posts to avoid N+1 queries on every load
    $wp_posts = \Illuminate\Support\Facades\Cache::remember('home_wp_posts', 3600, function () {
      try {
        return \App\Models\WpPost::with('author')
          ->published()
          ->orderBy('post_date', 'desc')
          ->take(5)
          ->get();
      } catch (\Exception $e) {
        // WordPress tables might not exist in local development environment
        return collect([]);
      }
    });

    return view('pages.home', compact(['trending_products', 'hero_slides', 'wp_posts']));
  }

  public function about()
  {
    return view('pages.about');
  }

  public function founderAndCeo()
  {
    return view('pages.about.founderandceo');
  }

  public function visionMission()
  {
    return view('pages.about.vision-mission');
  }
}
