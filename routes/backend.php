<?php


use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\OrderManagementController;
use Illuminate\Support\Facades\Route;

//Route::middleware('guest')->group(function () {
//
//});


Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);
Route::get('/product/image/edit/{id}',[ProductController::class,'productImageEdit'])->name('product.image.edit');
Route::get('/product/category/edit/{id}',[ProductController::class,'productCategoryEdit'])->name('product.category.edit');



// order management


Route::controller(OrderManagementController::class)->prefix('orders')->as('orders.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit','edit')->name('edit');
    Route::delete('/destroy/{id}','destroy')->name('destroy');
});
