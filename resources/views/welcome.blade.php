@extends('layouts.layout')
@section('content')


    <!--hero section start-->

    <section class="fullscreen-banner p-0 o-hidden">
        <div id="slider" class="sl-slider-wrapper">
            <div class="sl-slider">
                <div class="sl-slide sl-trans-elems" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner" data-bg-img="{{asset('img/bg/01.jpg')}}">
                        <div class="align-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
                                        <h5 class="slider-label wow fadeInUp mb-2" data-wow-duration="0.7s">Save Up To 30% Hurry Up</h5>
                                        <h1 class="mb-4 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="2s">New <i>Arrival</i> <span class="text-black">Fashion</span></h1>
                                        <a class="btn btn-theme btn-iconic animated5" href="#"><span>Shop Now <i class="fas fa-shopping-cart"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner" data-bg-img="{{asset('img/bg/02.jpg')}}">
                        <div class="align-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
                                        <h5 class="wow fadeInUp mb-2" data-wow-duration="0.7s" data-wow-delay="2s">Best Offer Of The Month</h5>
                                        <h1 class="mb-4 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="3s">New <span class="text-white font-italic">Women's</span> <span class="text-black">Fashion</span> Trends</h1>
                                        <a class="btn btn-theme btn-iconic animated5" href="#"><span>Shop Now <i class="fas fa-shopping-cart"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner" data-bg-img="{{asset('img/bg/05.jpg')}}" style="background-position: left;">
                        <div class="align-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 mr-auto text-left">
                                        <h5 class="wow fadeInUp mb-2" data-wow-duration="0.7s" data-wow-delay="2s">Get Product New Season</h5>
                                        <h1 class="mb-4 text-black wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="3s">Upto 70% Off on <span class="text-theme">Fashion</span></h1>
                                        <a class="btn btn-theme btn-iconic animated5" href="#"><span>Shop Now <i class="fas fa-shopping-cart"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /sl-slider -->
            <nav id="nav-arrows" class="nav-arrows"> <span class="nav-arrow-prev">Previous</span>
                <span class="nav-arrow-next">Next</span>
            </nav>
            <nav id="nav-dots" class="nav-dots">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
            </nav>
        </div>
        <!-- /slider-wrapper -->
    </section>

    <!--hero section end-->


    <!--body content start-->

    <div class="page-content">
        <div class="insideText">OveltyShop</div>
        <!--product add start-->

        <section>
            <div class="container">
                <div class="row row-eq-height">
                    <div class="col-lg-6">
                        <div class="product-add">
                            <img class="h-100" src="{{asset('img/product-add/01.jpg')}}" alt="" />
                            <div class="product-add-hover">
                                <h4 class="large-font">The Half Price <br />Summer Sale</h4>
                                <a class="btn btn-theme btn-iconic btn-circle mt-2" href="#"><span>Shop Now <i class="fas fa-shopping-cart"></i></span></a>
                            </div>
                            <div class="add-sale-label">Sale</div>
                        </div>
                    </div>
                    <div class="col-lg-6 md-mt-3">
                        <div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-add">
                                        <img src="{{asset('img/product-add/02.jpg')}}" alt="" />
                                        <div class="product-add-hover">
                                            <h4>Best Summer <br />Collection</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 xs-mt-3">
                                    <div class="product-add">
                                        <img src="{{asset('img/product-add/03.jpg')}}" alt="" />
                                        <div class="product-add-hover">
                                            <h4>Trending item <br />Collection 2018</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="product-add">
                                        <img src="{{asset('img/product-add/04.jpg')}}" alt="" />
                                        <div class="product-add-hover">
                                            <h4 class="large-font-2 text-black">New Style Arrival <br />For Kids</h4>
                                            <a class="btn btn-theme btn-iconic btn-circle" href="#"><span>Shop Now <i class="fas fa-shopping-cart"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--product add end-->


        <!--product start-->

        <section class="grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mr-auto">
                        <div class="section-title">
                            <h2 class="title">Featured <span>Products</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme no-pb slide-arrow-2" data-dots="false" data-nav="true" data-items="4" data-lg-items="3" data-md-items="2" data-sm-items="2" data-margin="30" data-autoplay="true">
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/01.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Jacket
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item product-label-new">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/02.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Shirt
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/03.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Curvas Cap
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item product-label-sale">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/04.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Gown
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/05.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Goggles
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--product end-->


        <!--hot deal start-->

        <section class="theme-bg text-center text-white custom-pb-18">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-0">
                            <h2 class="title mb-3">Hot Deal Of <span> the week</span></h2>
                            <h4 class="text-white text-capitalize mb-0">Hurry Up Offer ends in:</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                                <ul class="countdown shop-count list-inline" data-countdown="2019/09/23"></ul>
                            </div>
                        </div>
                        <a class="btn btn-white btn-circle" href="#"><span>Shop Now</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!--hot deal end-->


        <!--product start-->

        <section class="custom-mt-10 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme" data-items="4" data-lg-items="3" data-md-items="2" data-sm-items="2" data-margin="30" data-autoplay="true">
                            <div class="item">
                                <div class="product-item mb-0">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/01.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Jacket
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item mb-0">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/02.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Shirt
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item mb-0">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/03.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Curvas Cap
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item mb-0">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/04.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Gown
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item mb-0">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/05.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Goggles
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--product end-->


        <!--add start-->

        <section class="dark-bg text-white grediant-overlay" data-bg-img="{{asset('img/bg/03.jpg')}}" data-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mr-auto">
                        <h2 class="large-font text-white">2018 <br /> Best Summer Collection</h2>
                        <a class="btn btn-theme btn-iconic animated5" href="#"><span>Shop Now <i class="fas fa-shopping-cart"></i></span></a>
                    </div>
                </div>
            </div>
        </section>

        <!--add end-->


        <!--masonry start-->

        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                        <div class="section-title">
                            <h2 class="title">New <span>Arrivals</span></h2>
                        </div>
                        <div class="portfolio-filter">
                            <button data-filter="" class="is-checked">All</button>
                            <button data-filter=".cat1">Women's</button>
                            <button data-filter=".cat2">Men's</button>
                            <button data-filter=".cat3">Kids</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="grid row columns-3">
                            <div class="grid-item cat1">
                                <div class="product-item product-label-new">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/05.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Goggles
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat2">
                                <div class="product-item product-label-new">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/08.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Shirts
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat3">
                                <div class="product-item product-label-new">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/06.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Jacket
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat2">
                                <div class="product-item product-label-new">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/09.jpg')}}/" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Tshirt
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat1">
                                <div class="product-item product-label-new">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/07.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Jeans
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat3">
                                <div class="product-item product-label-new">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/10.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            kids frock
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--masonry end-->


        <!--testimonial start-->

        <section class="grey-bg text-center testimonial">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xl-8 col-lg-10 col-md-12 ml-auto mr-auto">
                        <div class="tab">
                            <!-- Tab panes -->
                            <div class="tab-content" id="nav-tabContent">
                                <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                                    <div class="testimonial-content"> <i class="fas fa-quote-left"></i>
                                        <p>Quae adipisci quam laudantium nulla modi, Consectetur adipisicing elit, Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, adipisci quam laudantium nulla modi.</p>
                                    </div>
                                    <div class="testimonial-caption">
                                        <h6>Kelly Rain</h6>
                                        <label>- Manager</label>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                                    <div class="testimonial-content"> <i class="fas fa-quote-left"></i>
                                        <p>Aaudantium Quae adipisci quam nulla modi, Consectetur adipisicing elit, Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, adipisci quam laudantium nulla modi.</p>
                                    </div>
                                    <div class="testimonial-caption">
                                        <h6>John Doe</h6>
                                        <label>- Manager</label>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab1-3">
                                    <div class="testimonial-content"> <i class="fas fa-quote-left"></i>
                                        <p>Numquam adipisci quam laudantium nulla modi, Consectetur adipisicing elit, Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! officiis, adipisci quam laudantium nulla modi.</p>
                                    </div>
                                    <div class="testimonial-caption">
                                        <h6>Jamy Lynn</h6>
                                        <label>- Advisor</label>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab1-4">
                                    <div class="testimonial-content"> <i class="fas fa-quote-left"></i>
                                        <p>Consectetur buae adipisci quam laudantium nulla modi, adipisicing elit, Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, adipisci quam laudantium nulla modi.</p>
                                    </div>
                                    <div class="testimonial-caption">
                                        <h6>John Methew</h6>
                                        <label>- Manager</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav tabs -->
                            <nav>
                                <div class="nav nav-tabs mt-5" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-tab1" data-toggle="tab" href="#tab1-1" role="tab" aria-selected="true">
                                        <img class="img-center" src="{{asset('img/thumbnail/01.png')}}" alt="" />
                                    </a>
                                    <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab1-2" role="tab" aria-selected="false">
                                        <img class="img-center" src="{{asset('img/thumbnail/02.png')}}" alt="" />
                                    </a>
                                    <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab1-3" role="tab" aria-selected="false">
                                        <img class="img-center" src="{{asset('img/thumbnail/01.png')}}" alt="" />
                                    </a>
                                    <a class="nav-item nav-link" id="nav-tab4" data-toggle="tab" href="#tab1-4" role="tab" aria-selected="false">
                                        <img class="img-center" src="{{asset('img/thumbnail/02.png')}}" alt="" />
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--testimonial end-->


        <!--top product start-->

        <section class="product-left-side">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <h4 class="mb-4 title">Top <span>Rated</span></h4>
                        <div class="product product-left mb-4">
                            <div class="product-image">
                                <a href="#"><img class="img-fluid" src="{{asset('img/product/01.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="product-desc">
                                <div class="product-title">
                                    <h5> <a href="#"> Jacket </a> </h5>
                                </div>
                                <div class="product-price">
                                    <span> $179.99 <del>$279.00</del></span>
                                    <span class="review-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              </span>
                                </div>
                            </div>
                        </div>
                        <div class="product product-left">
                            <div class="product-image">
                                <a href="#"><img class="img-fluid" src="{{asset('img/product/02.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="product-desc">
                                <div class="product-title">
                                    <h5> <a href="#">Shirt </a> </h5>
                                </div>
                                <div class="product-price">
                                    <span> $179.99 <del>$279.00</del></span>
                                    <span class="review-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mt-3 sm-mt-5">
                        <h4 class="mb-4 title">Most <span>Popular</span></h4>
                        <div class="product product-left mb-4">
                            <div class="product-image">
                                <a href="#"><img class="img-fluid" src="{{asset('img/product/03.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="product-desc">
                                <div class="product-title">
                                    <h5> <a href="#">Curvas cap</a> </h5>
                                </div>
                                <div class="product-price">
                                    <span> $179.99 <del>$279.00</del></span>
                                    <span class="review-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              </span>
                                </div>
                            </div>
                        </div>
                        <div class="product product-left">
                            <div class="product-image">
                                <a href="#"><img class="img-fluid" src="{{asset('img/product/04.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="product-desc">
                                <div class="product-title">
                                    <h5> <a href="#">Gown</a> </h5>
                                </div>
                                <div class="product-price">
                                    <span> $179.99 <del>$279.00</del></span>
                                    <span class="review-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mt-3 sm-mt-5">
                        <h4 class="mb-4 title">Top On <span>Sale</span></h4>
                        <div class="product product-left mb-4">
                            <div class="product-image">
                                <a href="#"><img class="img-fluid" src="{{asset('img/product/05.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="product-desc">
                                <div class="product-title">
                                    <h5> <a href="#">Goggles</a> </h5>
                                </div>
                                <div class="product-price">
                                    <span> $179.99 <del>$279.00</del></span>
                                    <span class="review-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              </span>
                                </div>
                            </div>
                        </div>
                        <div class="product product-left">
                            <div class="product-image">
                                <a href="#"><img class="img-fluid" src="{{asset('img/product/07.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="product-desc">
                                <div class="product-title">
                                    <h5> <a href="#">Jeans</a> </h5>
                                </div>
                                <div class="product-price">
                                    <span> $179.99 <del>$279.00</del></span>
                                    <span class="review-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--top product end-->


        <!--product add start-->

        <section class="o-hidden p-0 text-center">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="product-add">
                            <img src="{{asset('img/product-add/05.jpg')}}" alt="" />
                            <div class="product-add-hover center px-3">
                                <h2 class="text-white large-font">New Women's <br /> Collection 2018</h2>
                                <a class="btn btn-theme btn-iconic mt-2" href="#"><span>Shop Now <i class="fas fa-shopping-cart"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-add">
                            <img src="{{asset('img/product-add/07.jpg')}}" alt="" />
                            <div class="product-add-hover center px-3">
                                <h2 class="text-white large-font">New Men's <br /> Collection 2018</h2>
                                <a class="btn btn-theme btn-iconic mt-2" href="#"><span>Shop Now <i class="fas fa-shopping-cart"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--product add end-->


        <!--best seller start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 ml-auto">
                        <div class="section-title">
                            <h2 class="title">Best <span>Seller</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme no-pb slide-arrow-2" data-dots="false" data-nav="true" data-items="3" data-md-items="2" data-sm-items="2" data-margin="30" data-autoplay="true">
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/01.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Jacket
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/02.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Men's Shirt
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/03.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Curvas Cap
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/04.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Gown
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{asset('img/product/05.jpg')}}" alt="" />
                                        <div class="product-overlay">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"> <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fas fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-desc"> <a href="product-detail.html" class="product-name">
                                            Goggles
                                        </a>
                                        <span class="product-price">
                  $22.00
                </span>
                                    </div>
                                    <div class="product-btn">
                                        <button class="btn btn-theme btn-block"><span>Add to Cart</span>  <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--best seller end-->


        <!--blog start-->

        <section class="grey-bg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                        <div class="section-title">
                            <h2 class="title">Latest Fashion <span>Blog</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="post">
                            <div class="post-image">
                                <img class="img-fluid w-100" src="{{asset('img/blog/01.jpg')}}" alt="" />
                                <div class="post-date">23 <span>Apr</span>
                                </div>
                            </div>
                            <div class="post-desc">
                                <div class="post-title">
                                    <h5><a href="./blog-single.html">Ligula sed magna</a></h5>
                                </div>
                                <p>Cras ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde omnis iste natus error sit voluptat</p> <a class="post-btn" href="./blog-single.html">Read More<i class="ml-2 fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="post">
                            <div class="post-image">
                                <img class="img-fluid w-100" src="{{asset('img/blog/02.jpg')}}" alt="" />
                                <div class="post-date">23 <span>Apr</span>
                                </div>
                            </div>
                            <div class="post-desc">
                                <div class="post-title">
                                    <h5><a href="./blog-single.html">Perspiciatis unde omnis</a></h5>
                                </div>
                                <p>Cras ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde omnis iste natus error sit voluptat</p> <a class="post-btn" href="./blog-single.html">Read More<i class="ml-2 fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="post">
                            <div class="post-image">
                                <img class="img-fluid w-100" src="{{asset('img/blog/03.jpg')}}" alt="" />
                                <div class="post-date">23 <span>Apr</span>
                                </div>
                            </div>
                            <div class="post-desc">
                                <div class="post-title">
                                    <h5><a href="./blog-single.html">Sed ut perspiciatis</a></h5>
                                </div>
                                <p>Cras ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde omnis iste natus error sit voluptat</p> <a class="post-btn" href="./blog-single.html">Read More<i class="ml-2 fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--blog end-->


        <!--feuture start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="featured-item">
                            <div class="featured-icon"> <i class="flaticon-shipped"></i>
                            </div>
                            <div class="featured-title text-uppercase">
                                <h5>cach on delivery</h5>
                            </div>
                            <div class="featured-desc">
                                <p>Maximus vestibulum Nam pulvinar vitae neque et porttitor Praesent sed nisi eleifend.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="featured-item">
                            <div class="featured-icon"> <i class="flaticon-free-delivery"></i>
                            </div>
                            <div class="featured-title text-uppercase">
                                <h5>free shipping</h5>
                            </div>
                            <div class="featured-desc">
                                <p>Maximus vestibulum Nam pulvinar vitae neque et porttitor Praesent sed nisi eleifend.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="featured-item">
                            <div class="featured-icon"> <i class="flaticon-refresh-left-arrow"></i>
                            </div>
                            <div class="featured-title text-uppercase">
                                <h5>35 days return</h5>
                            </div>
                            <div class="featured-desc">
                                <p>Maximus vestibulum Nam pulvinar vitae neque et porttitor Praesent sed nisi eleifend.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--feuture end-->


        <!--newsletter start-->

        <section class="theme-bg py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <h2 class="title">News<span>letter</span></h2>
                    </div>
                    <div class="col-lg-8 col-md-12 md-mt-3">
                        <div class="subscribe-form">
                            <form id="mc-form" class="group row align-items-center" />
                            <div class="col-sm-8">
                                <input type="email" value="" name="EMAIL" class="email box-shadow" id="mc-email" placeholder="Email Address" required="" />
                            </div>
                            <div class="col-sm-4 xs-mt-1">
                                <input class="btn btn-white btn-circle" type="submit" name="subscribe" value="Subscribe" />
                            </div>
                            <label for="mc-email" class="subscribe-message"></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--newsletter end-->


    </div>

    <!--body content end-->

@endsection