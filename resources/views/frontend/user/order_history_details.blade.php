@extends('frontend.user.profile_layout.layout')


@section('user-content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
{{--                        <th scope="col">Invoice</th>--}}
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">T.Price</th>
                        <th scope="col">O.Status</th>
                        <th scope="col">Time</th>
{{--                        <th scope="col">Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order_details as $key => $order)
                    <tr>
                        <td>{{$key+1}}</td>
{{--                        <td>{{$order->invoice_id}}</td>--}}
                        <td>{{$order->order_product_details->title}}</td>
                        <td><img width="50px" src="{{$order->order_product_image_details->image}}"></td>
                        <td>{{$order->quantity}}</td>
                        <td>৳{{$order->price}}</td>
                        <td>৳{{$order->quantity*$order->price}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->created_at->diffForHumans()}}</td>
{{--                        <td>--}}
{{--                            <a href="" class="btn btn-sm btn-success">Details</a>--}}
{{--                        </td>--}}
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
