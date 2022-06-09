@extends('templates')
@section('content')
<div id="page-content">
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image blur-up lazyloaded"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">List Product</h1>
            </div>
        </div>
    </div>
    <div class="container">
                    <!--Wishlist-->
        @if(session('alert'))
            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                        </button>
                        <strong>Warning!</strong> {{session()->get("alert")}}.
                    </div>
            @endif
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                    </button>
                    <strong>Information!</strong> {{session()->get("success")}}.
                </div>
        @endif
        <a href="{{url('pesanan/print')}}" target="_blank" class="btn btn-primary">Print Pdf</a>
        <form action="#" method="post">
            <div class="wishlist-table table-content text-nowrap table-responsive py-2">
                <table class="table table-bordered align-middle">
                    <thead class="bg-light thead-bg">
                        <tr>
                            <th class="product-prices text-center alt-font">Order no</th>
                            <th class="product-name alt-font">Order date</th>
                            <th class="stock-status text-center alt-font">Status</th>
                            <th class="stock-status text-center alt-font">Order Total</th>
                            <th class="product-prices text-center alt-font">Remarks</th>
                            <th class="product-prices text-center alt-font">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $grandtotal=0;
                        @endphp
                    @foreach($orders as $product)
                    @php
                        $grandtotal= $grandtotal+$product->order_total;
                        @endphp
                        <tr>
                            <td class="product-thumbnail text-center">
                            {{$product->order_no}}
                            </td>
                            <td class="product-name">{{$product->order_date}}</td>
                            <td class="stock text-center">
                                    <span class="text-in-stock">{{$product->order_status}}</span>
                            </td>
                            <td class="product-prices text-right"><span class="amount fw-500">Rp. {{number_format($product->order_total)}}</span></td>
                            <td class="product-name">{{$product->order_remark}}</td>
                            <td class="product-action text-center">
                                @if($product->order_status == 'Waiting Confirmation')
                                <a href="{{url('pesanan/confirm/'.$product->id)}}" class="btn btn-small btn-primary">Confirm</a>
                                @else
                                    @if($product->order_status == 'Pesanan diproses')
                                        <a href="{{url('pesanan/ubah/'.$product->id)}}" class="btn btn-small btn-primary">Ubah Status</a>
                                    @endif
                                @endif
                        </tr>
                        @endforeach
                    </tbody>
                    <thead class="bg-light thead-bg">
                        <tr>
                            <th class="product-prices text-center alt-font"></th>
                            <th class="product-name alt-font"></th>
                            <th class="stock-status text-center alt-font"></th>
                            <th class="stock-status text-right alt-font">{{number_format($grandtotal)}}</th>
                            <th class="product-prices text-center alt-font"></th>
                            <th class="product-prices text-center alt-font"></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </form>
        <!--End Wishlist-->
    </div>
</div>
@endsection
