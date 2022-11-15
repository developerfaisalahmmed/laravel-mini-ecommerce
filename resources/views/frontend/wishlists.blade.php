@extends('frontend.layouts.app')



@push('css')


@endpush


@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @if($products->count() > 0)
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Image</th>
                            <th> Name</th>
                            <th> price</th>
                            <th> Add to Cart</th>
                            <th> Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products   as $product)
                            <tr>
                                <td>
                                    <img style="width: 200px;height: 50px" src="{{ asset($product->wishlistList->first_image[0]['image']) ?? 'Null'}}" class=""
                                         alt="{{ $product->wishlistList->title }}">
                                </td>
                                <td>{{ $product->wishlistList->title }}</td>
                                <td>৳{{ $product->wishlistList->price }}</td>
                                <td><form action="{{ route('cart.store') }}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $product->wishlistList->id }}" name="id">
                                        <input type="hidden" value="{{ $product->wishlistList->title }}" name="name">
                                        <input type="hidden" value="{{ $product->wishlistList->price }}" name="price">
                                        <input type="hidden"
                                               value="{{ asset($product->wishlistList->first_image[0]['image']) ?? 'Null'}}"
                                               name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="btn btn-sm btn-success btn-height" tabindex="0">
                                            <i class="fa fa-shopping-cart"></i> Add to Cart
                                        </button>
                                    </form></td>
                                <td>
                                    <a class="btn btn-sm btn-success btn-height" href="{{ route('wishlist.remove',$product->id) }}">x</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                        <div class="d-flex justify-content-end py-3">


                            <a class="btn btn-sm btn-success btn-height" href="{{ route('wishlist.clear') }}">Clear Wishlist</a>

                        </div>

                    @else
                        <div class="py-5">
                            <p class="text-center p-3 bg-dark text-danger"> No items found in your wishlists </p>
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
