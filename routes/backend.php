<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Route::middleware('guest')->group(function () {
//
//});


Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);
Route::get('/product/image/edit/{id}',[ProductController::class,'productImageEdit'])->name('product.image.edit');
Route::get('/product/category/edit/{id}',[ProductController::class,'productCategoryEdit'])->name('product.category.edit');
