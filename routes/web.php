<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Artisan;

Route::get('/run-migrate', function () {
  Artisan::call('migrate', ['--force' => true]);
  return "Migration completed!";
});

Route::get('/run-storage-link', function () {
  Artisan::call('storage:link');
  return "Storage link created!";
});

Route::get('/clear-cache', function () {
  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  Artisan::call('route:clear');
  Artisan::call('view:clear');

  return "All cache cleared successfully!";
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// 2. Company Route
Route::get('/company', [CompanyController::class, 'index'])->name('company');

// 3. Products Routes
Route::prefix('products')->name('products.')->group(function () {
  // Main products page
  Route::get('/', [ProductController::class, 'index'])->name('index');

  // 3.1 Jewelry Scale
  Route::get('/jewelry-scale', [ProductController::class, 'jewelryScale'])->name('jewelry-scale');

  // 3.2 Table Top Scale
  Route::get('/table-top-scale', [ProductController::class, 'tableTopScale'])->name('table-top-scale');

  // 3.3 Platform Scale
  Route::get('/platform-scale', [ProductController::class, 'platformScale'])->name('platform-scale');

  // 3.4 Mobile/Bench Scale
  Route::get('/mobile-bench-scale', [ProductController::class, 'mobileBenchScale'])->name('mobile-bench-scale');

  // 3.5 Heavy Duty Scale
  Route::get('/heavy-duty-scale', [ProductController::class, 'heavyDutyScale'])->name('heavy-duty-scale');
});

Route::get('/product-detail/{slug}', [ProductController::class, 'productDetail'])->name('product-detail');


// 4. Contact Us Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// 5. 404 Route (for testing - usually handled by exception handler)
Route::get('/404', function () {
  return view('pages.404');
})->name('404');

// 6. Blog Routes
Route::prefix('blog')->name('blog.')->group(function () {
  // Main blog page
  Route::get('/', [BlogController::class, 'index'])->name('index');

  // Preview route for drafts (must be before {slug} to avoid conflicts)
  Route::get('/preview/{id}', [BlogController::class, 'preview'])->name('preview');

  // 6.1 Blog Detail (with slug)
  Route::get('/{slug}', [BlogController::class, 'show'])->name('detail');
});


// 7. Company Route
Route::get('/search', [CompanyController::class, 'index'])->name('search');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\TrendingProductController;
use App\Http\Controllers\Admin\SeoController;

Route::prefix('admin')->name('admin.')->group(function () {
  // Auth Routes
  Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
  Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
  Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

  // Protected Routes
  Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/products')->name('products.')->group(function () {
      Route::get('/', [AdminProductController::class, 'index'])->name('index');
      Route::get('/create', [AdminProductController::class, 'create'])->name('create');
      Route::post('/store', [AdminProductController::class, 'store'])->name('store');
      Route::get('/{product}/edit', [AdminProductController::class, 'edit'])->name('edit');
      Route::put('/{product}', [AdminProductController::class, 'update'])->name('update');
      Route::delete('/{product}/delete', [AdminProductController::class, 'destroy'])->name('destroy');
    });

    // Resource Controllers for CRUD operations
    Route::resource('banners', BannerController::class);
    Route::resource('trending-products', TrendingProductController::class);
    Route::resource('seo', SeoController::class);
  });
});

Route::get('/login', fn() => redirect()->route('admin.login'))->name('login');

// Fallback route for 404 (optional - catches all undefined routes)
Route::fallback(function () {
  return view('pages.404');
})->name('fallback');
