<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
  /**
   * Get all products data (simulating database)
   */
  private function getAllProducts()
  {
    return [
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/05-109436933755456_m.jpg?v=717',
        'badge' => 'New',
        'sku' => 'EJ-03',
        'slug' => 'jewellery_01',
        'category' => 'Jewellery Scale',
        'title' => 'Equal Digital Jewellery Weighing Scale With 600g Weight Capacity',
        'rating' => 5,
        'reviews' => 128,
        'old_price' => 8999.00,
        'price' => 5999.00,
        'in_stock' => true,
        'feature' => 'Display Front & Back (With Windshield)',
        'specifications' => [
          'Material & Color' => 'ABS with White Color',
          'Item Capacity' => '600 g',
          'Resolution' => '10mg',
          'Platform Size' => '130mm dia',
          'Units' => 'g, ct, tola',
          'Warranty' => '1-Year Warranty'
        ],
        'is_trending' => true,
        'created_at' => '2025-01-15'
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-904378_m.jpg?v=717',
        'badge' => null,
        'sku' => 'EQPF-04',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-5mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 5MT Weight Capacity',
        'rating' => 5,
        'reviews' => 92,
        'old_price' => 93059.00,
        'price' => 79100.00,
        'in_stock' => true,
        'feature' => '5 Metric Ton | Heavy Industrial Use',
        'specifications' => [
          'Material' => 'Mild Steel',
          'Capacity' => '5000 kg',
          'Platform Size' => '1500x1500 mm',
          'Display' => 'Digital LED',
          'Warranty' => '2-Year Warranty'
        ],
        'is_trending' => true,
        'created_at' => '2025-02-20'
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/1-922844_m.jpg?v=717',
        'badge' => 'Best Seller',
        'sku' => 'EDXP-11',
        'slug' => 'equal-digital-platform-weighing-scale-with-10001250kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 1000/1250kg Weight Capacity',
        'rating' => 5,
        'reviews' => 156,
        'old_price' => 47824.00,
        'price' => 40650.00,
        'in_stock' => true,
        'feature' => 'Heavy Duty Platform | 1250kg Capacity',
        'specifications' => [
          'Material' => 'Mild Steel',
          'Capacity' => '1250 kg',
          'Platform Size' => '1200x1200 mm',
          'Display' => 'Digital LCD',
          'Warranty' => '2-Year Warranty'
        ],
        'is_trending' => true,
        'created_at' => '2025-01-10'
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-954630_m.jpg?v=717',
        'badge' => 'Trending',
        'sku' => 'EQPF-02',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-1mt2mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 1MT/2MT Weight Capacity',
        'rating' => 4,
        'reviews' => 112,
        'old_price' => 63294.00,
        'price' => 53800.00,
        'in_stock' => true,
        'feature' => '2 Metric Ton | Commercial Use',
        'specifications' => [
          'Material' => 'Mild Steel',
          'Capacity' => '2000 kg',
          'Platform Size' => '1200x1200 mm',
          'Display' => 'Digital LED',
          'Warranty' => '2-Year Warranty'
        ],
        'is_trending' => true,
        'created_at' => '2025-02-15'
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-331556_m.jpg?v=717',
        'badge' => null,
        'sku' => 'EQPF-03',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-2mt3mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 2MT/3MT Weight Capacity',
        'rating' => 5,
        'reviews' => 71,
        'old_price' => 81529.00,
        'price' => 69300.00,
        'in_stock' => false,
        'feature' => '3 Metric Ton | Industrial Grade',
        'specifications' => [
          'Material' => 'Mild Steel',
          'Capacity' => '3000 kg',
          'Platform Size' => '1500x1500 mm',
          'Display' => 'Digital LED',
          'Warranty' => '2-Year Warranty'
        ],
        'is_trending' => false,
        'created_at' => '2024-12-10'
      ]
    ];
  }

  /**
   * Apply product filters to a collection.
   */
  private function applyFilters(Collection $products, Request $request): Collection
  {
    $selected_categories = $request->input('category', []);
    if (!is_array($selected_categories)) {
      $selected_categories = [$selected_categories];
    }

    $show_in_stock = filter_var($request->input('in_stock', false), FILTER_VALIDATE_BOOLEAN);
    $show_out_of_stock = filter_var($request->input('out_of_stock', false), FILTER_VALIDATE_BOOLEAN);
    $min_price = $request->filled('min_price') ? (float) $request->input('min_price') : 0;
    $max_price = $request->filled('max_price') ? (float) $request->input('max_price') : 350000;
    $search_keyword = trim((string) $request->input('keyword', ''));

    return $products->filter(function ($product) use ($selected_categories, $show_in_stock, $show_out_of_stock, $min_price, $max_price, $search_keyword) {
      if (!empty($selected_categories) && !in_array($product['category'], $selected_categories)) {
        return false;
      }

      if ($show_in_stock && !$show_out_of_stock && !$product['in_stock']) {
        return false;
      }

      if ($show_out_of_stock && !$show_in_stock && $product['in_stock']) {
        return false;
      }

      if ($product['price'] < $min_price || $product['price'] > $max_price) {
        return false;
      }

      if ($search_keyword !== '') {
        $keyword_lower = strtolower($search_keyword);
        if (
          strpos(strtolower($product['title']), $keyword_lower) === false &&
          strpos(strtolower($product['category']), $keyword_lower) === false &&
          strpos(strtolower($product['sku']), $keyword_lower) === false
        ) {
          return false;
        }
      }

      return true;
    });
  }

  /**
   * Apply product sorting to a collection.
   */
  private function applySorting(Collection $products, string $sort_by): Collection
  {
    switch ($sort_by) {
      case 'price_asc':
        return $products->sortBy('price');
      case 'price_desc':
        return $products->sortByDesc('price');
      case 'name_asc':
        return $products->sortBy('title');
      case 'name_desc':
        return $products->sortByDesc('title');
      case 'rating_desc':
        return $products->sortByDesc('rating');
      case 'newest':
        return $products->sortByDesc('created_at');
      default:
        return $products->sortByDesc('rating')->sortByDesc('is_trending');
    }
  }

  /**
   * Display products listing with filters
   */
  public function index(Request $request)
  {
    $products = collect($this->getAllProducts());

    // Get filter parameters
    $search_keyword = $request->input('keyword', '');
    $selected_categories = $request->input('category', []);
    if (!is_array($selected_categories)) {
      $selected_categories = [$selected_categories];
    }
    $in_stock_filter = filter_var($request->input('in_stock', false), FILTER_VALIDATE_BOOLEAN);
    $out_of_stock_filter = filter_var($request->input('out_of_stock', false), FILTER_VALIDATE_BOOLEAN);
    $min_price = $request->filled('min_price') ? (float) $request->input('min_price') : 0;
    $max_price = $request->filled('max_price') ? (float) $request->input('max_price') : 350000;
    $sort_by = $request->input('sort_by', 'featured');

    // Apply filters and sorting
    $filtered_products = $this->applyFilters($products, $request);
    $filtered_products = $this->applySorting($filtered_products, $sort_by);

    // Calculate category counts based on actual products
    $category_counts = $products->groupBy('category')->map(function ($items) {
      return $items->count();
    })->toArray();

    $categories = collect($category_counts)->map(function ($count, $name) {
      return ['name' => $name, 'count' => $count];
    })->values()->toArray();

    // Availability counts
    $in_stock_count = $products->where('in_stock', true)->count();
    $out_of_stock_count = $products->where('in_stock', false)->count();

    // Price range from actual products
    $all_prices = $products->pluck('price');
    $min_price_range = $all_prices->min();
    $max_price_range = $all_prices->max();

    // Pagination
    $per_page = 9;
    $current_page = $request->input('page', 1);
    $total_products = $filtered_products->count();
    $total_pages = ceil($total_products / $per_page);

    // Get current page items
    $current_products = $filtered_products->slice(($current_page - 1) * $per_page, $per_page)->values();

    // Calculate display range
    $start_count = $total_products > 0 ? (($current_page - 1) * $per_page) + 1 : 0;
    $end_count = min($current_page * $per_page, $total_products);

    // Sort options
    $sort_options = [
      ['value' => 'featured', 'label' => 'Featured'],
      ['value' => 'newest', 'label' => 'Newest First'],
      ['value' => 'price_asc', 'label' => 'Price (Low to High)'],
      ['value' => 'price_desc', 'label' => 'Price (High to Low)'],
      ['value' => 'name_asc', 'label' => 'Name (A to Z)'],
      ['value' => 'name_desc', 'label' => 'Name (Z to A)'],
      ['value' => 'rating_desc', 'label' => 'Top Rated']
    ];

    return view('pages.products.index', compact(
      'current_products',
      'categories',
      'in_stock_count',
      'out_of_stock_count',
      'min_price_range',
      'max_price_range',
      'sort_options',
      'sort_by',
      'start_count',
      'end_count',
      'total_products',
      'current_page',
      'total_pages',
      'search_keyword',
      'selected_categories',
      'in_stock_filter',
      'out_of_stock_filter',
      'min_price',
      'max_price'
    ));
  }

  /**
   * Filter products by category
   */
  public function byCategory(Request $request, $category)
  {
    $request->merge(['category' => [$category]]);
    return $this->index($request);
  }

  /**
   * Get trending products
   */
  public function trending(Request $request)
  {
    $products = collect($this->getAllProducts());
    $trending_products = $products->where('is_trending', true)->values();

    $per_page = 9;
    $current_page = $request->input('page', 1);
    $total_products = $trending_products->count();
    $total_pages = ceil($total_products / $per_page);
    $current_products = $trending_products->slice(($current_page - 1) * $per_page, $per_page)->values();

    $start_count = $total_products > 0 ? (($current_page - 1) * $per_page) + 1 : 0;
    $end_count = min($current_page * $per_page, $total_products);

    // Get all categories for sidebar
    $category_counts = $products->groupBy('category')->map(function ($items) {
      return $items->count();
    })->toArray();

    $categories = collect($category_counts)->map(function ($count, $name) {
      return ['name' => $name, 'count' => $count];
    })->values()->toArray();

    $in_stock_count = $products->where('in_stock', true)->count();
    $out_of_stock_count = $products->where('in_stock', false)->count();
    $all_prices = $products->pluck('price');
    $min_price_range = $all_prices->min();
    $max_price_range = $all_prices->max();

    $sort_options = [
      ['value' => 'featured', 'label' => 'Featured'],
      ['value' => 'price_asc', 'label' => 'Price (Low to High)'],
      ['value' => 'price_desc', 'label' => 'Price (High to Low)'],
      ['value' => 'name_asc', 'label' => 'Name (A to Z)'],
      ['value' => 'name_desc', 'label' => 'Name (Z to A)'],
      ['value' => 'rating_desc', 'label' => 'Top Rated']
    ];

    return view('pages.products.index', compact(
      'current_products',
      'categories',
      'in_stock_count',
      'out_of_stock_count',
      'min_price_range',
      'max_price_range',
      'sort_options',
      'start_count',
      'end_count',
      'total_products',
      'current_page',
      'total_pages'
    ));
  }

  /**
   * Get product by category slug
   */
  public function jewelryScale(Request $request)
  {
    return $this->byCategory($request, 'Jewellery Scale');
  }

  public function tableTopScale(Request $request)
  {
    return $this->byCategory($request, 'Table Top Scale');
  }

  public function platformScale(Request $request)
  {
    return $this->byCategory($request, 'Platform Scale');
  }

  public function mobileBenchScale(Request $request)
  {
    return $this->byCategory($request, 'Mobile/Bench Scale');
  }

  public function heavyDutyScale(Request $request)
  {
    return $this->byCategory($request, 'Heavy Duty Scale');
  }

  public function weighbridgeSolution(Request $request)
  {
    return $this->byCategory($request, 'Weighbridge Solution');
  }

  public function loadCell(Request $request)
  {
    return $this->byCategory($request, 'Load Cell');
  }

  /**
   * Show single product details
   */
  public function show($slug)
  {
    $products = collect($this->getAllProducts());
    $product = $products->firstWhere('slug', $slug);

    if (!$product) {
      abort(404, 'Product not found');
    }

    // Get related products from same category
    $related_products = $products->where('category', $product['category'])
      ->where('sku', '!=', $product['sku'])
      ->take(4)
      ->values();

    return view('pages.products.show', compact('product', 'related_products'));
  }

  /**
   * AJAX endpoint for quick view
   */
  public function quickView($sku)
  {
    $products = collect($this->getAllProducts());
    $product = $products->firstWhere('sku', $sku);

    if (!$product) {
      return response()->json(['error' => 'Product not found'], 404);
    }

    return response()->json([
      'success' => true,
      'product' => $product
    ]);
  }

  /**
   * AJAX endpoint for filtering
   */
  public function filterProducts(Request $request)
  {
    $products = collect($this->getAllProducts());

    // Apply all filters and optional sorting
    $filtered = $this->applyFilters($products, $request);

    if ($request->has('sort_by')) {
      $filtered = $this->applySorting($filtered, $request->sort_by);
    }

    return response()->json([
      'success' => true,
      'count' => $filtered->count(),
      'products' => $filtered->values()
    ]);
  }
}
