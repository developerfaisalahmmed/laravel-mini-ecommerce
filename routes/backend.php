<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Route::middleware('guest')->group(function () {
//
//});


Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);
