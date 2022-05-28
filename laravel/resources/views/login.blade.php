@extends('templates')
@section('content')
<div id="page-content">
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image blur-up lazyloaded"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Login</h1>
            </div>
        </div>
    </div>
    <div class="container">
                    <!--Main Content-->
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show mb-0 focus" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                    </button>
                                    <strong>Warning!</strong> {{session()->get("error")}}.
                                </div>
                    @endif

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                </button>
                                <strong>Information!</strong> {{session()->get("success")}}.
                            </div>
                    @endif
                    <div class="login-register pt-2 pt-lg-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                                <div class="inner">
                                    <form method="post" action="{{url('login')}}" class="customer-form">
                                        @csrf
                                        <h3 class="h4 text-uppercase">REGISTERED CUSTOMERS</h3>
                                        <p>If you have an account with us, please log in.</p>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="CustomerEmail" class="d-none">Username <span class="required">*</span></label>
                                                    <input type="text" name="email" placeholder="Email" id="CustomerEmail" value="" required="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                                    <input type="password" name="password" placeholder="Password" id="CustomerPassword" value="" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-left col-12 col-sm-12 col-md-12 col-lg-12">
                                                <p class="d-flex-center">
                                                    <input type="submit" class="btn rounded me-auto" value="Sign In">

                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="inner">
                                    <h3 class="h4 text-uppercase">NEW CUSTOMER?</h3>
                                    <form method="post" action="{{url('doregister')}}" class="customer-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="CustomerEmail" class="d-none">Nama <span class="required">*</span></label>
                                                    <input type="text" name="nama" placeholder="Nama" id="CustomerEmail" value="" required="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="CustomerEmail" class="d-none">Email <span class="required">*</span></label>
                                                    <input type="text" name="email" placeholder="Email" id="CustomerEmail" value="" required="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="CustomerEmail" class="d-none">No hp <span class="required">*</span></label>
                                                    <input type="text" name="nohp" placeholder="No Handphone" id="CustomerEmail" value="" required="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="CustomerEmail" class="d-none>Alamat<span class="required"></span></label>
                                                    <textarea placeholder="Alamat"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                                    <input type="password" name="password" placeholder="Password" id="CustomerPassword" value="" required="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label for="CustomerPassword" class="d-none">Confirm Password <span class="required">*</span></label>
                                                    <input type="password" name="cpassword" placeholder="Confirm Password" id="CustomerPassword" value="" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-left col-12 col-sm-12 col-md-12 col-lg-12">
                                                <p class="d-flex-center">
                                                    <input type="submit" class="btn rounded me-auto" value="Sign In">
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
</div>
@endsection
