<?php


use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->get("/dashboard", function () {
    $user = Auth::user();
    if ($user->hasRole("admin")) {
        return view('backend.dashboard.dashboard');
    } elseif ($user->hasRole("user")){
        return redirect('/cart');
    } else{
        return view('backend.dashboard.dashboard');
    }
})->name('dashboard');


Route::group(['middleware' => ['auth']], function () {

    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

});
