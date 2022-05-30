<!doctype html>
<html lang="en">

<!-- Mirrored from template.annimexweb.com/optimal/index-demo4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 May 2022 10:17:11 GMT -->
<head>
        <!--Required Meta Tags-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="phijab id">
        <!-- Title Of Site -->
        <title>Phijab.id</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{url('')}}/assets/images/logo.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{url('')}}/assets/css/plugins.css" />
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{url('')}}/assets/css/style.css" />
        <link rel="stylesheet" href="{{url('')}}/assets/css/responsive.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>

    <body class="template-index index-demo4">
        <!-- Page Loader -->
        <div id="pre-loader"><img src="{{url('')}}/assets/images/loader.gif" alt="Loading..." /></div>
        <!-- End Page Loader -->

        <!--Page Wrapper-->
        <div class="page-wrapper">
            <!--Header-->
            <header id="header" class="header header-main mih-70 d-flex align-items-center header-4">
                <div class="container">
                    <div class="row">
                        <!--Logo / Menu Toggle-->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2 align-self-center justify-content-start d-flex">
                            <!--Mobile Toggle-->
                            <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none"><i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i></button>
                            <!--End Mobile Toggle-->
                            <!--Logo-->
                            <div class="logo"><a href="{{url('')}}"><img class="logo-img" src="{{url('')}}/assets/images/logo.png" alt="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" title="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" /><span class="logo-txt d-none">Optimal</span></a></div>
                            <!--End Logo-->
                        </div>
                        <!--End Logo / Menu Toggle-->
                        <!--Main Navigation Desktop-->
                        <div class="col-1 col-sm-1 col-md-1 col-lg-7 align-self-center d-menu-col">
                            <nav class="grid__item" id="AccessibleNav">
                                <ul id="siteNav" class="site-nav medium left hidearrow">
                                    <li class="lvl1"><a href="{{url('')}}">Home <i class="an an-angle-down-l"></i></a></li>
                                    <li class="lvl1"><a href="{{url('/product')}}">Product <i class="an an-angle-down-l"></i></a></li>
                                    @if(Auth::check())
                                    @if(Auth::user()->level=='admin')
                                    <li class="lvl1 parent dropdown"><a href="#">Master <i class="an an-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('/products')}}" class="site-nav">Product</a></li>
                                            <li><a href="{{url('/products/type')}}" class="site-nav">Product Type</a></li>
                                            <li><a href="{{url('/pesanan')}}" class="site-nav">Pesanan</a></li>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="lvl1"><a href="{{url('/account')}}">Account <i class="an an-angle-down-l"></i></a></li>
                                    @endif
                                    @endif
                                </ul>
                            </nav>
                        </div>
                        <!--End Main Navigation Desktop-->
                        <!--Right Action-->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center icons-col d-flex justify-content-end">
                            <!--Setting Dropdown-->
                            <div class="user-link iconset"><i class="icon an an-user d-block d-lg-none"></i><span class="text d-none d-lg-flex">My Account</span></div>
                            <div id="userLinks">
                                <ul class="user-links">
                                    @guest
                                        <li><a href="{{url('login')}}">Login</a></li>
                                    @else
                                        <li><a href="{{url('account')}}">Dashboard</a></li>
                                        <li><a href="{{url('logout')}}">Logout</a></li>
                                    @endguest
                                </ul>
                            </div>
                            <!--End Setting Dropdown-->
                            <!--Minicart Drawer-->
                            <div class="header-cart iconset">
                                <a href="#" class="site-header__cart btn-minicart" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                                    <i class="icon an an-sq-bag"></i><span class="site-cart-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">0</span><span class="tooltip-label">Cart</span>
                                </a>
                            </div>
                            <div class="header-cart iconset">
                                <a href="{{url('chat')}}" class="site-header__cart btn-minicart">
                                    <i class="icon an an-laptop-r"></i><span class="tooltip-label">Chat</span>
                                </a>
                            </div>
                            <!--End Minicart Drawer-->
                        </div>
                        <!--End Right Action-->
                    </div>
                </div>

            </header>
            <!--End Header-->
            <!--Mobile Menu-->
            <div class="mobile-nav-wrapper" role="navigation">
                <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i>Menu</div>
                <ul id="MobileNav" class="mobile-nav">
                    <li class="lvl1 bottom-link"><a href="{{url('')}}">Home</a></li>
                    <li class="lvl1 bottom-link"><a href="{{url('/product')}}">Product</a></li>
                    @if(Auth::check())
                        @if(Auth::user()->level=='admin')
                        <li class="lvl1 bottom-link"><a href="{{url('/product')}}">list Products</a></li>
                        <li class="lvl1 bottom-link"><a href="{{url('/products/type')}}">Product Type</a></li>
                        <li class="lvl1 bottom-link"><a href="{{url('/pesanan')}}">Pesanan</a></li>
                        @else
                        <li class="lvl1 bottom-link"><a href="{{url('/account')}}">Account</a></li>
                    @endif

                    @endif
                    <li class="help bottom-link"><b>NEED HELP?</b><br>Call: 0852-9580-8597</li>
                </ul>
            </div>
            <!--End Mobile Menu-->

            <!--Page Wrapper-->
            @yield('content')
            <!--End Body Container-->

            <!--Footer-->
            <div class="footer footer-4">
                <div class="footer-top clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Lokasi Toko</h4>
                                <ul>
                                    <li>Jl. Cisanggiri V, Blok S11 No. 18, Perum Graha Asri, Desa Jatireja, Kecamatan Cikarang Timur, Kabupaten Bekasi, Jawa Barat</li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">

                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4"></h4>

                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 social-icons-col">
                                <h4 class="h4">Stay Connected</h4>
                                <ul class="d-flex flex-column">
                                    <li><a href="#" class="d-flex-center"><i class="an an-facebook" aria-hidden="true"></i> <span>Facebook</span></a></li>
                                    <li><a href="#" class="d-flex-center"><i class="an an-instagram" aria-hidden="true"></i> <span>Instagram</span></a></li>
                                    <li><a href="#" class="d-flex-center"><i class="an an-whatsapp" aria-hidden="true"></i> <span>Whatsapp</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                            <img src="{{url('')}}/assets/images/payment.png" alt="Paypal Visa Payments"/>
                            <div class="copytext">&copy; 2022 phijab.id  All Rights Reserved.</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer-->

            <!--Scoll Top-->
            <span id="site-scroll" class="textbase" title="SCROLL UP">SCROLL UP <i class="an an-long-arrow-alt-right" aria-hidden="true"></i></span>
            <!--End Scoll Top-->

            <!--MiniCart Drawer-->
            <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div id="cart-drawer" class="block block-cart">
                            <form action="{{url('checkout')}}" method="post">
                                @csrf
                                <div class="minicart-header">
                                    <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                                    <h4 class="fs-6 text-black">Your cart</h4>
                                </div>
                                <div class="minicart-content">
                                    <ul class="clearfix" id="listcart">

                                    </ul>
                                </div>
                                <div class="minicart-bottom text-black">
                                    <div class="subtotal">
                                        <span>Total:</span>
                                        <span class="product-price"></span>
                                    </div>
                                    <button type="submit" class="w-100 p-2 my-2 btn btn-secondary proceed-to-checkout">Proceed to Checkout</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End MiniCart Drawer-->
            <div class="modalOverly"></div>

            <!--Quickview Popup-->
            <div class="loadingBox"><div class="an-spin"><i class="icon an an-spinner4"></i></div></div>
            <div id="quickView-modal" class="mfp-with-anim mfp-hide">
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                        <!--Model thumbnail -->
                        <div id="quickView" class="carousel slide">
                            <!-- Image Slide carousel items -->
                            <div class="carousel-inner">
                                <div class="item carousel-item active" data-bs-slide-number="0">
                                    <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5.jpg" src="{{url('')}}/assets/images/products/product-5.jpg" alt="image" title="" />
                                </div>
                                <div class="item carousel-item" data-bs-slide-number="1">
                                    <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5-1.jpg" src="{{url('')}}/assets/images/products/product-5-1.jpg" alt="image" title="" />
                                </div>
                                <div class="item carousel-item" data-bs-slide-number="2">
                                    <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5-2.jpg" src="{{url('')}}/assets/images/products/product-5-2.jpg" alt="image" title="" />
                                </div>
                                <div class="item carousel-item" data-bs-slide-number="3">
                                    <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5-3.jpg" src="{{url('')}}/assets/images/products/product-5-3.jpg" alt="image" title="" />
                                </div>
                                <div class="item carousel-item" data-bs-slide-number="4">
                                    <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5-4.jpg" src="{{url('')}}/assets/images/products/product-5-4.jpg" alt="image" title="" />
                                </div>
                            </div>
                            <!-- End Image Slide carousel items -->
                            <!-- Thumbnail image -->
                            <div class="model-thumbnail-img">
                                <!-- Thumbnail slide -->
                                <div class="carousel-indicators list-inline">
                                    <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#quickView">
                                        <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5.jpg" src="{{url('')}}/assets/images/products/product-5.jpg" alt="image" title="" />
                                    </div>
                                    <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#quickView">
                                        <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5-1.jpg" src="{{url('')}}/assets/images/products/product-5-1.jpg" alt="image" title="" />
                                    </div>
                                    <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#quickView">
                                        <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5-2.jpg" src="{{url('')}}/assets/images/products/product-5-2.jpg" alt="image" title="" />
                                    </div>
                                    <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#quickView">
                                        <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5-3.jpg" src="{{url('')}}/assets/images/products/product-5-3.jpg" alt="image" title="" />
                                    </div>
                                    <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4" data-bs-target="#quickView">
                                        <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-5-4.jpg" src="{{url('')}}/assets/images/products/product-5-4.jpg" alt="image" title="" />
                                    </div>
                                </div>
                                <!-- End Thumbnail slide -->
                                <!-- Carousel arrow button -->
                                <a class="carousel-control-prev carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon an-3x an an-angle-left"></i><span class="visually-hidden">Previous</span></a>
                                <a class="carousel-control-next carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon an-3x an an-angle-right"></i><span class="visually-hidden">Next</span></a>
                                <!-- End Carousel arrow button -->
                            </div>
                            <!-- End Thumbnail image -->
                        </div>
                        <!--End Model thumbnail -->
                        <div class="text-center mt-3"><a href="product-layout1.html">VIEW MORE DETAILS</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <h2 class="product-title">Product Quick View Popup</h2>
                        <div class="product-review d-flex-center mb-2">
                            <div class="rating"><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star-o"></i></div>
                            <div class="reviews ms-2"><a href="#">5 Reviews</a></div>
                        </div>
                        <div class="product-info">
                            <p class="product-vendor">Vendor:  <span class="fw-normal"><a href="#" class="fw-normal">Optimal</a></span></p>
                            <p class="product-type">Product Type: <span class="fw-normal">Tops</span></p>
                            <p class="product-sku">SKU:  <span class="fw-normal">50-ABC</span></p>
                        </div>
                        <div class="pro-stockLbl my-2">
                            <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> In stock</span></span>
                            <span class="d-flex-center stockLbl preorder d-none"><i class="icon an an-clock-r"></i><span> Pre-order Now</span></span>
                            <span class="d-flex-center stockLbl outstock d-none"><i class="icon an an-times-cil"></i> <span>Sold out</span></span>
                            <span class="d-flex-center stockLbl lowstock d-none" data-qty="15"><i class="icon an an-exclamation-cir"></i><span> Order now, Only  <span class="items">10</span>  left!</span></span>
                        </div>
                        <div class="pricebox">
                            <span class="price old-price">$400.00</span><span class="price product-price__sale">$300.00</span>
                        </div>
                        <div class="sort-description">Optimal Multipurpose Bootstrap 5 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.. </div>
                        <form method="post" action="#" id="product_form--option" class="product-form">
                            <div class="product-options d-flex-wrap">
                                <div class="swatch clearfix swatch-0 option1">
                                    <div class="product-form__item">
                                        <label class="label d-flex">Color:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">Black</span></label>
                                        <ul class="swatches-image swatches d-flex-wrap list-unstyled clearfix">
                                            <li data-value="Black" class="swatch-element color available active">
                                                <label class="rounded-0 swatchLbl small color black" title="Black"></label>
                                                <span class="tooltip-label top">Black</span>
                                            </li>
                                            <li data-value="Green" class="swatch-element color available">
                                                <label class="rounded-0 swatchLbl small color green" title="Green"></label>
                                                <span class="tooltip-label top">Green</span>
                                            </li>
                                            <li data-value="Orange" class="swatch-element color available">
                                                <label class="rounded-0 swatchLbl small color orange" title="Orange"></label>
                                                <span class="tooltip-label top">Orange</span>
                                            </li>
                                            <li data-value="Blue" class="swatch-element color available">
                                                <label class="rounded-0 swatchLbl small color blue" title="Blue"></label>
                                                <span class="tooltip-label top">Blue</span>
                                            </li>
                                            <li data-value="Red" class="swatch-element color available">
                                                <label class="rounded-0 swatchLbl small color red" title="Red"></label>
                                                <span class="tooltip-label top">Red</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swatch clearfix swatch-1 option2">
                                    <div class="product-form__item">
                                        <label class="label">Size:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">XS</span></label>
                                        <ul class="swatches-size d-flex-center list-unstyled clearfix swatch-1 option2">
                                            <li data-value="XS" class="swatch-element xs available active">
                                                <label class="swatchLbl rounded-0 medium" title="XS">XS</label>
                                                <span class="tooltip-label">XS</span>
                                            </li>
                                            <li data-value="S" class="swatch-element s available">
                                                <label class="swatchLbl rounded-0 medium" title="S">S</label>
                                                <span class="tooltip-label">S</span>
                                            </li>
                                            <li data-value="M" class="swatch-element m available">
                                                <label class="swatchLbl rounded-0 medium" title="M">M</label>
                                                <span class="tooltip-label">M</span>
                                            </li>
                                            <li data-value="L" class="swatch-element l available">
                                                <label class="swatchLbl rounded-0 medium" title="L">L</label>
                                                <span class="tooltip-label">L</span>
                                            </li>
                                            <li data-value="XL" class="swatch-element xl available">
                                                <label class="swatchLbl rounded-0 medium" title="XL">XL</label>
                                                <span class="tooltip-label">XL</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-action d-flex-wrap w-100 mb-3 clearfix">
                                    <div class="quantity">
                                        <div class="qtyField rounded">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" name="quantity" value="1" class="product-form__input qty rounded-0">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart ms-3 fl-1">
                                        <button type="button" class="btn button-cart rounded-0"><span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="wishlist-btn d-flex-center">
                            <a class="add-wishlist d-flex-center text-uppercase me-3" href="my-wishlist.html" title="Add to Wishlist"><i class="icon an an-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                            <a class="add-compare d-flex-center text-uppercase" href="compare-style1.html" title="Add to Compare"><i class="icon an an-random-r me-2"></i> <span>Add to Compare</span></a>
                        </div>
                        <!-- Social Sharing -->
                        <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                            <span class="sharing-lbl me-2">Share :</span>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon an an-facebook mx-1"></i><span class="share-title d-none">Facebook</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon an an-twitter mx-1"></i><span class="share-title d-none">Tweet</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon an an-pinterest-p mx-1"></i> <span class="share-title d-none">Pin it</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon an an-instagram mx-1"></i><span class="share-title d-none">Instagram</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i class="icon an an-whatsapp mx-1"></i><span class="share-title d-none">WhatsApp</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon an an-envelope-l mx-1"></i><span class="share-title d-none">Email</span></a>
                        </div>
                        <!-- End Social Sharing -->
                    </div>
                </div>
            </div>
            <!--End Quickview Popup-->

            <!--Addtocart Added Popup-->
            <div id="pro-addtocart-popup" class="mfp-with-anim mfp-hide">
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                <div class="addtocart-inner text-center clearfix">
                    <h4 class="title mb-3 text-success">Added to your shopping cart successfully.</h4>
                    <div class="pro-details">
                        <div class="button-action">
                            <a href="{{url('')}}" class="btn btn-primary view-cart mx-1 rounded-0">Go To Checkout</a>
                            <a href="{{url('')}}" class="btn btn-secondary rounded-0">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Addtocart Added Popup-->


            <!-- Including Jquery -->
            <script src="{{url('')}}/assets/js/vendor/jquery-min.js"></script>
            <script src="{{url('')}}/assets/js/vendor/js.cookie.js"></script>
            <!--Including Javascript-->
            <script src="{{url('')}}/assets/js/plugins.js"></script>
            <script src="{{url('')}}/assets/js/main.js"></script>
            <script>
                @guest
                @else
                $.ajax({
                url: "{{url('api/cart/'.Auth::user()->id)}}",
                type:"get",
                success:function(response){
                    $('.counter').html(response.count);
                    var listcart = "";
                    var totalprice = 0;
                    $.each(response.data, function(k, v) {
                        totalprice = totalprice+v.product_price*v.qty;
                        listcart =listcart+'<li class="item d-flex justify-content-center align-items-center">'+
                                        '<a class="product-image" href="product-layout1.html">'+
                                            '<img class="blur-up lazyload" src="/assets/images/'+v.product_thumb1+'" data-src="{{url('')}}/assets/images/'+v.product_thumb1+'" alt="image" title="">'+
                                        '</a>'+
                                        '<div class="product-details">'+
                                            '<a class="product-title" href="product-layout1.html">'+v.product_name+'</a>'+
                                            '<div class="variant-cart mb-1">'+v.product_type+'</div>'+
                                            '<div class="priceRow">'+
                                                '<div class="product-prices">'+
                                                    '<span class="money">'+v.product_price+'</span>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="qtyDetail text-center">'+
                                            '<div class="wrapQtyBtn">'+
                                                '<div class="qtyField">'+
                                                    '<a class="qtyBtn qtyBtna minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>'+
                                                    '<input type="text" name="quantity['+v.id+']" data-price="'+v.product_price+'" value="'+v.qty+'" class="qtya rounded-0">'+
                                                    '<input type="hidden" name="pid['+v.id+']" data-price="'+v.product_price+'" value="'+v.product_id+'">'+
                                                    '<input type="hidden" name="price['+v.id+']" data-price="'+v.product_price+'" value="'+v.product_price+'">'+
                                                    '<a class="qtyBtn qtyBtna plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>'+
                                                '</div>'+
                                            '</div>'+
                                            '<a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>'+
                                            '<a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>'+
                                        '</div>'+
                                    '</li>';
                    });
                    $('#listcart').html(listcart);
                    $(".product-price").html('IDR. '+totalprice);
                },
                error: function(error) {
                    console.log(error);
                }
                });
                @endguest
            </script>
            <script>
        //         $(".qtyBtn").on("click", function () {

        // });
            $(document).on("click",".qtyBtna",function() {
                    var qtyField = $(this).parent(".qtyField"),
                    oldValue = $(qtyField).find(".qtya").val(),
                    newVal = 1;
                    if ($(this).is(".plus")) {
                        newVal = parseInt(oldValue) + 1;
                    } else if (oldValue > 1) {
                        newVal = parseInt(oldValue) - 1;
                    }
                    $(qtyField).find(".qtya").val(newVal);

                    var sum = 0;
                    $('.qtya').each(function(index, item){
                        sum += parseFloat(this.value*$(item).data('price'));
                    });
                    $(".product-price").html('IDR. '+sum);
            });
            @guest
            @else
            @if(Auth::user()->level != 'admin')
                $("#senderid").val('{{Auth::user()->id}}');
                getlistpesan({{Auth::user()->id}})
            @endif
            $(document).on("click",".sendername",function() {
                getlistpesan(this.id)
                $("#senderid").val(this.id)
            });
            // $(document).ready(function(){
            //     setInterval(getlistpesan(2),1000);
            // });
            setInterval(function() {
                @if(Auth::user()->level != 'admin')
                    getlistpesan({{Auth::user()->id}})
                    $("#senderid").val('{{Auth::user()->id}}');
                @else
                    getlistpesan($("#senderid").val())
                @endif
            }, 10000);

            function getlistpesan(id){
                $.ajax({
                url: "{{url('api/getList')}}/"+id,
                type:"get",
                success:function(response){
                    var listcart = "";
                    var cls = "";
                    $.each(response.data, function(k, v) {
                        listcart = listcart +"";
                            if(v.is_sender=='false'){
                                @if(Auth::user()->level=='admin')
                                    cls='receiver';
                                @else
                                    cls='sender';
                                @endif
                            }else{
                                @if(Auth::user()->level!='admin')
                                    cls='receiver';
                                @else
                                    cls='sender';
                                @endif
                            }
                            listcart = listcart + '<div class="col-sm-12 message-main-'+cls+'">'+
                                                    '<div class="'+cls+'">'+
                                                        '<div class="message-text"> '+v.message+'</div>'+
                                                        '<span class="message-time pull-right">'+v.datesend+'</span>'+
                                                    '</div>'+
                                                '</div>';
                    });
                    $('#cpesan').html(listcart);
                },
                error: function(error) {
                    console.log(error);
                },
                complete:function(data){
                    //setTimeout(getlistpesan(id),5000);
                }
                });
            }
            $(".save-data").click(function(event){
                event.preventDefault();

                let pesan = $("#comment").val();
                let sender = $("#senderid").val();
                let message = $("input[name=message]").val();
                let _token   = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                url: "{{url('api/chat')}}",
                type:"POST",
                data:{
                    message:pesan,
                    level:"{{Auth::user()->level}}",
                    sender:sender,
                    _token: _token
                },
                success:function(response){
                    if(response.status=='success') {
                        getlistpesan($("#senderid").val())
                        $("#comment").val("")
                    }
                },
                error: function(error) {
                    console.log(error);

                }
            });
            })
            @endguest
            </script>
        </div>
        <!--End Page Wrapper-->
    </body>
</html>
