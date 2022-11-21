<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {

        $cartItems = \Cart::getContent();
        if ($cartItems->count() > 0) {
            $shipping_address = ShippingAddress::orderBy('id', 'DESC')->where('user_id', Auth::user()->id ?? '')->first();
            return view('frontend.checkout', compact('cartItems', 'shipping_address'));
        }
        return redirect('/');
    }


    public function store(Request $request)
    {

        $shipping_address = ShippingAddress::updateOrCreate([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'shipping_address' => $request->shipping_address,
            'user_id' => Auth::user()->id ?? '',
        ]);

        $order = Order::updateOrCreate([
            'invoice' => mt_rand(1000000000, 9999999999),
            'total_qty' => \Cart::getTotalQuantity(),
            'payable_price' => \Cart::getTotal(),
            'shipping_address_id' => $shipping_address->id,
            'user_id' => Auth::user()->id ?? '',
        ]);

        foreach (\Cart::getContent() as $item) {
            OrderDetails::Create([
                'invoice_id' => $order->invoice,
                'product_id' => $item->id,
                'price' => $item->price,
                'selling_price' => $item->attributes->selling_price,
                'discount_type' => $item->attributes->discount_type,
                'discount' => $item->attributes->discount,
                'quantity' => $item->quantity,
                'shipping_address_id' => $shipping_address->id,
                'user_id' => Auth::user()->id ?? '',
            ]);
        }


        \Cart::clear();


        if ($request->payment_method == 'nagad') {
            return 'Sorry we are not accept nagat';
        } elseif ($request->payment_method == 'bkah') {
            return 'Sorry we are not accept bkah,only cash on delivery';
        } else {
            return redirect('/profile');
        }

    }
}
