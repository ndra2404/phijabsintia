@extends('templates')
@section('content')
<div id="page-content">
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image blur-up lazyloaded"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">My Account</h1>
            </div>
        </div>
    </div>
<div class="container pt-2">
@if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                    </button>
                    <strong>Information!</strong> {{session()->get("success")}}.
                </div>
        @endif
                    <div class="row mb-4 mb-lg-5 pb-lg-5">
                        <div class="col-xl-3 col-lg-2 col-md-12 mb-4 mb-lg-0">
                            <!-- Nav tabs -->
                            <ul class="nav flex-column bg-light h-100 dashboard-list" role="tablist">
                                <li><a class="nav-link active" data-bs-toggle="tab" href="#dashboard">Dashboard</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#orders">Orders</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#orderstracking">Orders tracking</a></li>
                            </ul>
                            <!-- End Nav tabs -->
                        </div>
                        <div class="col-xl-9 col-lg-10 col-md-12">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard-content" style="">
                                <!-- Dashboard -->
                                <div id="dashboard" class="tab-pane fade active show">

                                    <div class="row mt-4">
                                        <div class="col-12 col-lg-6">
                                            <div >
                                                Selamat Datang di phijab.id
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <ul class="profile-order mt-3 mt-lg-0">
                                                <li>
                                                    <h3 class="mb-1">16</h3>
                                                    All Orders
                                                </li>
                                                <li>
                                                    <h3 class="mb-1">02</h3>
                                                    Awaiting Payments
                                                </li>
                                                <li>
                                                    <h3 class="mb-1">00</h3>
                                                    Awaiting Shipment
                                                </li>
                                                <li>
                                                    <h3 class="mb-1">01</h3>
                                                    Awaiting Delivery
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Dashboard -->

                                <!-- Orders -->
                                <div id="orders" class="product-order tab-pane fade">
                                    <h3>Orders</h3>
                                    <div class="table-responsive order-table">
                                        <table class="table table-bordered table-hover align-middle text-center mb-0">
                                            <thead class="alt-font">
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $order)
                                                <tr>
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>{{$order->order_no}}</td>
                                                    <td>{{$order->order_date}}</td>
                                                    <td class="text-success">{{$order->order_status}}</td>
                                                    <td>IDR. {{number_format($order->order_total)}}</td>
                                                    <td>
                                                        @if($order->order_status == 'Awaiting Payment'||$order->order_status == 'Upload ulang')
                                                            <a class="link-underline view" href="{{url('account/confirmation/'.$order->id)}}">Upload</a>
                                                        @endif
                                                        @if($order->order_status == 'Pesanan dikirim')
                                                            <a class="link-underline upload" href="{{url('account/selesai/'.$order->id)}}">Pesanan Selesai</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End Orders -->

                            </div>
                            <!-- End Tab panes -->
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
            </div>
@endsection
