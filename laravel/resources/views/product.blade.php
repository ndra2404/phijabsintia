@extends('templates')
@section('content')
<div id="page-content">
                <div class="collection-header">
                    <div class="collection-hero">
                        <div class="collection-hero__image"></div>
                        <div class="collection-hero__title-wrapper container">
                            <h1 class="collection-hero__title">Product detail</h1>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <!--Main Content-->
                        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                    </button>
                    <strong>Information!</strong> {{session()->get("success")}}.
                </div>
        @endif
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                            <!--Toolbar-->
                            <div class="toolbar mt-0">
                                <div class="filters-toolbar-wrapper">
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li class="product-count d-flex align-items-center">
                                            <button type="button" class="btn btn-filter an an-slider-3 d-inline-flex d-lg-none me-2 me-sm-3"><span class="hidden">Filter</span></button>
                                            <div class="filters-toolbar__item">
                                                <span class="filters-toolbar__product-count d-none d-sm-block">Showing: {{count($products)}} products</span>
                                            </div>
                                        </li>
                                        <li class="collection-view ms-sm-auto">
                                            <div class="filters-toolbar__item collection-view-as d-flex align-items-center me-3 me-lg-0">
                                                <a href="javascript:void(0)" class="change-view prd-grid change-view--active"><i class="icon an an-th" aria-hidden="true"></i><span class="tooltip-label">Grid View</span></a>
                                                <a href="javascript:void(0)" class="change-view prd-list"><i class="icon an an-th-list" aria-hidden="true"></i><span class="tooltip-label">List View</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Toolbar-->

                            <!--Product List-->
                            <div class="product-load-more">
                                <!--Product Grid-->
                                <div class="grid-products grid--view-items prd-grid">
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 item" style="display: block;">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <!--Start Product Image-->
                                                <a href="{{url('/product/'.$product->id)}}" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyloaded" data-src="assets/images/{{$product->product_thumb1}}" src="assets/images/{{$product->product_thumb1}}" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyloaded" data-src="assets/images/{{$product->product_thumb2}}" src="assets/images/{{$product->product_thumb2}}" alt="image" title="">
                                                    <!-- End hover image -->
                                                </a>
                                                <!--End Product Image-->
                                                <!--Product Button-->
                                                <div class="button-set style0 d-none d-md-block">
                                                    <ul>
                                                        <!--Cart Button-->
                                                        <li>
                                                            <form action="{{url('cart/'.$product->id)}}" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn-icon btn cartIcon"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></button>
                                                            </form>
                                                        </li>
                                                        <!--End Cart Button-->
                                                        <!--Quick View Button-->
                                                        <!-- <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li> -->
                                                        <!--End Quick View Button-->
                                                    </ul>
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!--End Product Image-->
                                            <!--Start Product Details-->
                                            <div class="product-details text-center">
                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="{{url('/product/'.$product->id)}}">{{$product->product_name}}</a>
                                                </div>
                                                <!--End Product Name-->
                                                <!--Product Price-->
                                                <div class="product-pricet">
                                                    <span class="price">IDR {{number_format($product->product_price,2)}}</span>
                                                </div>
                                                <!--End Product Price-->
                                                <!--Product Review-->
                                                <!-- <div class="product-review d-flex align-items-center justify-content-center">
                                                    <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                                    <span class="caption hidden ms-2">3 reviews</span>
                                                </div> -->
                                                <!--End Product Review-->
                                                <!--Sort Description-->
                                                <p class="hidden sort-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book...</p>
                                                <!--End Sort Description-->
                                                <!--Color Variant -->
                                                <!-- <ul class="image-swatches swatches">
                                                    <li class="radius blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                                    <li class="radius pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                                    <li class="radius red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                                                    <li class="radius yellow medium"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                                </ul> -->
                                                <!--End Color Variant-->
                                                <!-- Product Button -->

                                                <!-- End Product Button -->
                                            </div>
                                            <!--End Product Details-->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!--End Product Grid-->

                                <!--Load More Button-->
                                <!-- <div class="infinitpaginOuter">
                                    <div class="infinitpagin">
                                        <a href="#" class="btn rounded loadMore">Load More</a>
                                    </div>
                                </div> -->
                                <!--End Load More Button-->
                            </div>
                            <!--End Product List-->
                        </div>
                        <!--End Main Content-->
                    </div>
                </div>
                <!--Customize Services-->

                <!--End Customize Services-->
            </div>
@endsection
