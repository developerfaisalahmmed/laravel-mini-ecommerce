@extends('backend.layouts.app')

@section('title', 'Products')

@push('css')

@endpush


@section('content')

    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Orders </h6>
        <a class="btn btn-success" href=""> Latest Orders  </a>
    </div>
    <hr/>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#Order</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Payment Status</th>
                        <th>Payment Method</th>
                        <th>Order Status</th>
                        <th>Created Time</th>
                        <th>Update Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>#{{$order->invoice}}</td>
                            <td>{{$order->payable_price}}</td>
                            <td>{{$order->total_qty}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td>{{$order->order_payment_details->payment_method}}</td>
                            <td>{{$order->status}}</td>

                            <td>{{$order->created_at->diffForHumans()}}</td>
                            <td>{{$order->updated_at->diffForHumans()}}</td>
                            <td class="d-flex">
                                @can('order-edit')

                                    <a href="{{route('orders.edit',$order->id)}}" class="btn btn-sm"><i
                                            class="bx bxs-edit"></i></a>
                                @endcan
                                    @can('order-show')
                                <a href="{{route('orders.show',$order->invoice)}}" class="btn btn-sm"><i class="lni lni-eye"></i></a>
                                    @endcan
                                @can('order-delete')

                                    <form action="{{route('orders.destroy',$order->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm" type="submit"><i
                                                class="bx bxs-trash"></i></button>

                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#Order</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Payment Status</th>
                        <th>Payment Method</th>
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
