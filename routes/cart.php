<?php


use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use Illuminate\Support\Facades\Route;


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('wishlist', [CartController::class, 'wishlist'])->name('wishlist');
Route::get('wishlists', [CartController::class, 'wishlists'])->name('wishlists');
Route::get('wishlist-remove/{id}', [CartController::class, 'wishlistRemove'])->name('wishlist.remove');
Route::get('wishlist-clear', [CartController::class, 'wishlistClear'])->name('wishlist.clear');


Route::controller(CheckoutController::class)->middleware(['auth'])->prefix('checkout')->group(function (){
        Route::get('/','index')->name('checkout');
        Route::post('/shipping','store')->name('checkout.shipping');
});

