@extends('frontend.layouts.app')



@push('css')

    <link rel="stylesheet" type="text/css"
          href="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/dist/xzoom.css" media="all"/>
    <link type="text/css" rel="stylesheet" media="all"
          href="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/magnific-popup/css/magnific-popup.css"/>

@endpush


@section('content')

    <section>
        <div class="hp-mod-card card-jfy J_JFY J_NavChangeHook">
            <div class="hp-mod-card-header d-flex justify-content-between">
                <a class="" href="">/Home/Product is {{$product->title}}</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card pt-3">
                        <div class="xzoom-container">
                            <img height="200px" class="xzoom5" id="xzoom-magnific"
                                 src="{{ asset($product->first_image[0]['image']) ?? 'Null' }} "
                                 xoriginal="{{ asset($product->first_image[0]['image']) ?? 'Null'}} "/>
                            <div class="xzoom-thumbs">
                                @foreach($product->productImages ?? 'null' as $product_image)
                                    <a href="{{asset($product_image->image ?? 'Null')}}">
                                        <img class="xzoom-gallery5" width="80"
                                             src="{{asset($product_image->image ?? 'Null')}}"
                                             xpreview="{{asset($product_image->image ?? 'Null')}}"
                                             title="The description goes here">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text">{!! $product->description !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="_product-detail-content">
                        <p class="_p-name"> {{$product->title}} </p>
                        <div class="_p-price-box">
                            <div class="p-list">
                                <span> Product Price : <del> ৳{{$product->price}}  </del>   </span>
                                <span> Selling Price : ৳{{$product->selling_price}}  </span>
                                <span> Discount :
                                    @if($product->discount_type == 1)
                                        ৳{{$product->discount}}
                                    @else
                                        {{$product->discount}}%
                                    @endif
                                </span>
                            </div>
                            <div class="d-flex justify-content-between">
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
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->title }}" name="name">
                                    <input type="hidden" value="{{ $product->selling_price }}" name="price">
                                    <input type="hidden" value="{{ $product->selling_price }}" name="selling_price">
                                    <input type="hidden" value="{{ $product->discount_type }}" name="discount_type">
                                    <input type="hidden" value="{{ $product->discount }}" name="discount">

                                    <input type="hidden" value="{{ asset($product->first_image[0]['image']) ?? 'Null'}}"
                                           name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="btn btn-sm btn-success btn-height" tabindex="0">
                                        <i class="fa fa-shopping-cart"></i> Add to Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



@push('js')

    <script type="text/javascript"
            src="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/js/vendor/jquery.js"></script>
    <script type="text/javascript"
            src="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/dist/xzoom.min.js"></script>
    <script type="text/javascript"
            src="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/magnific-popup/js/magnific-popup.js"></script>
    <script type="text/javascript"
            src="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/js/setup.js"></script>

    <script>
        $('.decrease_').click(function () {
            decreaseValue(this);
        });
        $('.increase_').click(function () {
            increaseValue(this);
        });

        function increaseValue(_this) {
            var value = parseInt($(_this).siblings('input#number').val(), 10);
            value = isNaN(value) ? 0 : value;
            value++;
            $(_this).siblings('input#number').val(value);
        }

        function decreaseValue(_this) {
            var value = parseInt($(_this).siblings('input#number').val(), 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            $(_this).siblings('input#number').val(value);
        };
    </script>
@endpush
