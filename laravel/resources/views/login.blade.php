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
                                                    <a href="forgot-password.html">Forgot your password?</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="inner">
                                    <h3 class="h4 text-uppercase">NEW CUSTOMER?</h3>
                                    <p>Registering for this site allows you to access your order status and history. We’ll get a new account set up for you in no time. For this will only ask you for information necessary to make the purchase process faster and easier</p>
                                    <a href="register.html" class="btn rounded">Create an account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
</div>
@endsection
