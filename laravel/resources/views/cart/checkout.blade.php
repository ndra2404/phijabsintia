@extends('templates')
@section('content')
<div id="page-content">
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image blur-up lazyloaded"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Checkout</h1>
            </div>
        </div>
    </div>

    <div class="container">
                    <!--Cart Page-->
                    <div class="row">
                    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                    </button>
                    <strong>Information!</strong> {{session()->get("success")}}.
                </div>
        @endif
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">


                            <form action="{{url('checkout')}}" method="post" class="cart style2">
                                @csrf
                                <table class="align-middle">
                                    <thead class="cart__row cart__header small--hide">
                                        <tr>
                                            <th class="action">&nbsp;</th>
                                            <th colspan="2" class="text-start">Product</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $total=0;
                                        @endphp
                                        @foreach($cart as $c)
                                        <tr class="cart__row border-bottom line1 cart-flex border-top">
                                            <td class="cart-delete text-center small--hide"><a href="#" class="btn btn--secondary cart__remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove item" aria-label="Remove item"><i class="icon an an-times-r"></i></a></td>
                                            <td class="cart__image-wrapper cart-flex-item">
                                                <a href="product-layout1.html"><img class="cart__image blur-up lazyloaded" data-src="assets/images/{{$c->product_thumb1}}" src="assets/images/{{$c->product_thumb1}}" alt="Sunset Sleep Scarf Top" width="80"></a>
                                            </td>
                                            <td class="cart__meta small--text-left cart-flex-item">
                                                <div class="list-view-item__title">
                                                    <a href="product-layout1.html">{{$c->product_name}}</a>
                                                </div>
                                                <div class="cart__meta-text">
                                                    <span class="cart__meta-label">SKU:</span>
                                                    <span class="cart__meta-value">{{$c->product_sku}}</span>
                                                </div>
                                            </td>
                                            <td class="cart__price-wrapper cart-flex-item text-center small--hide">
                                                <span class="money">IDR. {{number_format($c->product_price)}}</span>
                                            </td>
                                            <td class="cart__update-wrapper cart-flex-item text-end text-md-center">
                                                <div class="cart__qty d-flex justify-content-end justify-content-md-center">
                                                    <div class="qtyField">
                                                    <input class="" type="hidden" name="pid[{{$c->id}}]" value="{{$c->id}}">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r"></i></a>
                                                            <input class="cart__qty-input qty" type="text" name="quantity[{{$c->id}}]" value="{{$c->qty}}" pattern="[0-9]*">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-r"></i></a>
                                                    </div>
                                                </div>
                                                <a href="#" title="Remove" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                            </td>
                                            <td class="cart-price cart-flex-item text-center small--hide">
                                                <span class="money fw-500">IDR. {{number_format($c->product_price*$c->qty)}}</span>
                                            </td>
                                        </tr>
                                        @php
                                        $total=$total+$c->product_price*$c->qty;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-start pt-3"></td>
                                            <td colspan="3" class="text-end pt-3">
                                                <button type="submit" name="update" class="btn btn--small d-inline-flex align-items-center rounded cart-continue ml-2"><i class="me-1 icon an an-sync-ar d-none"></i>Update Cart</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </form>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart__footer">
                            <div class="cart_info">
                            <form action="{{(url('checkout/doprocess'))}}" method="post">
                                @csrf
                                <div class="cart-note mb-4 cart-col">
                                    <h5>Add a note to your order</h5>
                                    <input type="hidden" name="total" value="{{$total}}">
                                    <textarea name="note" id="cart-note" class="form-control cart-note__input" rows="3" required=""></textarea>
                                </div>
                                <div class="cart-order_detail cart-col">
                                    <div class="row">
                                        <span class="col-6 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                                        <span class="col-6 col-sm-6 cart__subtotal-title cart__subtotal text-end"><span class="money">IDR. {{number_format($total)}}</span></span>
                                    </div>
                                    <p class="cart__shipping pt-0 m-0 fst-normal freeShipclaim"><i class="me-1 align-middle icon an an-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE</p>
                                    <div class="customCheckbox cart_tearm">
                                        <input type="checkbox" value="allen-vela" id="cart_tearm">
                                        <label for="cart_tearm">I agree with the terms and conditions</label>
                                    </div>
                                        <button type="submit" class="btn btn--small-wide rounded my-4 checkout">Proceed To Checkout</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Cart Page-->
                </div>
</div>
@endsection
