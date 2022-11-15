<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.layouts.app',function ($header){
            $header->with('categories', Category::where('status', 1)->get() );
            $header->with('cartItems', $cartItems = \Cart::getContent() );
            $header->with('Wishlists', $Wishlists = Wishlist::with('wishlistList')->where('user_id', Auth::user()->id ?? '')->get() );
        });
    }
}
