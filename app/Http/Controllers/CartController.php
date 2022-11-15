<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('frontend.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
//        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }


    public function wishlist(Request $request)
    {

        Wishlist::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->id,
        ]);

        return redirect()->back();
    }


    public function wishlists()
    {
        $products = Wishlist::with('wishlistList')->where('user_id', Auth::user()->id)->get();
        return view('frontend.wishlists', compact('products'));

    }

    public function wishlistRemove($id)
    {
        Wishlist::where('id', $id)->first()->delete();
        $products = Wishlist::with('wishlistList')->where('user_id', Auth::user()->id)->get();
        return view('frontend.wishlists', compact('products'));

    }
    public function wishlistClear()
    {
        Wishlist::with('wishlistList')->where('user_id', Auth::user()->id)->delete();
        $products = Wishlist::with('wishlistList')->where('user_id', Auth::user()->id)->get();
        return view('frontend.wishlists', compact('products'));

    }


}
