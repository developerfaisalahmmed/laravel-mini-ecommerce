@extends('frontend.layouts.app')



@push('css')


@endpush


@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    @if(Cart::getTotal() > 0)

                    <table class="table">
                        <thead>
                        <tr>
                            <th> Image</th>
                            <th> Name</th>
                            <th> Qtd</th>
                            <th> Quantity</th>
                            <th> price</th>
                            <th> Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td>
                                    <img style="width: 200px;height: 50px" src="{{ $item->attributes->image }}" class=""
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
                    <div class="d-flex justify-content-between py-5">

                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-info btn-height">Clear Carts </button>
                        </form>

                        <form>
                            <button class="btn btn-sm btn-warning btn-height"> Total : ৳ {{ Cart::getTotal() }} </button>
                        </form>

                        <form>
                            <button class="btn btn-sm btn-success btn-height"> Checkout </button>
                        </form>

                    </div>
                    @else
                        <div class="py-5">
                            <p class="text-center p-3 bg-dark text-danger"> No items found in your cart </p>
                        </div>
                  @endif
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection



@push('js')


@endpush
