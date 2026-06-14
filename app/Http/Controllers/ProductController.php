<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Product;

class ProductController extends Controller
{
  private function getAllProducts()
  {
    return Product::with(['category', 'images', 'specifications'])->get();
  }

  private function applyFilters(Request $request)
  {
    $query = Product::query()->with(['category', 'images']);

    if ($request->filled('category')) {
      $categories = (array) $request->input('category');
      $query->whereHas('category', function ($q) use ($categories) {
        $q->whereIn('name', $categories);
      });
    }

    if ($request->boolean('in_stock')) {
      $query->where('stock_status', 'in_stock');
    }

    if ($request->boolean('out_of_stock')) {
      $query->where('stock_status', 'out_of_stock');
    }

    if ($request->filled('min_price')) {
      $query->where('price', '>=', $request->min_price);
    }

    if ($request->filled('max_price')) {
      $query->where('price', '<=', $request->max_price);
    }

    if ($request->filled('keyword')) {
      $keyword = strtolower($request->keyword);

      $query->where(function ($q) use ($keyword) {
        $q->where('name', 'like', "%{$keyword}%")
          ->orWhere('sku', 'like', "%{$keyword}%")
          ->orWhereHas('category', function ($q2) use ($keyword) {
            $q2->where('name', 'like', "%{$keyword}%");
          });
      });
    }

    return $query;
  }

  private function applySorting($query, string $sort_by)
  {
    return match ($sort_by) {
      'price_asc' => $query->orderBy('price'),
      'price_desc' => $query->orderByDesc('price'),
      'name_asc' => $query->orderBy('name'),
      'name_desc' => $query->orderByDesc('name'),
      'rating_desc' => $query->orderByDesc('rating'),
      'newest' => $query->orderByDesc('created_at'),
      default => $query->orderByDesc('rating'),
    };
  }

  public function index(Request $request)
  {
    $query = $this->applyFilters($request);
    $query = $this->applySorting($query, $request->input('sort_by', 'featured'));

    $products = $query->paginate(9);

    // Categories with count
    $categories = \App\Models\Category::withCount('products')->get()
      ->map(fn($cat) => [
        'name' => $cat->name,
        'count' => $cat->products_count
      ]);

    // Stock counts
    $in_stock_count = Product::where('stock_status', 'in_stock')->count();
    $out_of_stock_count = Product::where('stock_status', 'out_of_stock')->count();

    // Price range
    $min_price_range = Product::min('price');
    $max_price_range = Product::max('price');


    $sort_options = [
      ['value' => 'featured', 'label' => 'Featured'],
      ['value' => 'newest', 'label' => 'Newest First'],
      ['value' => 'price_asc', 'label' => 'Price (Low to High)'],
      ['value' => 'price_desc', 'label' => 'Price (High to Low)'],
      ['value' => 'name_asc', 'label' => 'Name (A to Z)'],
      ['value' => 'name_desc', 'label' => 'Name (Z to A)'],
      ['value' => 'rating_desc', 'label' => 'Top Rated']
    ];

    return view('pages.products.index', [
      'current_products' => $products->items(),
      'categories' => $categories,
      'in_stock_count' => $in_stock_count,
      'out_of_stock_count' => $out_of_stock_count,
      'min_price_range' => $min_price_range,
      'max_price_range' => $max_price_range,
      'sort_by' => $request->sort_by,
      'current_page' => $products->currentPage(),
      'total_pages' => $products->lastPage(),
      'total_products' => $products->total(),
      'start_count' => $products->firstItem(),
      'end_count' => $products->lastItem(),
      'sort_options' => $sort_options,
      'selected_categories' => (array) $request->category,
    ]);
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

  public function quickView($sku)
  {
    $product = Product::with(['images', 'specifications'])
      ->where('sku', $sku)
      ->first();

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
    $query = $this->applyFilters($request);

    if ($request->has('sort_by')) {
      $query = $this->applySorting($query, $request->sort_by);
    }

    $products = $query->get();

    return response()->json([
      'success' => true,
      'count' => $products->count(),
      'products' => $products
    ]);
  }


  public function productDetail($slug)
  {
    $product = Product::with(['images', 'specifications', 'category'])
      ->where('slug', $slug)
      ->firstOrFail();

    $related_products = Product::where('category_id', $product->category_id)
      ->where('id', '!=', $product->id)
      ->take(8)
      ->get();

    return view('pages.products.product-detail', compact('product', 'related_products'));
  }
}
