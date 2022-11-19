
@extends('frontend.layouts.app')



@push('css')


@endpush


@section('content')

    <section>
        <div class="container">
            <div class="row py-2">
                <div class="col-md-8 card">

                    <h4 class="py-3"><strong> My Shopping Bag </strong></h4>

                    @if(Cart::getTotal() > 0)

                        <table class="table">
                            <thead>
                            <tr>
                                <th> Image</th>
                                <th> Name</th>
                                <th> Qtd </th>
                                <th> Quantity</th>
                                <th> Price</th>
                                <th> Total</th>
                                <th> Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td>
                                        <img style="width: 200px;height: 50px" src="{{ $item->attributes->image }}"
                                             class=""
                                             alt="Thumbnail">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <form action="{{ route('cart.update') }}" method="POST"
                                              class="d-flex justify-content-between">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id}}">
                                            <input class="btn-height" type="number" name="quantity" min="1" value="{{ $item->quantity }}"/>
                                            <button class="btn btn-sm btn-success btn-height">Update</button>
                                        </form>
                                    </td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>৳{{ $item->price }}</td>
                                    <td>৳{{ $item->price*$item->quantity }}</td>
                                    <td>
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button class="btn btn-sm btn-success btn-height">x</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class=" py-3">
                            <h4 class="py-3"><strong>Promo Code</strong></h4>
                            <div class="d-flex justify-content-between">
                                <form>
                                    <div class="d-flex ">
                                        <input type="text" class="form-control btn-height bg-light" id="promo_code"
                                               placeholder="enter promo code here">
                                        <button class="btn btn-sm btn-warning btn-height"> Apply</button>
                                    </div>
                                </form>
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-sm btn-info btn-height">Clear Carts </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="py-5">
                            <p class="text-center p-3 bg-dark text-danger"> No items found in your cart </p>
                        </div>
                    @endif
                </div>
                <div class="col-md-4 card">
                    <h4 class="py-3"><strong>Order Summary</strong></h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p>Subtotal</p>
                                <p>৳ {{ Cart::getTotal() }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Tax</p>
                                <p>৳ 000</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h3>Total</h3>
                                <h3>৳ {{ Cart::getTotal() }}</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <a href="{{route('checkout')}}" class="text-white btn btn-success form-control">Checkout</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



@push('js')


@endpush
