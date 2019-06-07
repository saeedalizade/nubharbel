@extends('layouts.layout')
@section('content')

    <!--page title start-->

    <section class="page-title o-hidden" data-bg-img="{{ asset('img/bg/02.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h1 class="mb-3">Product <span class="text-theme">Full width</span></h1>
                    <nav aria-label="breadcrumb">
                        {{ Breadcrumbs::render('product',$data['ProductCats']) }}
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="row">

                            @foreach($data['ProductInfo'] as $product)
                                <div class="col-lg-4 col-md-6 mt-5">
                                    <div class="product-item">

                                        <div class="product-img">

                                            <a href="{{ url('productDetail/'.$product['id']) }}"> <img class="img-fluid" src="{{ url ('img/product/Medium/'.$product['img']) }}" alt=""/>
                                            </a>
                                                <div class="product-overlay">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="#"> <i class="far fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('productDetail/'.$product['id']) }}"> <i class="far fa-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class="fas fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="product-desc"><a href=" {{ url('productDetail/'.$product['id']) }}" class="product-name">
                                               {{ $product['title'] }}
                                            </a>
                                            <span class="product-price">
                                              {{ $product['price'] }}
                                            </span>
                                        </div>
                                        <div class="product-btn">
                                            <button class="btn btn-theme btn-block"><span>افزودن به سبد خرید</span> <i
                                                        class="fas fa-shopping-cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        {{ $data['ProductInfo']->links('Paginate') }}
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!--body content end-->
@endsection