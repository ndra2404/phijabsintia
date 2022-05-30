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
    <!--Main Content-->
        <div class="container">
            <!--Product Content-->
            <div class="product-single">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img product-horizontal-style clearfix mb-3 mb-md-0">
                            <div class="zoompro-wrap product-zoom-right w-100 p-0">
                                <div class="zoompro-span"><img id="zoompro" class="zoompro" src="{{url('')}}/assets/images/{{$product->product_thumb1}}" data-zoom-image="{{url('')}}/assets/images/{{$product->product_thumb1}}" alt="product" /></div>

                            </div>
                            <div class="product-thumb product-horizontal-thumb w-100 pt-2 mt-1">
                                <div id="gallery" class="product-thumb-style1 overflow-hidden">
                                    <a data-image="{{url('/assets/images/'.$product->product_thumb1)}}" data-zoom-image="{{url('/assets/images/'.$product->product_thumb1)}}" class="slick-slide slick-cloned active">
                                        <img class="blur-up lazyload" data-src="{{url('/assets/images/'.$product->product_thumb1)}}" src="{{url('/assets/images/'.$product->product_thumb1)}}" alt="product" />
                                    </a>
                                    @foreach($images as $image)
                                    <a data-image="{{url('')}}/assets/images/{{$image->product_image}}" data-zoom-image="{{url('')}}/assets/images/{{$image->product_image}}" class="slick-slide slick-cloned active">
                                        <img class="blur-up lazyload" data-src="{{url('')}}/assets/images/{{$image->product_image}}" src="{{url('')}}/assets/images/{{$image->product_image}}" alt="product" />
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="lightboximages">
                                <a href="{{url('assets/images/'.$product->product_thumb1)}}" data-size="1000x1280"></a>
                                @foreach($images as $image)
                                <a href="{{url('assets/images/'.$image->product_image)}}" data-size="1000x1280"></a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- Product Info -->
                        <div class="product-single__meta">
                            <div class="title-nav d-flex justify-content-between">
                                <h1 class="product-single__title pe-5">{{$product->product_name}}</h1>
                            </div>
                            <!-- Product Reviews -->
                            <!-- <div class="product-review mb-2"><a class="reviewLink d-flex-center" href="#reviews"><i class="an an-star"></i><i class="an an-star mx-1"></i><i class="an an-star"></i><i class="an an-star mx-1"></i><i class="an an-star-o"></i><span class="spr-badge-caption ms-2">16 Reviews</span></a></div> -->
                            <!-- End Product Reviews -->
                            <!-- Product Info -->
                            <div class="product-info">
                                <p class="product-type">Product Type: <span>{{$product->product_type}}</span></p>
                                <p class="product-sku">SKU: <span class="variant-sku">{{$product->product_sku}}</span></p>
                           </div>
                            <!-- End Product Info -->
                            <!-- Product Price -->
                            <div class="product-single__price pb-0 mb-0">
                                <span class="visually-hidden">Regular price</span>
                                <span class="product-price__sale--single">
                                    <span class="product-price__price product-price__sale-d">IDR. {{number_format($product->product_price)}}</span>
                                </span>

                            </div>
                            <!-- End Product Price -->
                        </div>
                        <!-- End Product Info -->
                        <div class="product-single__description rte">
                            {!! html_entity_decode($product->product_desc) !!}

                        </div>
                        <!-- Product Form -->
                            <!-- Product Action -->
                            <div class="product-action w-100 clearfix">
                                <div class="product-form__item--quantity d-flex-center mb-3">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1" class="product-form__input qty rounded-0">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-r" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="pro-stockLbl ms-3">
                                        @if($product->product_stock > 0)
                                            <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> In stock</span></span>
                                        @else
                                            <span class="d-flex-center stockLbl outstock"><i class="icon an an-times-cil"></i> <span>Sold out</span></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="product-form__item--submit">
                                        @if($product->product_stock > 0)
                                        <form action="{{url('cart/'.$product->id)}}" method="post">
                                            @csrf
                                                <button type="submit" class="btn rounded-0 mb-0"><span>Add to cart</span></button>
                                            </form>
                                            @else
                                            <button type="submit" name="add" class="btn rounded-0 product-form__sold-out mb-0" disabled="disabled">Sold out</button>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="agree-check customCheckbox clearfix d-none">
                                    <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                                    <label for="prTearm">I agree with the terms and conditions</label>
                                </div>
                            </div>
                            <!-- End Product Action -->
                        <!-- End Product Form -->
                        <!-- Social Sharing -->
                        <!-- <div class="social-sharing d-flex-center mb-3">
                            <span class="sharing-lbl me-2">Share :</span>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon an an-facebook mx-1"></i><span class="share-title d-none">Facebook</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon an an-twitter mx-1"></i><span class="share-title d-none">Tweet</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon an an-pinterest-p mx-1"></i> <span class="share-title d-none">Pin it</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Linkedin"><i class="icon an an-linkedin mx-1"></i><span class="share-title d-none">Linkedin</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon an an-envelope-l mx-1"></i><span class="share-title d-none">Email</span></a>
                        </div> -->
                        <!-- End Social Sharing -->
                        <!-- Product Info -->
                        <!-- <div class="shippingMsg"><i class="icon an an-clock-r" aria-hidden="true"></i>Estimated Delivery Between <b id="fromDate">Wed, May 1</b> and <b id="toDate">Tue, May 7</b>.</div>
                        <div class="trustseal-img mt-4"><img src="assets/images/powerby-cards.jpg" alt="powerby cards" /></div> -->
                        <!-- End Product Info -->
                    </div>
                </div>
            </div>
            <!--Product Content-->

            <!--End Product Tabs-->
        </div>
        <!--End Container-->
    </div>
@endsection
