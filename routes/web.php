<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

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

Route::get('/single_product/{id}', [ProjectController::class, 'single_product'])->name('single_product');
Route::get('/single_product', function () {
    return redirect('/');
});

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::post('/add_to_cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/add_to_cart', function () {
    return redirect('/');
});

Route::post('/remove_to_cart', [CartController::class, 'remove_to_cart'])->name('remove_to_cart');
Route::get('/remove_to_cart', function () {
    return redirect('/');
});


Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::post('/place_order', [CartController::class, 'place_order'])->name('place_order');


Route::get('/single_product1', function () {
    return view('single_product1');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
