<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class,'index'])->name('frontend');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';


Route::get('/category-products/{slug}', [FrontendController::class,'categoryProducts'])->name('category.products');
Route::get('/product-details/{slug}', [FrontendController::class,'productDetails'])->name('product.details');


//Route::get('products', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('wishlist', [CartController::class, 'wishlist'])->name('wishlist');
Route::get('wishlists', [CartController::class, 'wishlists'])->name('wishlists');
Route::get('wishlist-remove/{id}', [CartController::class, 'wishlistRemove'])->name('wishlist.remove');
Route::get('wishlist-clear', [CartController::class, 'wishlistClear'])->name('wishlist.clear');
