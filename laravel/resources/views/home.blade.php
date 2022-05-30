@extends('templates')
@section('content')
<div id="page-content">
                <!--Home slider-->
                <section class="slideshow slideshow-wrapper">
                    <div class="home-slideshow">
                        <div class="slide">
                            <div class="blur-up lazyload">
                                <img class="blur-up lazyload desktop-hide" data-src="{{url('')}}/assets/images/slideshow/demo4-banner1.jpg" src="{{url('')}}/assets/images/slideshow/demo4-banner1.jpg" alt="HIGH CONVERTING" title="HIGH CONVERTING" />
                                <img class="blur-up lazyload mobile-hide" data-src="{{url('')}}/assets/images/slideshow/demo4-banner1-m.jpg" src="{{url('')}}/assets/images/slideshow/demo4-banner1-m.jpg" alt="HIGH CONVERTING" title="HIGH CONVERTING" />
                                <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-right d-flex justify-content-center align-items-center">
                                        <div class="slideshow-content-in text-left">
                                            <div class="wrap-caption style1">
                                                <h2 class="h1 mega-title ss-mega-title fs-1 text-capitalize">Women Optimal<br>Fashion Central</h2>
                                                <span class="mega-subtitle fs-4 ss-sub-title d-md-block d-lg-block d-none">Love it, Feel it, Enjoy it</span>
                                                <div class="ss-btnWrap mt-3 mt-md-4 d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="blur-up lazyload">
                                <img class="blur-up lazyload desktop-hide" data-src="{{url('')}}/assets/images/slideshow/demo4-banner2.jpg" src="{{url('')}}/assets/images/slideshow/demo4-banner2.jpg" alt="MAKING BRAND VISIBLE" title="MAKING BRAND VISIBLE" />
                                <img class="blur-up lazyload mobile-hide" data-src="{{url('')}}/assets/images/slideshow/demo4-banner2-m.jpg" src="{{url('')}}/assets/images/slideshow/demo4-banner2-m.jpg" alt="MAKING BRAND VISIBLE" title="MAKING BRAND VISIBLE" />
                                <div class="slideshow-content slideshow-overlay middle-left container d-flex justify-content-center align-items-center">
                                    <div class="slideshow-content-in text-left">
                                        <div class="wrap-caption style1">
                                            <p class="ss-small-title fs-4 mb-1 d-md-block d-lg-block d-none">Special Offer</p>
                                            <h2 class="mega-title ss-mega-title fs-1 text-capitalize">Final Clearance<br>Up to 70% Off</h2>
                                            <div class="ss-btnWrap mt-3 mt-md-4 d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Home slider-->

                <!--Store Feature-->
                <section class="store-features style2">
                    <div class="container">
                        <div class="row store-info">
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex align-items-center mb-2 mb-md-0">
                                <i class="an an-free-delivery"></i>
                                <div class="detail">
                                    <h5 class="fs-6 fw-normal text-uppercase mb-0">GRATIS ONGKIR</h5>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex align-items-center mb-2 mb-md-0">
                                <i class="an an-shield"></i>
                                <div class="detail">
                                    <h5 class="fs-6 fw-normal text-uppercase mb-0">24/7 CUSTOMER SERVICE</h5>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex align-items-center">
                                <i class="an an-dollar mb-1"></i>
                                <div class="detail">
                                    <h5 class="fs-6 fw-normal text-uppercase mb-0 ">JAMINAN PENGEMBALIAN DANA</h5>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex align-items-center">
                                <i class="an an-chat mb-1"></i>
                                <div class="detail">
                                    <h5 class="fs-6 fw-normal text-uppercase mb-0">PANDUAN BERBELANJA</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Store Feature-->

                <!--Best Seller With Tabs-->
                <section class="section product-slider tab-slider-product">
                    <div class="container">
                        <div class="section-header">
                            <h2>Our Products</h2>
                        </div>
                        <div class="tabs-listing">
                            <div class="tab_container">
                                <div id="tab1" class="tab_content grid-products">
                                    <div class="productSlider">
                                        @foreach($data as $item)
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="{{url('/product/'.$item->id)}}" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/{{$item->product_thumb1}}" src="{{url('')}}/assets/images/{{$item->product_thumb1}}" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/{{$item->product_thumb2}}" src="{{url('')}}/assets/images/{{$item->product_thumb2}}" alt="image" title="">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!--Product Button-->
                                                <div class="button-set style3">
                                                    <ul>
                                                        <li>
                                                            <!--Cart Button-->
                                                            <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                                <i class="icon an an-cart-l"></i> <span class="tooltip-label left">Add to Cart</span>
                                                            </a>
                                                            <!--end Cart Button-->
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- end product image -->
                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name text-uppercase">
                                                    <a href="{{url('/product/'.$item->id)}}">{{$item->product_name}}</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">IDR. {{number_format($item->product_price)}}</span>
                                                </div>
                                                <!-- End product price -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="view-collection text-center mt-3 mt-md-4">
                                        <a href="{{url('product')}}" class="btn btn-primary btn-lg text-uppercase">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Best Seller With Tabs-->

                <!--Featured Content-->
                <section class="section featured-content style1 p-0">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                                <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column">
                                    <div class="f-item fl-1 d-flex w-100 align-items-center order-md-1 order-xl-0 order-sm-1 order-lg-0 order-1">
                                        <div class="f-image">
                                            <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/content/featured-content-img1.jpg" src="{{url('')}}/assets/images/content/featured-content-img1.jpg" alt="image" title="" />
                                        </div>
                                    </div>
                                    <div class="f-item fl-1 d-flex w-100 align-items-center light-blue-bg order-xl-1 order-md-0 order-sm-0 order-lg-1 order-1">
                                        <div class="f-text">
                                            <h2 class="mb-3 text-white text-transform-none">New Arrivals Weekly</h2>
                                            <div class="rte rte-setting d-flex mb-4">
                                                <p>We release NEW items every single week! Shop our latest release full of on-trend and affordable new styles under $99</p>
                                            </div>
                                            <a href="shop-top-filter.html" class="btn mt20">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                                <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column">
                                    <div class="f-item fl-1 d-flex w-100 align-items-center">
                                        <div class="f-image order-2">
                                            <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/content/featured-content-img2.jpg" src="{{url('')}}/assets/images/content/featured-content-img2.jpg" alt="image" title="" />
                                        </div>
                                    </div>
                                    <div class="f-item fl-1 d-flex w-100 align-items-center light-pinch-bg">
                                        <div class="f-text order-3">
                                            <h4 class="mb-3 text-white text-transform-none">The Finishing Touch</h4>
                                            <div class="rte rte-setting d-flex mb-4">
                                                <p>We have the perfect jewelry, scarves, hats and more at an affordable price! Take your look to the next level with our on-trend new accessories!</p>
                                            </div>
                                            <a href="shop-top-filter.html" class="btn mt20">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Featured Content-->

                <!--Featured Content-->
                <section class="section featured-content style1 p-0">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                                <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column">
                                    <div class="f-item fl-1 d-flex w-100 align-items-center order-md-0 order-xl-1 order-sm-0 order-lg-1 order-0">
                                        <div class="f-image">
                                            <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/content/featured-content-img5.jpg" src="{{url('')}}/assets/images/content/featured-content-img5.jpg" alt="image" title="" />
                                        </div>
                                    </div>
                                    <div class="f-item fl-1 d-flex w-100 align-items-center gold-bg order-xl-0 order-md-1 order-sm-1 order-lg-0 order-0">
                                        <div class="f-text">
                                            <h2 class="mb-3 text-white text-transform-none">New Arrivals Weekly</h2>
                                            <div class="rte rte-setting d-flex mb-4">
                                                <p>We release NEW items every single week! Shop our latest release full of on-trend and affordable new styles under $99</p>
                                            </div>
                                            <a href="shop-top-filter.html" class="btn mt20">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                                <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column">
                                    <div class="f-item fl-1 d-flex w-100 align-items-center order-md-0 order-xl-1 order-sm-0 order-lg-1 order-0">
                                        <div class="f-image">
                                            <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/content/featured-content-img6.jpg" src="{{url('')}}/assets/images/content/featured-content-img6.jpg" alt="image" title="" />
                                        </div>
                                    </div>
                                    <div class="f-item fl-1 d-flex w-100 align-items-center green-bg order-xl-0 order-md-1 order-sm-1 order-lg-0 order-0">
                                        <div class="f-text order-md-3 order-xl-0 order-sm-3 order-lg-0 order-3">
                                            <h2 class="mb-3 text-white text-transform-none">The Finishing Touch</h2>
                                            <div class="rte rte-setting d-flex mb-4">
                                                <p>We have the perfect jewelry, scarves, hats and more at an affordable price! Take your look to the next level with our on-trend new accessories!</p>
                                            </div>
                                            <a href="shop-top-filter.html" class="btn mt20">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Featured Content-->
            </div>
@endsection
