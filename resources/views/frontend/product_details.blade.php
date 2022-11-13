@extends('frontend.layouts.app')



@push('css')

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/dist/xzoom.css" media="all"/>
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/magnific-popup/css/magnific-popup.css"/>

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
                                 src="{{ asset($product->first_book[0]['image']) ?? 'Null' }} "
                                 xoriginal="{{ asset($product->first_book[0]['image']) ?? 'Null'}} "/>
                            <div class="xzoom-thumbs">
                                @foreach($product->productImages ?? 'null' as $product_image)
                                    <a href="{{asset($product_image->image ?? 'Null')}}">
                                        <img class="xzoom-gallery5" width="80" src="{{asset($product_image->image ?? 'Null')}}" xpreview="{{asset($product_image->image ?? 'Null')}}" title="The description goes here">
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
                        <p class="_p-name"> Milton Bottle </p>
                        <div class="_p-price-box">
                            <div class="p-list">
                                <span> M.R.P. : <i class="fa fa-inr"></i> <del> 1399  </del>   </span>
                                <span class="price"> Rs. 699 </span>
                            </div>
                            <div class="_p-add-cart">
                                <div class="_p-qty">
                                    <span>Add Quantity</span>
{{--                                    <div class="value-button decrease_" id="" value="Decrease Value">-</div>--}}
                                    <input type="number" name="qty" id="number" value="1" min="1" />
{{--                                    <div class="value-button increase_" id="" value="Increase Value">+</div>--}}
                                </div>
                            </div>
                            <form action="" method="post" accept-charset="utf-8">
                                <ul class="spe_ul"></ul>
                                <div class="_p-qty-and-cart">
                                    <div class="_p-add-cart">
                                        <button class="btn-theme btn buy-btn" tabindex="0">
                                            <i class="fa fa-shopping-cart"></i> Buy Now
                                        </button>
                                        <button class="btn-theme btn btn-success" tabindex="0">
                                            <i class="fa fa-shopping-cart"></i> Add to Cart
                                        </button>
                                        <input type="hidden" name="pid" value="18" />
                                        <input type="hidden" name="price" value="850" />
                                        <input type="hidden" name="url" value="" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



@push('js')

    <script type="text/javascript" src="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/js/vendor/jquery.js"></script>
    <script type="text/javascript" src="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/dist/xzoom.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/magnific-popup/js/magnific-popup.js"></script>
    <script type="text/javascript" src="{{asset('frontend/product-gallery-with-image-zoom-xzoom')}}/js/setup.js"></script>

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
