<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CartController;

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

Route::get('/', [ProjectController::class, 'index'])->name('home');

Route::get('/shop', [ProjectController::class, 'products'])->name('products');

//Route::get('/single_product/{id}', [ProjectController::class, 'single_product'])->name('single_product');
Route::get('/single_product', function () {
    return redirect('/');
});
Route::get('/single_product/{id}', [ProjectController::class, 'single_product'])->name('single_product');


Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/cart', function () {
    return view('cart');
});

Route::post('/add_to_cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/add_to_cart', function () {
    return redirect('/');
});



Route::get('/single_product2', function () {
    return view('single_product2');
});

Route::get('/about', function () {
    return view('about');
});

