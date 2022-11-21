@extends('frontend.user.profile_layout.layout')


@section('user-content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Invoice</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $key => $order)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$order->invoice}}</td>
                        <td>{{$order->total_qty}}</td>
                        <td>৳{{$order->payable_price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{route('order.details',$order->invoice)}}" class="btn btn-sm btn-success">Details</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
