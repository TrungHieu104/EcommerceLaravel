@extends('client.layout')

{{-- @section('title')
    Home
@endsection --}}

@section('content')
    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- Start Hero Slider Section-->
    <div class="hero-slider-section">
        <!-- Slider main container -->
        <div class="hero-slider-active swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="/assets/images/hero-slider/home-4/hero-slider-1.jpg" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle">Light up your life</h4>
                                        <h1 class="title">Morganite ring <br> everyday elegance</h1>
                                        <a href="product-details-default.html" class="btn btn-lg btn-outline-aqua">shop
                                            now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="/assets/images/hero-slider/home-4/hero-slider-2.jpg" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle">A Perfect Jewelry</h4>
                                        <h1 class="title">New Collection <br> Arrived</h1>
                                        <a href="product-details-default.html" class="btn btn-lg btn-outline-aqua">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination active-color-aqua"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev d-none d-lg-block"></div>
            <div class="swiper-button-next d-none d-lg-block"></div>
        </div>
    </div>
    <!-- End Hero Slider Section-->

    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100">
        <div class="banner-wrapper">
            <div class="container">
                <div class="row d-flex align-items-center mb-n6">
                    <div class="col-xxl-6 col-md-6 mb-6">
                        <!-- Start Banner Single Item -->
                        <a href="product-details-default.html">
                            <div class="banner-single-item banner-style-9 banner-animation banner-color--green float-left"
                                data-aos="fade-up" data-aos-delay="0">
                                <div class="image">
                                    <img class="img-fluid" src="/assets/images/banner/banner-style-9-img-1.jpg"
                                        alt="">
                                </div>
                            </div>
                        </a>
                        <!-- End Banner Single Item -->
                    </div>
                    <div class="col-xxl-5 col-md-6 mb-6">
                        <!-- Start Banner Single Item -->
                        <div class="banner-single-item banner-style-10" data-aos="fade-up" data-aos-delay="200">
                            <a href="product-details-default.html">
                                <div class="banner-animation banner-color--green">
                                    <div class="image">
                                        <img class="img-fluid" src="/assets/images/banner/banner-style-10-img-1.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </a>
                            <div class="content-out">
                                <div class="inner-out">
                                    <h3 class="inner-title">
                                        <span class="title">Merry Gold</span>
                                        <span class="price">$97.99</span>
                                    </h3>
                                    <p>18 - karat Gold double ring with Pave Diamonds 0.42 total carat weight</p>
                                </div>
                                <a href="product-details-default.html"
                                    class="btn btn-lg btn-outline-aqua icon-space-left">Browse <span><i
                                            class="ion-ios-arrow-thin-right"></i></span></a>
                            </div>
                        </div>
                        <!-- End Banner Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">the New arrivals</h3>
                                <p>Preorder now to receive exclusive deals & gifts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-2rows default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-2row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-1.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-2.jpg"
                                                    alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Aliquam
                                                        lobortis</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$75.00 - $85.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-3.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-4.jpg"
                                                    alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Condimentum
                                                        posuere</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price"><del>$89.00</del> $80.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-6.jpg"
                                                    alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Cras neque
                                                        metus</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price"><del>$70.00</del> $60.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-7.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-8.jpg"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Donec eu libero
                                                        ac</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$74</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-9.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-10.jpg"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Epicuri per
                                                        lobortis</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$68</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-11.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-3.jpg"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Kaoreet
                                                        lobortis sagit</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$95.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-7.jpg"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Condimentum
                                                        posuere</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$115.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-6.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-9.jpg"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Convallis quam
                                                        sit</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$75.00 - $85.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-3.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Dolorum fuga
                                                        eget</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$71.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-4.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-7.jpg"
                                                    alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Duis pulvinar
                                                        obortis</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price"><del>$84.00</del> $75.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-8.jpg"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Dolorum fuga
                                                        eget</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$90</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/assets/images/product/default/home-4/default-10.jpg"
                                                    alt="">
                                                <img src="/assets/images/product/default/home-4/default-6.jpg"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Duis pulvinar
                                                        obortis</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$86.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Slider Section -->

    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <div class="row mb-n6">
                    <div class="col-md-3 mb-6">
                        <!-- Start Banner Single Item -->
                        <a href="product-details-default.html">
                            <div class="banner-single-item banner-style-11 banner-animation banner-color--green img-responsive"
                                data-aos="fade-up" data-aos-delay="0">
                                <div class="image">
                                    <img src="/assets/images/banner/banner-style-11-img-1.jpg" alt="">
                                </div>
                            </div>
                        </a>
                        <!-- End Banner Single Item -->
                    </div>
                    <div class="col-md-6 mb-6">
                        <!-- Start Banner Single Item -->
                        <a href="product-details-default.html">
                            <div class="banner-single-item banner-style-12 banner-animation banner-color--green img-responsive"
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="image">
                                    <img src="/assets/images/banner/banner-style-12-img-1.jpg" alt="">
                                </div>
                            </div>
                        </a>
                        <!-- End Banner Single Item -->
                    </div>
                    <div class="col-md-3 mb-6">
                        <!-- Start Banner Single Item -->
                        <a href="product-details-default.html">
                            <div class="banner-single-item banner-style-11 banner-animation banner-color--green img-responsive"
                                data-aos="fade-up" data-aos-delay="400">
                                <div class="image">
                                    <img src="/assets/images/banner/banner-style-11-img-2.jpg" alt="">
                                </div>
                            </div>
                        </a>
                        <!-- End Banner Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Product Default Tab Slider Section -->
    <div class="product-default-tab-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <ul class="tablist-default tablist nav">
                                <li><a class="nav-link active" data-bs-toggle="tab" href="#feature">FEATURED</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#best-seller">BEST SELLERS</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#on-sale">ON - SALE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <!-- Start Tab Item Single Item -->
                            <div class="tab-pane active show" id="feature">
                                <div class="product-slider-default-1row default-slider-nav-arrow">
                                    <!-- Slider main container -->
                                    <div class="swiper-container product-default-slider-4grid-1row">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-9.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-10.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="product-details-default.html">Epicuri
                                                                per lobortis</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$68</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-11.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-3.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="product-details-default.html">Kaoreet
                                                                lobortis sagit</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$95.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-7.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Condimentum
                                                                posuere</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$115.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-6.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-9.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Convallis quam
                                                                sit</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$75.00 - $85.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-1.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-2.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="tag">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="product-details-default.html">Aliquam
                                                                lobortis</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$75.00 - $85.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-3.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-4.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="tag">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Condimentum
                                                                posuere</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price"><del>$89.00</del> $80.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-6.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="tag">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="product-details-default.html">Cras
                                                                neque metus</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price"><del>$70.00</del> $60.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-7.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-8.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="product-details-default.html">Donec
                                                                eu libero ac</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$74</span>
                                                    </div>

                                                </div>
                                            </div> <!-- End Product Default Single Item -->
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <!-- End Tab Item Single Item -->
                            <!-- Start Tab Item Single Item -->
                            <div class="tab-pane" id="best-seller">
                                <div class="product-slider-default-1row default-slider-nav-arrow">
                                    <!-- Slider main container -->
                                    <div class="swiper-container product-default-slider-4grid-1row">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-6.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-9.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Convallis quam
                                                                sit</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$75.00 - $85.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-1.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-2.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="tag">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Aliquam
                                                                lobortis</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$75.00 - $85.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-3.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-4.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="tag">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Condimentum
                                                                posuere</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price"><del>$89.00</del> $80.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-6.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="tag">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="product-details-default.html">Cras
                                                                neque metus</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price"><del>$70.00</del> $60.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-7.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-8.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="product-details-default.html">Donec
                                                                eu libero ac</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$74</span>
                                                    </div>

                                                </div>
                                            </div> <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-9.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-10.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Epicuri
                                                                per lobortis</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$68</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-11.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-3.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Kaoreet
                                                                lobortis sagit</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$95.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-7.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Condimentum
                                                                posuere</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$115.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <!-- End Tab Item Single Item -->
                            <!-- Start Tab Item Single Item -->
                            <div class="tab-pane" id="on-sale">
                                <div class="product-slider-default-1row default-slider-nav-arrow">
                                    <!-- Slider main container -->
                                    <div class="swiper-container product-default-slider-4grid-1row">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">

                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-9.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-10.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Epicuri
                                                                per lobortis</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$68</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-11.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-3.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Kaoreet
                                                                lobortis sagit</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$95.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-7.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Condimentum
                                                                posuere</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$115.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-5.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-6.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="tag">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="product-details-default.html">Cras
                                                                neque metus</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price"><del>$70.00</del> $60.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-6.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-9.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Convallis quam
                                                                sit</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$75.00 - $85.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-1.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-2.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="tag">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Aliquam
                                                                lobortis</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$75.00 - $85.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-3.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-4.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="tag">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">Condimentum
                                                                posuere</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price"><del>$89.00</del> $80.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                            <!-- Start Product Default Single Item -->
                                            <div class="product-default-single-item product-color--aqua swiper-slide">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/assets/images/product/default/home-4/default-7.jpg"
                                                            alt="">
                                                        <img src="/assets/images/product/default/home-4/default-8.jpg"
                                                            alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add to Cart</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="product-details-default.html">Donec
                                                                eu libero ac</a></h6>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-right">
                                                        <span class="price">$74</span>
                                                    </div>

                                                </div>
                                            </div> <!-- End Product Default Single Item -->
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <!-- End Tab Item Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Tab Slider Section -->

    <!-- Start Service Section -->
    <div class="service-promo-section section-top-gap-100">
        <div class="service-wrapper">
            <div class="container">
                <div class="row">
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="image">
                                <img src="/assets/images/icons/service-promo-5.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">FREE SHIPPING</h6>
                                <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="/assets/images/icons/service-promo-6.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">30 DAYS MONEY BACK</h6>
                                <p>100% satisfaction guaranteed, or get your money back within 30 days!</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="image">
                                <img src="/assets/images/icons/service-promo-7.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">SAFE PAYMENT</h6>
                                <p>Pay with the world’s most popular and secure payment methods.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="image">
                                <img src="/assets/images/icons/service-promo-8.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">LOYALTY CUSTOMER</h6>
                                <p>Card for the other 30% of their purchases at a rate of 1% cash back.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Section -->

    <!-- Start Blog Slider Section -->
    <div class="blog-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">THE LATEST BLOGS</h3>
                                <p>Present posts in a best way to highlight interesting moments of your blog.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="blog-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-default-slider default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container blog-slider">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Start Product Default Single Item -->
                                    <div class="blog-default-single-item blog-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="/assets/images/blog/blog-grid-home-1-img-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post One</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="blog-default-single-item blog-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="/assets/images/blog/blog-grid-home-1-img-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Two</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="#" class="read-more-btn icon-space-left">Read More
                                                    <span><i class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="blog-single-sidebar-left.html" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="blog-default-single-item blog-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="/assets/images/blog/blog-grid-home-1-img-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post
                                                    Three</a></h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="blog-default-single-item blog-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="/assets/images/blog/blog-grid-home-1-img-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post
                                                    Four</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="blog-default-single-item blog-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="/assets/images/blog/blog-grid-home-1-img-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post
                                                    Five</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="blog-default-single-item blog-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="/assets/images/blog/blog-grid-home-1-img-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Six</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Slider Section -->
@endsection
