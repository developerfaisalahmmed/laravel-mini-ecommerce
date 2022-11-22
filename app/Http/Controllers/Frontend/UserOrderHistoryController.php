<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Auth;

class UserOrderHistoryController extends Controller
{
    public function index()
    {
        $orders = Order::with('order_payment_details')->orderBy('id','DESC')->where('user_id',Auth::user()->id ?? '')->get();
//        return $orders;

        return view('frontend.user.order_history',compact('orders'));
    }


    public function order_details($id){
        $order_details = OrderDetails::with('order_product_details','order_product_image_details')->where('invoice_id',$id)->get();
//        return $order_details;
        return view('frontend.user.order_history_details',compact('order_details'));

    }

}
