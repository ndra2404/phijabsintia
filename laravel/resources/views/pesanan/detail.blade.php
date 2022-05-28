@extends('templates')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<div id="page-content">
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image blur-up lazyloaded"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Pesanan</h1>
            </div>
        </div>
    </div>
    <div class="container">
                    <!--Main Content-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 box mt-2 mt-lg-5">
                <form class="customer-form" action="{{url('pesanan/confirm/'.$data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Order No<span class="required">*</span></label>
                                <input id="CustomerFirstName" readonly type="text" name="name" value="{{$data->order_no}}" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Order Date<span class="required">*</span></label>
                                <input id="CustomerFirstName" readonly type="text" name="name" value="{{$data->order_date}}" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Metode pembayaran<span class="required">*</span></label>
                                <input id="CustomerFirstName" readonly type="text" name="name"  value="{{$data->metode_pembayaran}}" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Total<span class="required">*</span></label>
                                <input id="CustomerFirstName" readonly value="{{number_format($data->order_total)}}" type="text" name="name"  value="{{$data->order_norek}}" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Remarks<span class="required">*</span></label>
                                <input id="CustomerFirstName" readonly value="{{$data->order_remark}}" type="text" name="name"  value="{{$data->order_norek}}" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Status<span class="required">*</span></label>
                                <select name="status">
                                    <option value="">Pilih</option>
                                    <option value="Pesanan diproses"
                                        @if($data->order_status == 'Pesanan diproses')
                                            selected
                                        @endif
                                    >Pesanan diproses</option>
                                    <option value="Pesanan dikirim"
                                        @if($data->order_status == 'Pesanan dikirim')
                                            selected
                                        @endif
                                    >Pesanan dikirim</option>
                                    <option value="Pesanan dibatalkan"
                                        @if($data->order_status == 'Pesanan dibatalkan')
                                            selected
                                        @endif
                                    >Pesanan dibatalkan</option>
                                    <option value="Pesanan diterima"
                                        @if($data->order_status == 'Pesanan diterima')
                                            selected
                                        @endif
                                    >Pesanan diterima</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="wishlist-table table-content text-nowrap table-responsive py-2">
                    <table class="table table-bordered align-middle">
                        <thead class="bg-light thead-bg">
                            <tr>
                                <th class="product-prices text-center alt-font">Sku</th>
                                <th class="product-name alt-font">Product Name</th>
                                <th class="stock-status text-center alt-font">Type</th>
                                <th class="stock-status text-center alt-font">Price</th>
                                <th class="product-prices text-center alt-font">Qty</th>
                                <th class="product-prices text-center alt-font">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderdetail as $item)
                                <tr>
                                    <td>{{$item->product_sku}}</td>
                                    <td>{{$item->product_name}}</td>
                                    <td>{{$item->product_type}}</td>
                                    <td>{{number_format($item->price)}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{number_format($item->price * $item->qty)}}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    </div>
                    <div class="row">
                        <div class="text-left col-12 col-sm-12 col-md-6 col-lg-6">
                            <input type="submit" class="btn rounded mb-3" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--End Main Content-->
    </div>
</div>
@endsection
