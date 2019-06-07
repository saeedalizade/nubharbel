@extends('layouts.layout')
@section('content')
    <!--page title start-->

    <section class="page-title o-hidden" data-bg-img="{{ asset ('img/bg/02.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h1 class="mb-3">جزئیات <span class="text-theme">محصول</span></h1>
                    <nav aria-label="breadcrumb">
                        {{ Breadcrumbs::render('productDetail',$Product['Detail']) }}
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
                    <div class="col-lg-5 col-md-12">
                        <div class="slick3">
                            @foreach($Product['pic'] as $pic)
                                <div class="item-slick3"
                                     data-thumb="{{ asset ('img/picProduct/Thumbnail/'.$pic['img']) }}">
                                    <img class="img-fluid w-100" src="{{ asset ('img/picProduct/Large/'.$pic['img']) }}"
                                         alt=""/>
                                </div>
                            @endforeach

                        </div>
                        <div class="slick3-dots-main"></div>
                    </div>
                    <div class="col-lg-7 col-md-12 md-mt-5">
                        <div class="product-details">
                            <h4>
                                {{ $Product['Detail']['title']}}
                            </h4>
                            <div class="product-price my-4"><span
                                        class="mr-3"> {{ number_format ($Product['Detail']['price'])}} ریال{{--<del>$279.00</del>--}}</span>
                             {{--   <span class="review-rating">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="far fa-star"></i>
                                      <i class="far fa-star"></i>
                                 </span>--}}
                            </div>
                            <ul class="portfolio-meta list-unstyled mb-4">
                                <li><span> دسته بندی :</span> {{ $Product['Detail']['CategoryProduct']['title']}}</li>
                            </ul>
                            <p>
                                {{ $Product['Detail']['description']}}
                            </p>
            {{--                <div class="row my-4">
                                <div class="col-sm-4">
                                    <ul class="product-meta list-unstyled">
                                        <li>
                                            <h6 class="mb-2 text-black">اندازه</h6>
                                            <span>
                                               <select class="form-control">
                                                  <option value="1">یک لیتری</option>
                                                  <option value="2">دو لیتری</option>
                                                  <option value="3">سه لیتری</option>
                                                  <option value="4">پنج لیتری</option>
                                                  <option value="5">بیست لیتری</option>
                                               </select>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                            </div>--}}

                            <div class="row my-4 align-items-end">
                                <div class="col-sm-6">
                                    <div>
                                        <h6 class="mb-2 text-black">تعداد</h6>
                                        <button class="btn-product btn-product-up"><i class="fas fa-minus"></i>
                                        </button>
                                        <input class="form-product" type="number" name="form-product" value="1"/>
                                        <button class="btn-product btn-product-down"><i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                {{--<div class="col-sm-6 xs-mt-3">--}}
                                    {{--<div class="product-overlay">--}}
                                        {{--<ul class="list-inline">--}}
                                            {{--<li class="list-inline-item mb-0">--}}
                                                {{--<a href="#"> <i class="far fa-heart"></i>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="list-inline-item mb-0">--}}
                                                {{--<a href="#"> <i class="far fa-eye"></i>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="list-inline-item mb-0">--}}
                                                {{--<a href="#"> <i class="fas fa-signal"></i>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <button class="btn btn-theme btn-iconic mt-3">اضافه کردن به سبد خرید <i
                                        class="fa fa-shopping-cart ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--tab start-->

        <section class="grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab">
                            <!-- Nav tabs -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist"><a
                                            class="nav-item nav-link active" id="nav-tab1" data-toggle="tab"
                                            href="#tab3-1" role="tab" aria-selected="true">توضیحات</a>
                                   {{-- <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab3-2"
                                       role="tab" aria-selected="false">Additional information</a>--}}
                                    <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab3-3"
                                       role="tab" aria-selected="false">نظرات (2)</a>
                                </div>
                            </nav>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="tab3-1">
                                    <h5 class="mb-3">توضیحات <span class="text-theme">محصول</span></h5>
                                    <p class="lead mb-0">
                                        {{ $Product['Detail']['content'] }}
                                    </p>
                                </div>
                                {{--<div role="tabpanel" class="tab-pane fade" id="tab3-2">
                                    <h5 class="mb-3">Additional <span class="text-theme">information</span></h5>
                                    <table class="table table-striped table-bordered mb-0">
                                        <tbody>
                                        <tr>
                                            <td>Size</td>
                                            <td>Small, Medium, Large &amp; Extra Large</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>Read, Blue, Green &amp; Black</td>
                                        </tr>
                                        <tr>
                                            <td>Chest</td>
                                            <td>38 inches</td>
                                        </tr>
                                        <tr>
                                            <td>Waist</td>
                                            <td>20 cm</td>
                                        </tr>
                                        <tr>
                                            <td>Length</td>
                                            <td>35 cm</td>
                                        </tr>
                                        <tr>
                                            <td>Fabric</td>
                                            <td>Cotton, Silk &amp; Synthetic</td>
                                        </tr>
                                        <tr>
                                            <td>Warranty</td>
                                            <td>6 Months</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>--}}
                                <div role="tabpanel" class="tab-pane fade" id="tab3-3">
                                    <h5 class="mb-3">نظرات <span class="text-theme">کاربران (2) </span></h5>
                                    <div class="media-holder review-list">
                                        <div class="media">
                                            <img class="img-center rounded-circle mr-3" alt="image"
                                                 src="./images/product-thumb/01.jpg"/>
                                            <div class="media-body">
                                                <h6>John Glemean</h6>
                                                <p>The sweeping the cloud what might be right for you may not be right
                                                    for some here is the story of a man named Brady who was busy with
                                                    three right for you may not be right.</p> <span
                                                        class="review-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </span>
                                            </div>
                                        </div>
                                        <div class="media mt-5">
                                            <img class="img-center rounded-circle mr-3" alt="image"
                                                 src="./images/product-thumb/02.jpg"/>
                                            <div class="media-body">
                                                <h6>John Glemean</h6>
                                                <p>The sweeping the cloud what might be right for you may not be right
                                                    for some here is the story of a man named Brady who was busy with
                                                    three right for you may not be right.</p> <span
                                                        class="review-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-comments mt-5 pos-r">
                                        <div class="section-title mb-3">
                                            <h5>Add <span class="text-theme">REVIEW</span></h5>
                                        </div>
                                        <form id="contact-form" method="post" action="contact.php"/>
                                        <div class="messages"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                           placeholder="Type name" required="required"
                                                           data-error="Name is required."/>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input id="form_email" type="email" name="email"
                                                           class="form-control" placeholder="Type Email"
                                                           required="required" data-error="Valid email is required."/>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option value=""/>
                                                        Rating -- Select
                                                        <option value="1"/>
                                                        1
                                                        <option value="2"/>
                                                        2
                                                        <option value="3"/>
                                                        3
                                                        <option value="4"/>
                                                        4
                                                        <option value="5"/>
                                                        5
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Comment</label>
                                                    <textarea id="form_message" name="message" class="form-control"
                                                              placeholder="Type Comment" rows="4" required="required"
                                                              data-error="Please,leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-theme btn-iconic"><span>Comment <i
                                                                class="fas fa-long-arrow-alt-right"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--tab end-->







    </div>

    <!--body content end-->
@endsection