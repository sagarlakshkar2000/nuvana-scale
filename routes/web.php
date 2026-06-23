<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Artisan;

Route::get('/run-task/{task}', function ($task) {
  try {
    switch ($task) {
      case 'migrate':
        Artisan::call('migrate', ['--force' => true]);
        return "Migration completed!";
      case 'storage-link':
        Artisan::call('storage:link');
        return "Storage link created!";
      case 'clear-cache':
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        return "All cache cleared successfully!";
      case 'optimize':
        Artisan::call('optimize');
        Artisan::call('view:cache');
        return "App optimized successfully!";
      case 'seed':
        Artisan::call('db:seed', ['--force' => true]);
        return "Database seeded successfully!";
      case 'all':
        Artisan::call('migrate', ['--force' => true]);
        Artisan::call('db:seed', ['--force' => true]);
        Artisan::call('storage:link');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        return "All tasks (migrate, seed, storage link, clear cache) completed!";
      default:
        return "Task not found! Available tasks: migrate, storage-link, clear-cache, optimize, seed, all";
    }
  } catch (\Exception $e) {
    return "Error executing task: " . $e->getMessage();
  }
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. About Route
Route::prefix('about')->name('about.')->group(function () {
  Route::get('/', [HomeController::class, 'about'])->name('index');
  Route::get('/story', [HomeController::class, 'story'])->name('story');
  Route::get('/vision-mission', [HomeController::class, 'visionMission'])->name('vision-mission');
  Route::get('/company', [CompanyController::class, 'index'])->name('company');
});

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

    // General Settings
    Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
  });
});

Route::get('/login', fn() => redirect()->route('admin.login'))->name('login');

// Fallback route for 404 (optional - catches all undefined routes)
Route::fallback(function () {
  return view('pages.404');
})->name('fallback');
