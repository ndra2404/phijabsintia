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
                                <div class="zoompro-span"><img id="zoompro" class="zoompro" src="assets/images/products/product-4.jpg" data-zoom-image="assets/images/products/product-4.jpg" alt="product" /></div>
                                <div class="product-labels d-none"><span class="lbl pr-label1">new</span></div>
                                <div class="product-buttons">
                                    <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="mfpbox mfp-with-anim btn rounded-0 popup-video d-none"><i class="icon an an-video"></i><span class="tooltip-label">Watch Video</span></a>
                                    <a href="#" class="btn rounded-0 prlightbox"><i class="icon an an-expand-l-arrows"></i><span class="tooltip-label">Zoom Image</span></a>
                                </div>
                            </div>
                            <div class="product-thumb product-horizontal-thumb w-100 pt-2 mt-1">
                                <div id="gallery" class="product-thumb-style1 overflow-hidden">
                                    <a data-image="assets/images/products/product-4.jpg" data-zoom-image="assets/images/products/product-4.jpg" class="slick-slide slick-cloned active">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product-4.jpg" src="assets/images/products/product-4.jpg" alt="product" />
                                    </a>
                                    <a data-image="assets/images/products/product-4-1.jpg" data-zoom-image="assets/images/products/product-4-1.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product-4-1.jpg" src="assets/images/products/product-4-1.jpg" alt="product" />
                                    </a>
                                    <a data-image="assets/images/products/product-4-2.jpg" data-zoom-image="assets/images/products/product-4-2.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product-4-2.jpg" src="assets/images/products/product-4-2.jpg" alt="product" />
                                    </a>
                                    <a data-image="assets/images/products/product-4-3.jpg" data-zoom-image="assets/images/products/product-4-3.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product-4-3.jpg" src="assets/images/products/product-4-3.jpg" alt="product" />
                                    </a>
                                    <a data-image="assets/images/products/product-4-4.jpg" data-zoom-image="assets/images/products/product-4-4.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product-4-4.jpg" src="assets/images/products/product-4-4.jpg" alt="product" />
                                    </a>
                                    <a data-image="assets/images/products/product-4-5.jpg" data-zoom-image="assets/images/products/product-4-5.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product-4-5.jpg" src="assets/images/products/product-4-5.jpg" alt="product" />
                                    </a>
                                </div>
                            </div>
                            <div class="lightboximages">
                                <a href="assets/images/products/product-4.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product-4-1.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product-4-2.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product-4-3.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product-4-4.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product-4-5.jpg" data-size="1000x1280"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- Product Info -->
                        <div class="product-single__meta">
                            <div class="title-nav d-flex justify-content-between">
                                <h1 class="product-single__title pe-5">Product Standard</h1>
                            </div>
                            <!-- Product Reviews -->
                            <div class="product-review mb-2"><a class="reviewLink d-flex-center" href="#reviews"><i class="an an-star"></i><i class="an an-star mx-1"></i><i class="an an-star"></i><i class="an an-star mx-1"></i><i class="an an-star-o"></i><span class="spr-badge-caption ms-2">16 Reviews</span></a></div>
                            <!-- End Product Reviews -->
                            <!-- Product Info -->
                            <div class="product-info">
                                <p class="product-type">Vendor: <span>Bohemian France</span></p>
                                <p class="product-type">Product Type: <span>Floral Top</span></p>
                                <p class="product-sku">SKU: <span class="variant-sku">1416PT-1</span></p>
                                <p class="product-cat">Category: <span><a href="#">All</a>, <a href="#">Fashion</a>, <a href="#">Tops</a>, <a href="#">Women</a>, <a href="#">New Arrivals</a></span></p>
                                <p class="product-tags">Tags: <span><a href="#">$10 - $100</a>, <a href="#">Optimal</a>, <a href="#">Green</a>, <a href="#">XL</a>, <a href="#">Sale</a>, <a href="#">Women</a></span></p>
                            </div>
                            <!-- End Product Info -->
                            <!-- Product Price -->
                            <div class="product-single__price pb-0 mb-0">
                                <span class="visually-hidden">Regular price</span>
                                <span class="product-price__sale--single">
                                    <span class="product-price-old-price d-none">$200.00</span><span class="product-price__price product-price__sale-d">$225.00</span>
                                    <span class="discount-badge d-none"><span class="devider me-2">|</span><span>Save: </span><span class="product-single__save-amount"><span class="money">$99.00</span></span><span class="off ms-1">(<span>25</span>%)</span></span>
                                </span>

                            </div>
                            <!-- End Product Price -->
                        </div>
                        <!-- End Product Info -->
                        <div class="product-single__description rte">
                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <ul class="checkmarkList">
                                <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                <li>Lorem Ipsum is not simply random text.</li>
                                <li>Size And Fit: The specifications for the model are: Height 5 feet 8 inches, bust 34 inches, waist 28 inches. The model is wearing size S.</li>
                            </ul>
                        </div>
                        <!-- Product Form -->
                        <form method="post" action="#" class="product-form form-bordered hidedropdown">
                            <!-- Product Action -->
                            <div class="product-action w-100 clearfix">
                                <div class="product-form__item--quantity d-flex-center mb-3">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1" class="product-form__input qty rounded-0">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-r" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="pro-stockLbl ms-3">
                                        <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> In stock</span></span>
                                        <span class="d-flex-center stockLbl preorder d-none"><i class="icon an an-clock-r"></i><span> Pre-order Now</span></span>
                                        <span class="d-flex-center stockLbl outstock d-none"><i class="icon an an-times-cil"></i> <span>Sold out</span></span>
                                        <span class="d-flex-center stockLbl lowstock d-none" data-qty="15"><i class="icon an an-exclamation-cir"></i><span> Order now, Only  <span class="items">10</span>  left!</span></span>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="product-form__item--submit">
                                            <button type="submit" name="add" class="btn rounded-0 product-form__cart-submit mb-0"><span>Add to cart</span></button>
                                            <button type="submit" name="add" class="btn rounded-0 product-form__sold-out mb-0 d-none" disabled="disabled">Sold out</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="agree-check customCheckbox clearfix d-none">
                                    <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                                    <label for="prTearm">I agree with the terms and conditions</label>
                                </div>
                            </div>
                            <!-- End Product Action -->
                        </form>
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
                        <div class="shippingMsg"><i class="icon an an-clock-r" aria-hidden="true"></i>Estimated Delivery Between <b id="fromDate">Wed, May 1</b> and <b id="toDate">Tue, May 7</b>.</div>
                        <div class="trustseal-img mt-4"><img src="assets/images/powerby-cards.jpg" alt="powerby cards" /></div>
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
