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
                                                    <a class="btn btn-lg btn-primary" href="shop-top-filter.html">Shop Collection</a>
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
                                                <a class="btn btn-lg btn-primary" href="shop-top-filter.html">Women Top</a>
                                                <a class="btn btn-lg btn-primary" href="shop-top-filter.html">Women Bottom</a>
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
                            <h2>Editor's Pick</h2>
                        </div>
                        <div class="tabs-listing">
                            <ul class="tabs clearfix tabs-style3">
                                <li class="active" rel="tab1">Women</li>
                                <li rel="tab2">Mens</li>
                                <li rel="tab3" class="tab_last">Accessories</li>
                            </ul>
                            <div class="tab_container">
                                <h3 class="tab_drawer_heading d_active body-font text-uppercase text-center" rel="tab1">Women <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                                <div id="tab1" class="tab_content grid-products">
                                    <div class="productSlider">
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-11.jpg" src="{{url('')}}/assets/images/products/product-11.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-11-1.jpg" src="{{url('')}}/assets/images/products/product-11-1.jpg" alt="image" title="">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!--Product Button-->
                                                <div class="button-set style3">
                                                    <ul>
                                                        <li>
                                                            <!--Cart Button-->
                                                            <a class="btn-icon btn btn-addto-cart pro-quickshop-popup" href="#pro-quickshop1" data-bs-toggle="offcanvas" data-bs-target="#pro-quickshop1" aria-controls="pro-quickshop1">
                                                                <i class="icon an an-cart-l"></i> <span class="tooltip-label left">Quick Shop</span>
                                                            </a>
                                                            <!--end Cart Button-->
                                                        </li>
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--End Product Button-->

                                                <!-- Product Quickshop Form -->
                                                <div class="quickshop-content d-flex-center" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="pro-quickshop1">
                                                    <button type="button" class="btn-close text-reset ms-auto position-absolute top-0 end-0 m-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    <div class="offcanvas-body quickshop-variant h-100 d-flex align-items-sm-center">
                                                        <form method="post" action="#" id="product_form_1052" class="product-form align-items-center text-center hidedropdown" accept-charset="UTF-8" enctype="multipart/form-data">
                                                            <!-- Product Price -->
                                                            <div class="product-single__price lh-1 mb-3 mt-0 mx-auto">
                                                                <span class="visually-hidden">Regular price</span>
                                                                <span class="product-price__sale--single">
                                                                    <span class="product-price-old-price d-none">$95.00</span><span class="product-price__price product-price__sale0">$89.00</span>
                                                                </span>
                                                            </div>
                                                            <!-- End Product Price -->
                                                            <!-- Swatches Color -->
                                                            <div class="swatches-image swatch clearfix mb-3 swatch-0 option1" data-option-index="0">
                                                                <div class="product-form__item">
                                                                    <label class="label d-flex justify-content-center">Color:<span class="required d-none">*</span><span class="slVariant ms-1 fw-bold">Maroon</span></label>
                                                                    <ul class="swatches d-flex-justify-center list-unstyled m-0 clearfix">
                                                                        <li class="swatch-element rounded-0 color gray available active">
                                                                            <label class="swatchLbl rounded-0 color small gray" title="Gray"></label>
                                                                            <span class="tooltip-label top">Gray</span>
                                                                        </li>
                                                                        <li data-value="Peach" class="swatch-element rounded-0 color orange available">
                                                                            <label class="swatchLbl rounded-0 color small orange" title="Orange"></label>
                                                                            <span class="tooltip-label top">Orange</span>
                                                                        </li>
                                                                        <li data-value="White" class="swatch-element rounded-0 color brown available">
                                                                            <label class="swatchLbl rounded-0 color small brown" title="Brown"></label>
                                                                            <span class="tooltip-label top">Brown</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- End Swatches Color -->
                                                            <!-- Swatches Size -->
                                                            <div class="swatch clearfix mb-3 swatch-1 option2" data-option-index="1">
                                                                <div class="product-form__item">
                                                                    <label class="label d-flex justify-content-center">Size:<span class="required d-none">*</span><span class="slVariant ms-1 fw-bold">S</span></label>
                                                                    <ul class="swatches-size d-flex-justify-center list-unstyled m-0 clearfix">
                                                                        <li data-value="S" class="swatch-element s available active">
                                                                            <label class="swatchLbl rounded-0 medium" title="S">S</label><span class="tooltip-label">S</span>
                                                                        </li>
                                                                        <li data-value="M" class="swatch-element m available">
                                                                            <label class="swatchLbl rounded-0 medium" title="M">M</label><span class="tooltip-label">M</span>
                                                                        </li>
                                                                        <li data-value="L" class="swatch-element l available">
                                                                            <label class="swatchLbl rounded-0 medium" title="L">L</label><span class="tooltip-label">L</span>
                                                                        </li>
                                                                        <li data-value="XL" class="swatch-element xl available">
                                                                            <label class="swatchLbl rounded-0 medium" title="XL">XL</label><span class="tooltip-label">XL</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- End Swatches Size -->
                                                            <!-- Product Action -->
                                                            <div class="product-form-submit mx-auto">
                                                                <button type="submit" name="add" class="btn rounded product-form__cart-submit btn-small px-3"><span>Add to cart</span></button>
                                                                <button type="submit" name="add" class="btn rounded product-form__sold-out btn-small px-3 d-none" disabled="disabled">Sold out</button>
                                                                <button type="button" name="buy" class="btn rounded btn-outline-primary proceed-to-checkout btn-small px-3 d-none">Buy it now</button>
                                                            </div>
                                                            <!-- End Product Action -->
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- End Product Quickshop Form -->
                                            </div>
                                            <!-- end product image -->
                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-layout1.html">Puffer Jacket</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$89.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="image-swatches swatches mb-0">
                                                    <li class="blue large"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                                    <li class="pink large"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                                    <li class="red large"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                                    <li class="yellow large"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-21.jpg" src="{{url('')}}/assets/images/products/product-21.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-21-1.jpg" src="{{url('')}}/assets/images/products/product-21-1.jpg" alt="image" title="">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!--Countdown Timer-->
                                                <div class="saleTime desktop" data-countdown="2024/10/01"></div>
                                                <!--End Countdown Timer-->

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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Women Long Jeans</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$189.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large maroon"><span class="tooltip-label">maroon</span></li>
                                                    <li class="swatch large green"><span class="tooltip-label">Green</span></li>
                                                    <li class="swatch large orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-22.jpg" src="{{url('')}}/assets/images/products/product-22.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-22-1.jpg" src="{{url('')}}/assets/images/products/product-22-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Long Sleev Top</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$189.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large navy"><span class="tooltip-label">Navy</span></li>
                                                    <li class="swatch large green"><span class="tooltip-label">Green</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-6.jpg" src="{{url('')}}/assets/images/products/product-6.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-6-1.jpg" src="{{url('')}}/assets/images/products/product-6-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Sunset Sleep Scarf Top</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$99.01</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="image-swatches swatches mb-0">
                                                    <li class="rounded-0 blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                                    <li class="rounded-0 pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                                    <li class="rounded-0 red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-8.jpg" src="{{url('')}}/assets/images/products/product-8.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-8-1.jpg" src="{{url('')}}/assets/images/products/product-8-1.jpg" alt="image" title="">
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                    <!-- End product label -->
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Martha Knit Top</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="old-price">$199.00</span>
                                                    <span class="price">$219.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!--Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large gray"><span class="tooltip-label">Gray</span></li>
                                                    <li class="swatch large aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch large orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-9-2.jpg" src="{{url('')}}/assets/images/products/product-9-2.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-9-1.jpg" src="{{url('')}}/assets/images/products/product-9-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Long Sleeve T-shirts</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$199.01</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large purple"><span class="tooltip-label">Purple</span></li>
                                                    <li class="swatch large black"><span class="tooltip-label">Black</span></li>
                                                    <li class="swatch large navy"><span class="tooltip-label">Navy</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="view-collection text-center mt-3 mt-md-4">
                                        <a href="shop-top-filter.html" class="btn btn-primary btn-lg text-uppercase">View All</a>
                                    </div>
                                </div>
                                <h3 class="tab_drawer_heading body-font text-uppercase text-center" rel="tab2">Men <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                                <div id="tab2" class="grid-products tab_content">
                                    <div class="productSlider">
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-13.jpg" src="{{url('')}}/assets/images/products/product-13.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-13-1.jpg" src="{{url('')}}/assets/images/products/product-13-1.jpg" alt="image" title="">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->
                                                <!--Product label-->
                                                <div class="product-labels"><span class="lbl pr-label1">HOT</span></div>
                                                <!--Product label-->

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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Stand Collar Slim Shirt</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$399.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-15.jpg" src="{{url('')}}/assets/images/products/product-15.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-15-1.jpg" src="{{url('')}}/assets/images/products/product-15-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch small rounded darkgreen"><span class="tooltip-label">darkgreen</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-16.jpg" src="{{url('')}}/assets/images/products/product-16.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-16-1.jpg" src="{{url('')}}/assets/images/products/product-16-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Cool Short Sleev T-Shirt</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$59.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch small rounded maroon"><span class="tooltip-label">maroon</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-23.jpg" src="{{url('')}}/assets/images/products/product-23.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-23-1.jpg" src="{{url('')}}/assets/images/products/product-23-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Collar Denim Jacket</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$59.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch small rounded maroon"><span class="tooltip-label">maroon</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-17.jpg" src="{{url('')}}/assets/images/products/product-17.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-17-1.jpg" src="{{url('')}}/assets/images/products/product-17-1.jpg" alt="image" title="">
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels"><span class="lbl on-sale">40% OFF</span></div>
                                                    <!-- End product label -->
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Black Solid Cap</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="old-price">$99.00</span>
                                                    <span class="price">$89.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!--Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-18.jpg" src="{{url('')}}/assets/images/products/product-18.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-18-1.jpg" src="{{url('')}}/assets/images/products/product-18-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Leather backpack Black</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch small rounded black"><span class="tooltip-label">Black</span></li>
                                                    <li class="swatch small rounded purple"><span class="tooltip-label">Purple</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="view-collection text-center mt-3 mt-md-4">
                                        <a href="shop-top-filter.html" class="btn btn-primary btn-lg text-uppercase">View All</a>
                                    </div>
                                </div>
                                <h3 class="tab_drawer_heading body-font text-uppercase text-center" rel="tab3">Accessories <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                                <div id="tab3" class="grid-products tab_content">
                                    <div class="productSlider">
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-19.jpg" src="{{url('')}}/assets/images/products/product-19.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-19-1.jpg" src="{{url('')}}/assets/images/products/product-19-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Aviator Sunglasses</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$59.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">orange</span></li>
                                                    <li class="swatch small rounded yellow"><span class="tooltip-label">yellow</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-20.jpg" src="{{url('')}}/assets/images/products/product-20.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-20-1.jpg" src="{{url('')}}/assets/images/products/product-20-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Classic Watch Khaki</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$499.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                                <!-- Color Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch small rounded darkgreen"><span class="tooltip-label">darkgreen</span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-10.jpg" src="{{url('')}}/assets/images/products/product-10.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-10-1.jpg" src="{{url('')}}/assets/images/products/product-10-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Backpack With Contrast Bow</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$39.01</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-24.jpg" src="{{url('')}}/assets/images/products/product-24.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-24-1.jpg" src="{{url('')}}/assets/images/products/product-24-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Classic Tie</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$49.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-25.jpg" src="{{url('')}}/assets/images/products/product-25.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-25-1.jpg" src="{{url('')}}/assets/images/products/product-25-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Knit Glove</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$89.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product-layout1.html" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-26.jpg" src="{{url('')}}/assets/images/products/product-26.jpg" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{url('')}}/assets/images/products/product-26-1.jpg" src="{{url('')}}/assets/images/products/product-26-1.jpg" alt="image" title="">
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
                                                        <li>
                                                            <!--Quick View Button-->
                                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon an an-search-l"></i>
                                                                <span class="tooltip-label left">Quick View</span>
                                                            </a>
                                                            <!--End Quick View Button-->
                                                        </li>
                                                        <li>
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label left">Add To Wishlist</span>
                                                            </a>
                                                            <!--End Wishlist Button-->
                                                        </li>
                                                        <li>
                                                            <!--Compare Button-->
                                                            <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                                <i class="icon an an-sync-ar"></i>
                                                                <span class="tooltip-label left">Add to Compare</span>
                                                            </a>
                                                            <!--End Compare Button-->
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
                                                    <a href="product-layout1.html">Winter Cap</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$79.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                                <!--End Product Review-->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="view-collection text-center mt-3 mt-md-4">
                                        <a href="shop-top-filter.html" class="btn btn-primary btn-lg text-uppercase">View All</a>
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
