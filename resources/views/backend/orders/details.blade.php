@extends('backend.layouts.app')


@push('css')
@endpush


@section('title', 'Order Details')




@section('content')

    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Order Details</h6>
        <a class="btn btn-success" href="{{route('orders.index')}}"> ALl Orders </a>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#Order</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Order Status</th>
                        <th>Created Time</th>
                        <th>Update Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order_details as $order)
                        <tr>
                            <td>#{{$order->invoice_id}}</td>
                            <td>{{$order->order_product_details->title}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->status}}</td>
                            <td>{{$order->created_at->diffForHumans()}}</td>
                            <td>{{$order->updated_at->diffForHumans()}}</td>
                            <td>
                                <a target="_blank" href="{{route('product.details',$order->order_product_details->slug)}}" class="btn btn-sm"><i class="lni lni-eye"></i></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#Order</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Order Status</th>
                        <th>Created Time</th>
                        <th>Update Time</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

@endsection



@push('js')


@endpush
