@extends('frontend.layouts.app')

@section('content')

    <section>
            <div class="hp-mod-card card-jfy J_JFY J_NavChangeHook">
                {{--            @if(count( $category_product->category_products) > 0)--}}
                <div class="hp-mod-card-header d-flex justify-content-between">
                    <a class="">/Home/Category/{{$category_products->name}}</a>
                </div>

                <div class="hp-mod-card-content J_JFYCard">
                    <div class="card-jfy-grid J_JFYItems">
                        <div class="card-jfy-wrapper">

                            <div class="card-jfy-row J_Row1">
                                @foreach($category_products->category_products  as $product)
                                    <div class="card-jfy-item-wrapper hp-mod-card-hover J_Items inline my-2">
                                        <a href="{{route('product.details',$product->slug)}}">
                                            <div class="card-jfy-item">

                                                <div class="card-jfy-image card-jfy-image-background J_GridImage">
                                                    <img class="image" src="{{ asset($product->first_book[0]['image']) ?? 'Null'}}" alt="">
                                                </div>

                                                <div class="card-jfy-item-desc">

                                                    <div class="card-jfy-segment">
                                                    </div>


                                                    <div class="card-jfy-title"><span class="title">{{$product->title}}</span></div>


                                                    <div class="hp-mod-price">

                                                        <div class="hp-mod-price-first-line">
                                                            <span class="currency">৳</span><span class="price">{{$product->selling_price}}</span>
                                                        </div>

                                                        <div class="hp-mod-price-second-line"><span class="hp-mod-price-text align-left">
                                                    <span class="currency">৳</span><span class="price">{{$product->price}}</span></span>
                                                            <span class="hp-mod-discount align-left">
                                                                 @if($product->discount_type == 1)
                                                                    ৳{{$product->discount}}
                                                                @else
                                                                    {{$product->discount}}%
                                                                @endif
                                                            </span></div>
                                                    </div>


                                                    {{--                                            <div class="card-jfy-footer">--}}

                                                    {{--                                                <div class="card-jfy-ratings">--}}
                                                    {{--                                                    <div class="card-jfy-rating-layer top-layer checked" style="width: 88.5714%">--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="card-jfy-rating-layer">--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                        <span class="rating lazada-ic-Star0 lazada-icon"></span>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                </div>--}}
                                                    {{--                                                <div class="card-jfy-ratings-comment">(49)</div>--}}


                                                    {{--                                            </div>--}}

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
                {{--            @endif--}}
            </div>
    </section>




@endsection
