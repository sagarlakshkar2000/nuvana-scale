<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

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

  // Optional: Dynamic product detail route
  Route::get('/{slug}', [ProductController::class, 'show'])->name('show');
});

// 4. Contact Us Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// 5. 404 Route (for testing - usually handled by exception handler)
Route::get('/404', function () {
  return view('errors.404');
})->name('404');

// 6. Blog Routes
Route::prefix('blog')->name('blog.')->group(function () {
  // Main blog page
  Route::get('/', [BlogController::class, 'index'])->name('index');

  // 6.1 Blog Detail (with slug)
  Route::get('/{slug}', [BlogController::class, 'show'])->name('detail');
});

// Fallback route for 404 (optional - catches all undefined routes)
// Route::fallback(function () {
//     return view('errors.404');
// })->name('fallback');

