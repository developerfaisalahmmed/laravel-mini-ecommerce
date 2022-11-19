@extends('frontend.layouts.app')

@section('content')

    <section class="py-2">
        <div class="container">
            <div class="">
                <h3 class="">Categories</h3>
            </div>
            <div class="row">

                @foreach($categories as $category)
                    <div class="col-md-2 py-1">
                        <a href="{{route('category.products',$category->slug)}}">
                            <div class="card" style="width:100%;">
                                <img class="category_image" src="{{asset($category->image)}}" alt="{{$category->name}}">
                                <p class="card-text text-center">{{$category->name}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section>
        @foreach($category_products as $category_product)
            <div class="container py-2">
                <div class="d-flex justify-content-between">
                    <h3 class="">{{$category_product->name}}</h3>
                    <h3 class="">
                        <a href="{{route('category.products',$category_product->slug)}}"
                           class="btn btn-sm btn-info btn-quick-on-shop">View All</a>
                    </h3>
                </div>
                <hr>
                <div class="row">

                    @foreach($category_product->category_products  as $product)
                        <div class="col-sm-6 col-md-3 col-lg-3 py-1">
                            <a href="{{route('product.details',$product->slug)}}">
                                <div class="card">
                                    <img src="{{$product->first_image[0]['image'] ?? 'Null'}}"
                                         alt="{{$product->title}}">
                                    <div class="card-body">
                                        <h6 class="card-text"><strong>{{$product->title}}</strong></h6>
                                        <h6 class="card-text"><strong> ৳{{$product->selling_price}} </strong> <sup>
                                                <del>৳{{$product->price}}</del> @if($product->discount_type == 1)
                                                    ৳{{$product->discount}}
                                                @else
                                                    {{$product->discount}}%
                                                @endif </sup></h6>
                                        <div class="py-1 d-flex justify-content-between">
                                            @auth
                                                <form action="{{ route('wishlist') }}" method="POST"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                                    <button class="btn btn-sm btn-warning btn-height" tabindex="0">
                                                        <i class="fa fa-heart"></i> Favourite
                                                    </button>
                                                </form>
                                            @endauth
                                            <form action="{{ route('cart.store') }}" method="POST"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="id">
                                                <input type="hidden" value="{{ $product->title }}" name="name">
                                                <input type="hidden" value="{{ $product->price }}" name="price">
                                                <input type="hidden" value="{{ $product->selling_price }}" name="selling_price">
                                                <input type="hidden" value="{{ $product->discount_type }}" name="discount_type">
                                                <input type="hidden" value="{{ $product->discount }}" name="discount">

                                                <input type="hidden"
                                                       value="{{ asset($product->first_image[0]['image']) ?? 'Null'}}"
                                                       name="image">
                                                <input type="hidden" value="1" name="quantity">
                                                <button class="btn btn-sm btn-success btn-height" tabindex="0">
                                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        @endforeach
    </section>

@endsection
