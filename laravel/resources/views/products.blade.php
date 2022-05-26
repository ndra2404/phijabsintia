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
        <a href="{{url('products/add')}}" class="btn btn-small rounded-1 text-nowrap">Add</a>
        <form action="#" method="post">
            <div class="wishlist-table table-content text-nowrap table-responsive py-2">
                <table class="table table-bordered align-middle">
                    <thead class="bg-light thead-bg">
                        <tr>
                            <th class="product-name text-center alt-font">Action</th>
                            <th class="product-price text-center alt-font">Images</th>
                            <th class="product-name alt-font">Product</th>
                            <th class="stock-status text-center alt-font">Sku</th>
                            <th class="stock-status text-center alt-font">Stock Status</th>
                            <th class="product-price text-center alt-font">Unit Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="product-remove text-center">
                                <a href="{{url('products/delete/'.$product->id)}}"  onclick="return confirm('do you want to delete?')" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove" aria-label="Remove"><i class="icon icon an an-times-l"></i></a>
                                <a href="{{url('products/update/'.$product->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update" aria-label="Update"><i class="icon icon an an-pencil-l"></i></a>
                            </td>
                            <td class="product-thumbnail text-center">
                                <img src="assets/images/{{$product->product_thumb1}}" width="60" alt="" title="">
                            </td>
                            <td class="product-name"><span class="text-in-stock">{{$product->product_name}}</span></td>
                            <td class="product-name"><h6 class="mb-0">{{$product->product_sku}}</h6></td>
                            <td class="stock text-center"><span class="text-in-stock">{{$product->product_stock}}</span></td>
                            <td class="product-price text-center"><span class="amount fw-500">Rp. {{number_format($product->product_price)}}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
        <!--End Wishlist-->
    </div>
</div>
@endsection
