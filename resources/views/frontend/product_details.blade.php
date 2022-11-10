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
                            <p class="card-text">{{$product->description}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

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
@endpush
