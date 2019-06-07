<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="HTML5 Template"/>
    <meta name="author" content="www.themeht.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>گلاب و عرقیات گلاب سرا کاشان</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}"/>

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="{{ mix ('css/all.css') }}" rel="stylesheet" type="text/css"/>


    <!-- inject css end -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="loader clear-loader"><a href="{{ route('home') }}"><img src="{{asset('img/loader.gif')}}" alt="گلابسرا، فروش گلاب و عرقیات گیاهی" class="loader-img"/></a></div>
    </div>

    <!-- preloader end -->


    <!--header start-->

    <header id="site-header" class="header">
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center sm-text-center">
                    <div class="col-lg-6 col-md-4">
                        <div class="topbar-link">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span>ایمیل</span>&nbsp;<a href="mailto:golabsara@gmail.com">golabsara@gmail.com</a>
                                </li>
                                <li class="list-inline-item"><span>تماس با ما</span>&nbsp;<a href="tel:+989211786491">+989211786491</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 text-md-left">
                        <div class="topbar-right">
                            <ul class="topbar-menu">
                                <!-- Currency / Language / My Account -->
                                {{--           <li class="currency">
                                               <div class="currency-selection">
                                                   <select>
                                                       <option value="1" />Usd
                                                       <option value="2" />cad
                                                       <option value="3" />aud
                                                       <option value="4" />eur
                                                   </select>
                                               </div>
                                           </li>--}}
                                {{--             <li class="language">
                                                 <div class="language-selection">
                                                     <select>
                                                         <option value="1" />English
                                                         <option value="2" />French
                                                         <option value="3" />Italian
                                                         <option value="4" />German
                                                     </select>
                                                 </div>
                                             </li>--}}
                                @guest
                                    <li><a href="{{ route('login') }}">ورود</a></li>
                                    <li><a href="{{ route('register') }}">ثبت نام</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                           دوست عزیز  &nbsp;{{ Auth::user()->name }}&nbsp; خوش آمدید  <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     $('#logout-form').submit();">
                                                    خروج
                                                </a>
                                                <a href="#">
                                                    پروفایل
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="{{ route('home') }}">
                                <img id="logo-img" class="img-center" src="{{asset('img/logo.png')}}" alt="'گلاب سرا،خرید و فروش عرقیات گیاهی"/>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-expanded="false"
                                    aria-label="Toggle navigation"><span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <!-- Left nav -->
                                <ul class="nav navbar-nav ml-auto mr-auto">

                                    <li class="nav-item">
                                        <a class="nav-link " href="{{url('article')}}" role="button">
                                            <span class="menu-label">بلاگ</span>
                                        </a>

                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="{{url('news')}}" role="button">
                                            <span class="menu-label">اخبار</span>
                                        </a>

                                    </li>

                                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"><span
                                                    class="menu-label">محصولات</span></a>
                                        <ul class="dropdown-menu">
                                            @foreach($DataFooter['ProductCategory'] as $ProductCategory)
                                                <li><a class="dropdown-item"
                                                       href="{{ url('product/'.$ProductCategory['id']) }}">{{$ProductCategory['title']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown"><a class="nav-link " href="#"><span
                                                    class="menu-label">تماس با ما</span></a>

                                    </li>

                                    <li class="nav-item dropdown"><a class="nav-link " href="#"><span
                                                    class="menu-label">در باره ما</span></a>

                                    </li>
                                </ul>
                            </div>
                            <ul class="right-nav justify-content-end list-inline">
                                <li class="list-inline-item search-icon ml-4">
                                    <div class="search-wrap">
                                        <button id="btn-search" class="btn-search"><i class="flaticon-search-1"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="cart"><a href="#" id="header-cart-btn"><span class="cart-badge">2</span>
                                            <i class="ti-bag"></i></a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="image">
                                                    <img src="{{asset('img/product-thumb/01.jpg')}}"
                                                         class="img-fluid cart-thumb" alt=""/>
                                                </a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$35</span>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="image">
                                                    <img src="{{asset('img/product-thumb/02.jpg')}}"
                                                         class="img-fluid cart-thumb" alt=""/>
                                                </a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$75</span>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="total text-right"><span class="d-block">Total: $110.00</span>
                                            </li>
                                            <li><a href="./product-cart.html" class="btn btn-theme btn-sm">Cart</a>
                                                <a href="./checkout.html" class="btn btn-border btn-sm">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="search">
        <button id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                    class="flaticon-cancel"></i>
        </button>
        <form class="search-form"/>
        <input class="search-input" name="search" type="search" placeholder="drones"/> <span class="search-info">برای جستجو دکمه اینتر را فشار دهید </span>
        </form>
    </div>


@yield('content')

<!--footer start-->
    <!--newsletter start-->

    <section class="theme-bg py-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h2 class="title">خبر<span>نامه</span></h2>
                </div>
                <div class="col-lg-8 col-md-12 md-mt-3">
                    <div class="subscribe-form">
                        <form id="mc-form" class="group row align-items-center NewsLetter" action="{{ route ('newsLetter') }}" method="post" />
                        {{ csrf_field() }}
                        <div class="col-sm-8 form-group">
                            <input type="email" value="" name="email" class="email box-shadow form-control" id="email"
                                   placeholder="آدرس پست الکترونیک" required=""/>
                        </div>
                        <div class="col-sm-4 xs-mt-1">
                            <input class="btn btn-white btn-circle" type="submit" name="subscribe"
                                   value="ارسال"/>
                        </div>
                        <label for="mc-email" class="subscribe-message"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--newsletter end-->
    <footer class="footer dark-bg">

        <div class="primary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-list">
                        <h5>آخرین اخبار</h5>
                        <ul class="list-unstyled">
                            @foreach($DataFooter['news'] as $news)
                                <li><a href="">{{ $news['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-mt-5 footer-list">
                        <h5>آخرین محصولات</h5>
                        <ul class="list-unstyled">
                            @foreach($DataFooter['Product'] as $product)
                                <li><a href="">{{ $product['title'] }}</a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mt-5 footer-list">
                        <h5>گلابسرا</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">درباره ما</a>
                            </li>
                            <li><a href="#">تماس با ما</a>
                            </li>

                        </ul>
                    </div>
                    {{--<div class="col-lg-3 col-md-6 col-sm-6 md-mt-5">
                        <h5>Get In Touch</h5>
                        <ul class="media-icon list-unstyled">
                            <li class="mb-4">
                                <p class="mb-0">423B, Road Wordwide Country, USA</p>
                            </li>
                            <li class="mb-4">
                                <a href="mailto:htinfotech7@gmail.com">htinfotech7@gmail.com</a>
                            </li>
                            <li class="mb-4">
                                <a href="tel:+912345678900">+91-234-567-8900</a>
                            </li>
                            <li>
                                <p class="mb-0">Working Hours: 9:00am - 8:00pm</p>
                            </li>
                        </ul>
                    </div>--}}
                </div>
            </div>
        </div>
        <div class="secondary-footer text-center">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12"><span class="text-white">استفاده از مطالب فروشگاه اینترنتی <a
                                        target="_blank" href=""> گلابسرا </a> فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به فروشگاه آنلاین <a
                                        target="_blank" href=""> گلابسرا </a> می‌باشد.
                                 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--footer end-->


</div>

<!-- page wrapper end -->


<!--color-customizer start-->

{{--
<div class="color-customizer closed">
    <div class="color-button">
        <a class="opener" href="#"> <i class="fas fa-spinner fa-spin"></i>
        </a>
    </div>
    <div class="clearfix color-chooser text-center">
        <h4 class="text-theme font-w-8 mb-4">Oveltyshop <span class="text-black font-w-5">Awesome Colors</span></h4>
        <ul class="colorChange clearfix">
            <li class="theme-default selected" title="theme-default" data-style="theme-default"></li>
            <li class="theme-mediumseagreen" title="theme-mediumseagreen" data-style="theme-mediumseagreen"></li>
            <li class="theme-orange" title="theme-orange" data-style="theme-orange"></li>
            <li class="theme-blue" title="theme-blue" data-style="theme-blue"></li>
            <li class="theme-yellow" title="theme-yellow" data-style="theme-yellow"></li>
        </ul>
        <div class="text-center mt-4"><a class="btn-theme btn" href="#"><span>Purchase Now</span></a>
        </div>
    </div>
</div>
--}}

<!--color-customizer end-->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="fas fa-angle-double-up"></i></a></div>

<!--back-to-top end-->


<!-- inject js start -->

<!--== jquery -->
<script src="{{mix ('js/all.js')}}"></script>


<!-- inject js end -->

</body>

</html>
