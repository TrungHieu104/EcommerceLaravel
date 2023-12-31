@extends('client.layout')

@section('title')
    - Login
@endsection

@section('content')
    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Login</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    {{-- <li><a href="shop-grid-sidebar-left.html">Shop</a></li> --}}
                                    <li class="active" aria-current="page">Login</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Customer Login Section :::... -->
    <div class="customer-login">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 mx-auto col-md-12">
                    <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                        @if (Session::exists('thongbao'))
                            <h6 class="alert alert-info text-center"> {{ Session::get('thongbao') }} </h6>
                        @endif
                        <h3>login</h3>
                        <form action="{{ url('/login') }}" method="POST"> 
                            @csrf
                            <div class="default-form-box">
                                <label>Username or email <span class="text-danger">*</span></label>
                                <input type="text" name="email" value="{{old('email')}}">
                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span class="text-danger">*</span></label>
                                <input type="password" name="password" value="{{old('password')}}">
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover mb-4" type="submit">login</button>
                                <label class="checkbox-default mb-4" for="offer">
                                    <input type="checkbox" id="offer">
                                    <span>Remember me</span>
                                </label>
                                <a href="#">Lost your password?</a>

                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->

            </div>
        </div>
    </div> <!-- ...:::: End Customer Login Section :::... -->
@endsection
