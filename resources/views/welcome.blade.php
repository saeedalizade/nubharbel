@extends('layouts.layout')
@section('content')


    <!--hero section start-->

    <section class="fullscreen-banner p-0 o-hidden">
        <div id="slider" class="sl-slider-wrapper">
            @foreach($data['slider'] as $key=>$slider)
                <div class="sl-slider">
                    <div class="sl-slide sl-trans-elems" data-orientation="horizontal"
                         data-slice1-rotation="-25 +{{ ($key+1)*10 }}" data-slice2-rotation="{{ -25+($key+1)*10 }}"
                         data-slice1-scale="{{2+$key}}" data-slice2-scale="{{2+$key}}">
                        <div class="sl-slide-inner" data-bg-img="{{asset('img/slider/'.$slider['img'])}}">
                            <div class="align-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-12">
                                            <h5 class="slider-label wow fadeInUp mb-2"
                                                data-wow-duration="0.7s">{{ $slider['title'] }}</h5>
                                            <h1 class="mb-4 wow fadeInUp" data-wow-duration="0.9s"
                                                data-wow-delay="2s">{{ $slider['description'] }}</h1>
                                            <a class="btn btn-theme btn-iconic animated5" href="#"><span>خرید <i
                                                            class="fas fa-shopping-cart"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        @endforeach
        <!-- /sl-slider -->
            <nav id="nav-arrows" class="nav-arrows"><span class="nav-arrow-prev">قبلی</span>
                <span class="nav-arrow-next">بعدی</span>
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
        <div class="insideText">گلاب سرا</div>
        <!--product add start-->

        <section class="o-hidden p-0">
            <div class="container-fluid p-0">
                <div class="row no-gutters">

                    @foreach($data['SpecialProduct'] as $special)
                        <div class="col-lg-6 col-md-12 ">
                            <div class="product-add">
                                <img class="h-100" src="{{asset('img/product/Large/'.$special['img'])}}" alt="">
                                <div class="product-add-hover">
                                    <h6>{{ $special['title'] }}</h6>
                                    <a class="btn btn-theme btn-iconic btn-circle mt-2"
                                       href="{{ url('productDetail/'.$special['id']) }}"><span>خرید  <i
                                                    class="fas fa-shopping-cart"></i></span></a>
                                </div>
                                <div class="add-sale-label">فروش ویژه</div>
                            </div>
                        </div>
                    @endforeach

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
                            <h2 class="title">عرقیات <span>گلاب سرا</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme no-pb slide-arrow-2" data-dots="ture" data-nav="true"
                             data-items="4" data-lg-items="3" data-md-items="2" data-sm-items="2" data-margin="30"
                             data-autoplay="true">

                            @foreach($data['Product'] as $product)
                                <div class="item">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="{{ url('productDetail/'.$product['id']) }}"> <img class="img-fluid"
                                                                                                       src="{{asset('img/product/Medium/'.$product['img'])}}"
                                                                                                       alt=""/> </a>
                                            <div class="product-overlay">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="#"> <i class="far fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('productDetail/'.$product['id']) }}"> <i
                                                                    class="far fa-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class="fas fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-desc"><a href="{{ url('productDetail/'.$product['id']) }}"
                                                                     class="product-name">
                                                <?php echo $product['title']?>
                                            </a>
                                            <span class="product-price"> <?php echo $product['price']?>    </span>
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
                    </div>
                </div>
            </div>
        </section>

        <!--product end-->


        <!--hot deal start-->

    {{--
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
    --}}

    <!--hot deal end-->


        <!--add start-->

        <section class="dark-bg text-white grediant-overlay" data-bg-img="{{asset('img/bg/03.jpg')}}" data-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mr-auto">
                        <h2 class="large-font text-white">1398 <br/> عرقیات با کیفیت و رونق تولید</h2>
                        <a class="btn btn-theme btn-iconic animated5" href="#"><span>همین الان خرید کنید <i
                                        class="fas fa-shopping-cart"></i></span></a>
                    </div>
                </div>
            </div>
        </section>

        <!--add end-->


        <!--masonry start-->

    {{--  <section>
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
      </section>--}}

    <!--masonry end-->


        <!--testimonial start-->

    {{-- <section class="grey-bg text-center testimonial">
         <div class="container">
             <div class="row text-center">
                 <div class="col-xl-8 col-lg-10 col-md-12 ml-auto mr-auto">
                     <div class="tab">
                         <!-- Tab panes -->
                         <div class="tab-content" id="nav-tabContent">
                             @foreach($data['News'] as $key=>$news)
                                 <div role="tabpanel" class="tab-pane fade show active" id="tab1-{{ $key+1 }}">
                                     <div class="testimonial-content"><i class="fas fa-quote-left"></i>
                                         <p>Quae adipisci quam laudantium nulla modi, Consectetur adipisicing elit,
                                             Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde!
                                             Numquam officiis, adipisci quam laudantium nulla modi.</p>
                                     </div>
                                     <div class="testimonial-caption">
                                         <h6>Kelly Rain</h6>
                                         <label>- Manager</label>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                         <!-- Nav tabs -->
                         <nav>
                             <div class="nav nav-tabs mt-5" id="nav-tab" role="tablist">
                                 <a class="nav-item nav-link active" id="nav-tab1" data-toggle="tab" href="#tab1-1"
                                    role="tab" aria-selected="true">
                                     <img class="img-center" src="{{asset('img/thumbnail/01.png')}}" alt=""/>
                                 </a>
                                 <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab1-2"
                                    role="tab" aria-selected="false">
                                     <img class="img-center" src="{{asset('img/thumbnail/02.png')}}" alt=""/>
                                 </a>
                                 <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab1-3"
                                    role="tab" aria-selected="false">
                                     <img class="img-center" src="{{asset('img/thumbnail/01.png')}}" alt=""/>
                                 </a>
                                 <a class="nav-item nav-link" id="nav-tab4" data-toggle="tab" href="#tab1-4"
                                    role="tab" aria-selected="false">
                                     <img class="img-center" src="{{asset('img/thumbnail/02.png')}}" alt=""/>
                                 </a>
                             </div>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </section>--}}

    <!--testimonial end-->


        <!--top product start-->

    {{--  <section class="product-left-side">
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
      </section>--}}

    <!--top product end-->


        <!--product add start-->

    {{--<section class="o-hidden p-0 text-center">
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
    </section>--}}

    <!--product add end-->


        <!--best seller start-->

    {{-- <section>
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
     </section>--}}

    <!--best seller end-->


        <!--blog start-->

        <section class="grey-bg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                        <div class="section-title">
                            <h2 class="title">آخرین مقالات <span>بلاگ گلابسرا</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($data['Articles'] as $article)
                        <div class="col-lg-4 col-md-12">
                            <div class="post">
                                <div class="post-image">
                                    <img class="img-fluid w-100" src="{{url('img/Post/Large/'.$article['img'])}}"
                                         alt=""/>
                                    @php $Created = new Verta($article['created_at']);@endphp

                                    <div class="post-date">{{ $Created->format('d')}}
                                        <span>{{ $Created->format('F')}}</span>
                                    </div>
                                </div>
                                <div class="post-desc">
                                    <div class="post-title">
                                        <h5><a href="{{-- route('Post/'.$article['id']) --}}">{{$article['title']}}</a>
                                        </h5>
                                    </div>
                                    <p>{{ strip_tags($article['description']) }}</p> <a class="post-btn"
                                                                                        href="{{ url('article/'.$article['id']) }}">بیشتر
                                        بخوانید<i
                                                class="ml-2 fas fa-long-arrow-alt-left"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <div class="featured-icon"><i class="flaticon-shipped"></i>
                            </div>
                            <div class="featured-title text-uppercase">
                                <h5>پرداخت در محل</h5>
                            </div>
                            <div class="featured-desc">
                                <p>شما میتوانید مبلغ سفارش خود را هم به صورت آنلاین از درگاه،و هم ازطریق پرداخت در محل
                                    انجام دهید </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="featured-item">
                            <div class="featured-icon"><i class="flaticon-free-delivery"></i>
                            </div>
                            <div class="featured-title text-uppercase">
                                <h5>حمل رایگان</h5>
                            </div>
                            <div class="featured-desc">
                                <p>گلابسرا مفتخر است که برای خرید های بالای 50 هزار تومان ،محصول را به رایگان به دست شما
                                    برساند</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="featured-item">
                            <div class="featured-icon"><i class="flaticon-refresh-left-arrow"></i>
                            </div>
                            <div class="featured-title text-uppercase">
                                <h5>تضمین کیفیت</h5>
                            </div>
                            <div class="featured-desc">
                                <p>گلابسرا محصولات خود را تضمین منماید
                                    ،محصولات گلابسرا 100% ارگانیک و بدون اسناس می باشد
                                    خریدی با کیفیت داشته باشید
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--feuture end-->


    </div>

    <!--body content end-->

@endsection