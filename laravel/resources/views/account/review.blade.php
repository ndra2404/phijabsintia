@extends('templates')
@section('content')
<div id="page-content">
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image blur-up lazyloaded"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Confirmation</h1>
            </div>
        </div>
    </div>
    <div class="container">
                    <!--Main Content-->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 box mt-2 mt-lg-5">
            <form class="customer-form" action="{{url('account/confirmation/'.$order->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="CustomerFirstName" >No Transaksi<span class="required">*</span></label>
                            <input id="CustomerFirstName" readonly value="{{$order->order_no}}" type="text" name="notransaksi" required="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="CustomerFirstName" >No rekening<span class="required">*</span></label>
                            <input id="CustomerFirstName" type="text" name="norek" required="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="CustomerFirstName" >Name<span class="required">*</span></label>
                            <input id="CustomerFirstName" type="text" name="name"required="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="CustomerFirstName" >Jumlah yang ditranfer<span class="required">*</span></label>
                            <input id="CustomerFirstName" type="text" name="jumlah" required="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="CustomerFirstName" >Bukti transfer<span class="required">*</span></label>
                            <div class="input-group">
                                <input type="file" name="bukti" class="form-control" id="customFile">
                            </div>
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
</div>
</div>
@endsection
