@extends('frontend.layouts.app')

@section('content')


    <section>
        <div class="hp-mod-card card-categories J_Categories J_NavChangeHook" data-module-id="categories" id="hp-categories" data-spm="categories" data-spm-max-idx="16">
            <div class="hp-mod-card-header" data-spm-anchor-id="a2a0e.home.categories.i0.735212f7dYM6r7">
                <h3 class="hp-mod-card-title">Categories</h3>
            </div>
            <div class="hp-mod-card-content J_CategoriesItems">

                <div class="card-categories-ul">

                    @foreach($categories as $category)
                        <div class="card-categories-li hp-mod-card-hover align-left">
                            <a class="card-categories-li-content" href="{{route('category.products',$category->slug)}}">
                                <div class="card-categories-image-container">
                                    <img class="image" src="{{$category->image}}" alt="Mobiles">
                                </div>
                                <div class="card-categories-name"> <span class="text">{{$category->name}}</span> </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>


    <section>

        @foreach($category_products as $category_product)
            <div class="hp-mod-card card-jfy J_JFY J_NavChangeHook">
                {{--            @if(count( $category_product->category_products) > 0)--}}
                <div class="hp-mod-card-header d-flex justify-content-between">
                    <h3 class="hp-mod-card-title" data-spm-anchor-id="a2a0e.home.just4u.i0.4c2e12f7iOhPhU">{{$category_product->name}}</h3>
                    <h3 class="hp-mod-card-title-end"> <a href="" class="btn btn-sm btn-info btn-quick-on-shop">View All</a> </h3>
                </div>

                <div class="hp-mod-card-content J_JFYCard">
                    <div class="card-jfy-grid J_JFYItems">
                        <div class="card-jfy-wrapper">

                            <div class="card-jfy-row J_Row1">
                                @foreach($category_product->category_products  as $product)
                                    <div class="card-jfy-item-wrapper hp-mod-card-hover J_Items inline my-2">
                                        <a href="">
                                            <div class="card-jfy-item">

                                                <div class="card-jfy-image card-jfy-image-background J_GridImage">
                                                    <img class="image" src="{{json_decode($product->image) ?? 'Null'}}" alt="">
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
                                                            <span class="hp-mod-discount align-left"> -35%</span></div>
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
        @endforeach
    </section>




@endsection
