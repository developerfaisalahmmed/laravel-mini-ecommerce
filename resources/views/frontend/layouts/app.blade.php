<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quick On Shop </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

    @stack('css')
</head>
<body class="header_sticky">
<div class="quick-on-shop">
    <section id="header" class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 flat-support-mobile2">
                        <ul class="flat-support">
                            <li>
                                <a href="#" title="">Support</a>
                            </li>
                            <li>
                                <a href="#" title="">Store Locator</a>
                            </li>
                            <li>
                                <a href="#" title="">Track Your Order</a>
                            </li>
                        </ul><!-- /.flat-support -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-sm-4 col-md-4 flat-support-mobile2">
                        <ul class="flat-infomation">
                            <li class="phone">
                                Call Us: <a href="#" title="">(+91) 90129 83208</a>
                            </li>
                        </ul><!-- /.flat-infomation -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">

                        <ul class="flat-unstyled">
                            <li class="account flat-support-mobile">
                                <a href="#" title="">Quick Access<i class="fa fa-angle-down"
                                                                  aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="#" title=""> Support </a>
                                    </li>
                                    <li>
                                        <a href="#" title=""> Store Locator </a>
                                    </li>
                                    <li>
                                        <a href="#" title=""> Track Your Order  </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="account">
                                <a href="#" title="">My Account<i class="fa fa-angle-down"
                                                                  aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="{{route('login')}}" title="">Login</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">My Cart</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">My Account</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="">USD<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="#" title="">Euro</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Dolar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="#" title="">Turkish</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">English</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">اللغة العربية</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Español</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Italiano</a>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- /.flat-unstyled -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div id="logo" class="logo">
                            <a href="{{url('/')}}" title="">
                                <img class="logo_image" src="{{asset('frontend')}}/images/quick_on_shop.png" alt="">
{{--                                <h3>LOGO HERE</h3>--}}
                            </a>
                        </div><!-- /#logo -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-6">
                        <div class="top-search">
                            <form action="#" method="get" class="form-search" accept-charset="utf-8">
                                <div class="cat-wrap">
                                    <select name="category">
                                        <option value="">All Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->slug}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                </div><!-- /.cat-wrap -->
                                <div class="box-search">
                                    <input type="text" name="search" placeholder="Search what you looking for ?">
                                    <span class="btn-search">
                                            <button type="submit" class="waves-effect"><i
                                                    class="fa fa-search"></i></button>
                                        </span>

                                </div><!-- /.box-search -->
                            </form><!-- /.form-search -->
                        </div><!-- /.top-search -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-3">
                        <div class="box-cart">
                            <div class="inner-box">
                                <ul class="menu-compare-wishlist">
                                    <li class="compare">
                                        <a onClick="window.location.reload();" href="#" title="">
                                            <i class="fa fa-superpowers"></i>
                                        </a>
                                    </li>
                                    <li class="wishlist">
                                        <a href="#" title="">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul><!-- /.menu-compare-wishlist -->
                            </div><!-- /.inner-box -->
                            <div class="inner-box">
                                <a href="#" title="">
                                    <div class="icon-cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span>4</span>
                                    </div>
                                    <div class="price">
                                        $0.00
                                    </div>
                                </a>
                                <div class="dropdown-box">
                                    <ul>
                                        <li>
                                            <div class="img-product">
                                                <img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a33-5g.jpg"
                                                     alt="">
                                            </div>
                                            <div class="info-product">
                                                <div class="name">
                                                    Samsung - Galaxy S6 4G LTE <br />with 32GB Memory Cell Phone
                                                </div>
                                                <div class="price">
                                                    <span>1 x</span>
                                                    <span>$250.00</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <span class="delete">x</span>
                                        </li>
                                        <li>
                                            <div class="img-product">
                                                <img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a33-5g.jpg"
                                                     alt="">
                                            </div>
                                            <div class="info-product">
                                                <div class="name">
                                                    Samsung - Galaxy S6 4G LTE <br />with 32GB Memory Cell Phone
                                                </div>
                                                <div class="price">
                                                    <span>1 x</span>
                                                    <span>$250.00</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <span class="delete">x</span>
                                        </li>
                                    </ul>
                                    <div class="total">
                                        <span>Subtotal:</span>
                                        <span class="price">$1,999.00</span>
                                    </div>
                                    <div class="btn-cart">
                                        <a href="#" class="view-cart" title="">View Cart</a>
                                        <a href="#" class="check-out" title="">Checkout</a>
                                    </div>
                                </div>
                            </div><!-- /.inner-box -->
                        </div><!-- /.box-cart -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-middle -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-2">
                        <div id="mega-menu">
                            <div class="btn-mega"><span></span>ALL CATEGORIES</div>
                            <ul class="menu">
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{route('category.products',$category->slug)}}" title="" class="dropdown">
                                            <span class="menu-img">
                                                <img src="#" alt="">
                                            </span>
                                        <span class="menu-title">
                                               {{$category->name}}
                                            </span>
                                    </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Laptop And Mac
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Networking & Internet Devices</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Laptops, Desktops & Monitors</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Hard Drives & Memory Cards</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Computer Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Audio & Video
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Headphones & Speakers</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Home Entertainment Systems</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">MP3 & Media Players</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <ul class="banner">
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Headphones
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="#" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="#" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            TV & Audio
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="#" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="#" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Computers
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="#" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="#" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- /.col-md-3 col-2 -->
                    <div class="col-md-9 col-10">
                        <div class="nav-wrap">
{{--                            <div id="mainnav" class="mainnav">--}}
{{--                                <ul class="menu">--}}
{{--                                    <li class="column-1">--}}
{{--                                        <a href="#" title="">Home</a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 01</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 02</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 03</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 04</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 05</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 06</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 07</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 08</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 09</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Layout 10</a>--}}
{{--                                            </li>--}}
{{--                                        </ul><!-- /.submenu -->--}}
{{--                                    </li><!-- /.column-1 -->--}}
{{--                                    <li class="column-1">--}}
{{--                                        <a href="shop.html" title="">Shop</a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Shop left sidebar</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Shop right sidebar</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Shop list view</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Shop full width</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Shop 03 column</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Shop cart</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Shop checkout</a>--}}
{{--                                            </li>--}}
{{--                                        </ul><!-- /.submenu -->--}}
{{--                                    </li><!-- /.column-1 -->--}}
{{--                                    <li class="column-1">--}}
{{--                                        <a href="#" title="">Features</a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Home Theater Systems</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Receivers & Amplifiers</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Speakers</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>CD Players & Turntables</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>High-Resolution Audio</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>4K Ultra HD TVs</a>--}}
{{--                                            </li>--}}
{{--                                        </ul><!-- /.submenu -->--}}
{{--                                    </li><!-- /.column-1 -->--}}
{{--                                    <li class="has-mega-menu">--}}
{{--                                        <a href="#" title="">Electronic</a>--}}
{{--                                        <div class="submenu">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-lg-3 col-md-12">--}}
{{--                                                    <h3 class="cat-title">Accessories</h3>--}}
{{--                                                    <ul class="submenu-child">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Electronics</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Furniture</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Accessories</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Divided</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Everyday Fashion</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Modern Classic</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Party</a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <div class="show">--}}
{{--                                                        <a href="#" title="">Shop All</a>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- /.col-lg-3 col-md-12 -->--}}
{{--                                                <div class="col-lg-3 col-md-12">--}}
{{--                                                    <h3 class="cat-title">Laptop And Computer</h3>--}}
{{--                                                    <ul class="submenu-child">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Networking & Internet Devices</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Laptops, Desktops & Monitors</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Hard Drives & Memory Cards</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Printers & Ink</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Networking & Internet Devices</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Computer Accessories</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Software</a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <div class="show">--}}
{{--                                                        <a href="#" title="">Shop All</a>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- /.col-lg-3 col-md-12 -->--}}
{{--                                                <div class="col-lg-4 col-md-12">--}}
{{--                                                    <h3 class="cat-title">Audio & Video</h3>--}}
{{--                                                    <ul class="submenu-child">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Headphones & Speakers</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Home Entertainment Systems</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">MP3 & Media Players</a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <div class="show">--}}
{{--                                                        <a href="#" title="">Shop All</a>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- /.col-lg-4 col-md-12 -->--}}
{{--                                                <div class="col-lg-2 col-md-12">--}}
{{--                                                    <h3 class="cat-title">Home Audio</h3>--}}
{{--                                                    <ul class="submenu-child">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Home Theater Systems</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Receivers & Amplifiers</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">Speakers</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">CD Players & Turntables</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">High-Resolution Audio</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="">4K Ultra HD TVs</a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <div class="show">--}}
{{--                                                        <a href="#" title="">Shop All</a>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- /.col-lg-2 col-md-12 -->--}}
{{--                                            </div><!-- /.row -->--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    <div class="banner-box">--}}
{{--                                                        <div class="inner-box">--}}
{{--                                                            <a href="#" title="">--}}
{{--                                                                <img src="#" alt="">--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    <div class="banner-box">--}}
{{--                                                        <div class="inner-box">--}}
{{--                                                            <a href="#" title="">--}}
{{--                                                                <img src="#" alt="">--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div><!-- /.row -->--}}
{{--                                        </div><!-- /.submenu -->--}}
{{--                                    </li><!-- /.has-mega-menu -->--}}
{{--                                    <li class="column-1">--}}
{{--                                        <a href="#" title="">Pages</a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>About</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>404 Page</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Brands Page</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Categories 01</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Categories 02</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Element</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>FAQ</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Order Tracking</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Terms & Conditions</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Single Product 01</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Single Product 02</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Single Product 03</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Single Product 04</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Single Product 05</a>--}}
{{--                                            </li>--}}
{{--                                        </ul><!-- /.submenu -->--}}
{{--                                    </li><!-- /.column-1 -->--}}
{{--                                    <li class="column-1">--}}
{{--                                        <a href="#" title="">Blog</a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Blog left sidebar</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Blog right sidebar</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Blog list</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Blog 02 column</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Blog full width</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Blog single</a>--}}
{{--                                            </li>--}}
{{--                                        </ul><!-- /.submenu -->--}}
{{--                                    </li><!-- /.column-1 -->--}}
{{--                                    <li class="column-1">--}}
{{--                                        <a href="#" title="">Contact</a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Contact 01</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title=""><i class="fa fa-angle-right"--}}
{{--                                                                        aria-hidden="true"></i>Contact 02</a>--}}
{{--                                            </li>--}}
{{--                                        </ul><!-- /.submenu -->--}}
{{--                                    </li><!-- /.column-1 -->--}}
{{--                                </ul><!-- /.menu -->--}}
{{--                            </div><!-- /.mainnav -->--}}
                        </div><!-- /.nav-wrap -->
                        <div class="today-deal">
                            <a href="#" title="">TODAY DEALS</a>
                        </div><!-- /.today-deal -->
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                    </div><!-- /.col-md-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-bottom -->
    </section><!-- /#header -->

    @yield('content')


    <section class="Footer__StyledFooter-sc-hp9mtz-0 cUCdEo footer-main pt-40">
        <div class="pb-60 container">
            <div class="row">
                <div class="footer-single address col-sm-3">
                    <h2 class="Title__StyledTitle-sc-gk5zya-0 dgcOtO title">Quick On Shop</h2>
                    <ul>
                        <li>
                            <span>
                                <img src="https://azse77seaprodsa.blob.core.windows.net/b2b-dr-pickaboocdn/media/wysiwyg/cmsp/location.png">
                            </span>
                            House 11, Road 15, Block H,Gulshan 9, Dhaka - 1213, Bangladesh
                        </li>
                        <li>
                            <span>
                                <img src="https://azse77seaprodsa.blob.core.windows.net/b2b-dr-pickaboocdn/media/wysiwyg/cmsp/call.png">
                            </span>
                            +8801307788699
                        </li>
                        <li>
                            <span>
                                <img src="https://azse77seaprodsa.blob.core.windows.net/b2b-dr-pickaboocdn/media/wysiwyg/cmsp/msg.png">
                            </span>
                            support@quickonshop.com
                        </li>
                    </ul>
                </div>
                <div class="footer-single col">
                    <h2 class="Title__StyledTitle-sc-gk5zya-0 yaUVy title">About</h2>
                    <ul>
                        <li><a href="/details/about-us/">About Us</a></li>
                        <li><a href="/details/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="/details/cookie-policy/">Cookie Policy</a></li>
                        <li><a href="/details/terms-and-conditions/">Terms &amp; Conditions</a></li>
                        <li><a href="/details/why-shop-with-us/">Why shop with us</a></li>
                        <li><a href="/faq/">Help &amp; knowledge base</a></li>
                    </ul>
                </div>
                <div class="footer-single col">
                    <h2 class="Title__StyledTitle-sc-gk5zya-0 yaUVy title">help</h2>
                    <ul>
                        <li><a href="/faq">Payment</a></li>
                        <li><a href="/faq">Shipping</a></li>
                        <li><a href="/faq">Return and Replacement</a></li>
                        <li><a href="/faq">fAQ</a></li>
                    </ul>
                </div>
                <div class="footer-single col">
                    <h2 class="Title__StyledTitle-sc-gk5zya-0 yaUVy title">SOCIAL</h2>
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank"
                               rel="noopener">facebook</a></li>
                        <li><a href="https://twitter.com/" target="_blank" rel="noopener">twitter</a></li>
                        <li><a href="https://bd.linkedin.com/" target="_blank"
                               rel="noopener">linkedin</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"
                               rel="noopener">instagram</a></li>
                        <li><a href="https://www.youtube.com/" target="_blank"
                               rel="noopener">youtube</a></li>
                    </ul>
                </div>
                <div class="footer-single col">
                    <h2 class="Title__StyledTitle-sc-gk5zya-0 yaUVy title">Download</h2>
                    <ul>
                        <li class="a-tag">
                            <a href="" target="_blank" rel="noopener">
                                <img src="{{asset('frontend')}}/images/android.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener">
                                <img src="{{asset('frontend')}}/images/apple-store_1.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank"
                               rel="noopener">
                                <img src="{{asset('frontend')}}/images/app-gallery.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-bottom container">
            <div class="row">
                <div class="align-items-center d-flex copyright col">
                    <p>©2022 | quickonshop.com | All Rights Reserved.</p>
                </div>
                <div class="payment-methods d-flex justify-content-end align-items-center col-sm-8">
                    <p>Payment Methods</p>
                    <ul>
                        <li><img src="{{asset('frontend')}}/images/payment-one.svg" alt="">
                        </li>
                        <li><img src="{{asset('frontend')}}/images/payment-two.svg" alt="">
                        </li>
                        <li><img src="{{asset('frontend')}}/images/payment-three.svg"
                                 alt=""></li>
                        <li><img src="{{asset('frontend')}}/images/payment-four.svg"
                                 alt=""></li>
                        <li><img src="{{asset('frontend')}}/images/payment-five.svg"
                                 alt=""></li>
                        <li><img src="{{asset('frontend')}}/images/payment-six.svg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="{{asset('frontend')}}/js/custom.js"></script>


@stack('js')
</body>
</body>
</html>
