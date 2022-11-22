<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\returnArgument;

class OrderManagementController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:dashboard');

        $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:order-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:order-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $orders = Order::with('order_payment_details')->orderBy('id', 'DESC')->get();
//        return $orders;
        return view('backend.orders.index', compact('orders'));
    }


    public function show($id){
        $order_details = OrderDetails::with('order_product_details','order_product_image_details')->where('invoice_id',$id)->get();
//        return $order_details;
        return view('backend.orders.details',compact('order_details'));

    }
    public function destroy(Request $request,$id){
//        return $id;

       Order::where('id',$id)->first()->delete();
        return redirect()->back();

    }



}
