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
                                <label for="CustomerFirstName" >No Rek<span class="required">*</span></label>
                                <input id="CustomerFirstName" readonly value="{{$data->order_norek}}" type="text" name="name"  value="{{$data->order_norek}}" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Nama<span class="required">*</span></label>
                                <input id="CustomerFirstName" type="text" name="name" readonly value="{{$data->order_nama}}" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Total <span class="required">*</span></label>
                                <input id="CustomerFirstName" type="text" name="name" readonly value="{{number_format($data->order_total)}}" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Jumlah yang ditransfer<span class="required">*</span></label>
                                <input id="CustomerFirstName" type="text" name="name" readonly value="{{number_format($data->order_jumlah)}}" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Status<span class="required">*</span></label>
                                <select name="status">
                                    <option value="">Pilih</option>
                                    <option value="Waiting Confirmation"
                                        @if($data->order_status == 'Waiting Confirmation')
                                            selected
                                        @endif
                                    >Waiting Confirmation</option>
                                    <option value="Pesanan diproses"
                                        @if($data->order_status == 'Pesanan diproses')
                                            selected
                                        @endif
                                    >Pesanan diproses</option>
                                    <option value="Pesanan dibatalkan"
                                        @if($data->order_status == 'Pesanan dibatalkan')
                                            selected
                                        @endif
                                    >Pesanan dibatalkan</option>
                                    <option value="Upload ulang"
                                        @if($data->order_status == 'Upload ulang')
                                            selected
                                        @endif
                                    >Upload ulang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Bukti</label>
                                <a href="{{url('assets/images/'.$data->order_bukti)}}" target="_blank">{{$data->order_bukti}}</a>
                            </div>
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
