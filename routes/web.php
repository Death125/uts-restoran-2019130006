<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\testimonialsController;
use App\Http\Controllers\AboutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'products'])->name('products');
Route::get('/testimonials', [\App\Http\Controllers\testimonialsController::class, 'testimonials'])->name('testimonials');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'about'])->name('about');

Route::fallback(function () {
    return '<h1>Wrong Way</h1>';
});
