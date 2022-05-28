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
                <h1 class="collection-hero__title">Add Product Type</h1>
            </div>
        </div>
    </div>
    <div class="container">
                    <!--Main Content-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 box mt-2 mt-lg-5">
                <form class="customer-form" action="{{url('products/type/update/'.$product->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerFirstName" >Product Name<span class="required">*</span></label>
                                <input id="CustomerFirstName" type="text" name="name" value="{{$product->product_type}}" placeholder="First Name" required="">
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
