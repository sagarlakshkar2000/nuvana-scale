<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
  private function getTrendingProducts()
  {
    $trending_products = Product::with(['category', 'images', 'specifications'])->get();

    return $trending_products;
  }

  private function getSliders()
  {

    $hero_slides = [
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/slideshows/01-1-163976569293646_l.jpg?v=717',
        'title_line1' => 'Fuel Your Fitness',
        'title_line2' => 'Premium Supplements!',
        'description' => 'We are passionate about helping you achieve your fitness goals through the power of high-quality nutrition. Whether you\'re looking to build muscle, increase endurance, or enhance recovery...',
        'button_text' => 'Shop Now',
        'button_link' => 'shop-grid.html',
        'alt_text' => 'Premium Supplements Banner'
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/slideshows/01-1-163976569293646_l.jpg?v=717',
        'title_line1' => 'Be Fit with Fuel Our',
        'title_line2' => 'Premium Supplements!',
        'description' => 'Transform your body with our scientifically formulated supplements. Backed by research and trusted by athletes worldwide for optimal performance and results.',
        'button_text' => 'View Collection',
        'button_link' => 'shop-grid.html',
        'alt_text' => 'Fitness Supplements Banner'
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/slideshows/01-1-163976569293646_l.jpg?v=717',
        'title_line1' => 'Your Fitness is your Strength',
        'title_line2' => 'Premium Supplements!',
        'description' => 'Achieve your peak performance with our premium range of supplements. From protein powders to pre-workouts, we have everything you need for your fitness journey.',
        'button_text' => 'Explore Products',
        'button_link' => 'shop-grid.html',
        'alt_text' => 'Workout Supplements Banner'
      ]
    ];
    return $hero_slides;
  }

  public function index()
  {
    $trending_products = $this->getTrendingProducts();
    $hero_slides = $this->getSliders();
    return view('pages.home', compact(['trending_products', 'hero_slides']));
  }

  public function about()
  {
    return view('pages.about');
  }
}
