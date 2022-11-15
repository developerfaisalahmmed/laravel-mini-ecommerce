<?php


use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
require __DIR__ . '/cart.php';
require __DIR__ . '/role.php';

Route::get('/', [FrontendController::class, 'index'])->name('frontend');
Route::get('/category-products/{slug}', [FrontendController::class, 'categoryProducts'])->name('category.products');
Route::get('/product-details/{slug}', [FrontendController::class, 'productDetails'])->name('product.details');


