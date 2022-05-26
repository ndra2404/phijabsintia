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
                <h1 class="collection-hero__title">Add Product</h1>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="container">
                    <!--Main Content-->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 box mt-2 mt-lg-5">
                            <form class="customer-form" action="{{url('products/update/'.$product->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="CustomerFirstName" >Product Sku<span class="required">*</span></label>
                                            <input id="CustomerFirstName" readonly type="text" name="sku" value="{{$product->product_sku}}" placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="CustomerFirstName" >Product Name<span class="required">*</span></label>
                                            <input id="CustomerFirstName" type="text" name="name" value="{{$product->product_name}}" placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="CustomerFirstName" >Product Type<span class="required">*</span></label>
                                            <Select name="type" id="CustomerFirstName" required="">
                                                <option value="">Select Product Type</option>
                                                @foreach($product_type as $type)
                                                <option value="{{$type->id}}"
                                                    @if($product->product_type_id == $type->id)
                                                        selected
                                                    @endif
                                                >{{$type->product_type}}</option>
                                                @endforeach
                                            </Select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="CustomerFirstName" >Product Price<span class="required">*</span></label>
                                            <input id="CustomerFirstName" type="number" name="price" value="{{$product->product_price}}" placeholder="Price" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="CustomerFirstName" >Product Stock<span class="required">*</span></label>
                                            <input id="CustomerFirstName" type="number" name="stock" value="{{$product->product_stock}}" placeholder="Stock" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="CustomerFirstName" >Description</label>
                                            <textarea id="summernote" name="description">{{$product->product_desc}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="CustomerFirstName" >Thumbnail 2</label>
                                            <div class="input-group">
                                                <input type="file" name="thumb" class="form-control" id="customFile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="CustomerFirstName" >Thumbnail 1</label>
                                            <div class="input-group">
                                                <input type="file" name="thumb2" class="form-control" id="customFile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="CustomerFirstName" >Gambar</label>
                                            <div class="input-group control-group increment" >
                                                <input type="file" name="filename[]" class="form-control">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                                </div>
                                                </div>
                                                <div class="clone hide">
                                                    <div class="control-group input-group" style="margin-top:10px">
                                                    <input type="file" name="filename[]" class="form-control">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
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
                    <!--End Main Content-->
                </div>
    </div>
</div>
<script type="text/javascript">
                $(document).ready(function() {
                $(".btn-success").click(function(){
                    var html = $(".clone").html();
                    $(".increment").after(html);
                });
                $("body").on("click",".btn-danger",function(){
                    $(this).parents(".control-group").remove();
                });
                });
            </script>
<script>
            $('#summernote').summernote({
              placeholder: 'Description',
              tabsize: 2,
              height: 100
            });
          </script>
@endsection
