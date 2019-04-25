<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="HTML5 Template" />
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Oveltyshop - ECommerce Responsive HTML5 Template</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="{{ mix ('css/all.css') }}" rel="stylesheet" type="text/css" />



    <!-- inject css end -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="loader clear-loader"><img src="{{asset('img/loader.gif')}}" alt="" class="loader-img"  /></div>
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
                                <li class="list-inline-item"><span>Email</span><a href="mailto:htinfotech7@gmail.com">htinfotech7@gmail.com</a>
                                </li>
                                <li class="list-inline-item"><span>Call Us</span><a href="tel:+912345678900">+91-234-567-8900</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 text-md-left">
                        <div class="topbar-right">
                            <ul class="topbar-menu">
                                <!-- Currency / Language / My Account -->
                                <li class="currency">
                                    <div class="currency-selection">
                                        <select>
                                            <option value="1" />Usd
                                            <option value="2" />cad
                                            <option value="3" />aud
                                            <option value="4" />eur
                                        </select>
                                    </div>
                                </li>
                                <li class="language">
                                    <div class="language-selection">
                                        <select>
                                            <option value="1" />English
                                            <option value="2" />French
                                            <option value="3" />Italian
                                            <option value="4" />German
                                        </select>
                                    </div>
                                </li>
                                <li><a href="./login.html">Sign In</a></li>
                                <li><a href="./register.html">Register</a></li>
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
                            <a class="navbar-brand logo" href="./index.html">
                                <img id="logo-img" class="img-center" src="{{asset('img/logo.png')}}" alt="" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <!-- Left nav -->
                                <ul class="nav navbar-nav ml-auto mr-auto">
                                    <li class="nav-item active dropdown"> <a class="nav-link dropdown-toggle" href="#"><span class="menu-label">Home</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./index.html">Home 1</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./index-2.html">Home 2</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./index-3.html">Home 3</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./index-4.html">Home 4</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./index-sidemenu.html">Home 5</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./index-furniture.html">Home 6</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-label">Pages</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./product-wishlist.html">Wishlist</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./checkout.html">Checkout</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./order-complete.html">Order Complete</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./login.html">Login</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./register.html">Register</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./error-404.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown fullwidth">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-label">Categories</span>
                                        </a>
                                        <ul class="dropdown-menu grid-12">
                                            <li class="container">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="nav flex-column">
                                                            <li class="menu-title">Women's Collection</li>
                                                            <li><a class="dropdown-item" href="./product.html">Dresses</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Blouses</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Shirts</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">T-shirts</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Bras &amp; Panties</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col-md-4  -->
                                                    <div class="col-md-4">
                                                        <ul class="nav flex-column">
                                                            <li class="menu-title">Men's Collection</li>
                                                            <li><a class="dropdown-item" href="./product.html">T-Shirts</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Jeans</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Shirts</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Jackets</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Trench</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col-md-4  -->
                                                    <div class="col-md-4">
                                                        <ul class="nav flex-column">
                                                            <li class="menu-title">Kids's Collection</li>
                                                            <li><a class="dropdown-item" href="./product.html">Dresses</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Shirts</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">T-shirts</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Jackets</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="./product.html">Jeans</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--  /.container  -->
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#"><span class="menu-label">Shop</span></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">Product</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="./product-left-sidebar.html">Left Sidebar</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="./product-right-sidebar.html">Right Sidebar</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="./product.html">Fullwidth</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">Product Grid</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="./product-grid-2.html">Grid 2</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="./product-grid-3.html">Grid 3</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="./product-grid-left-sidebar.html">Grid Left Sidebar</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="./product-grid-right-sidebar.html">Grid Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">Product Single</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="./product-details.html">Product Single 1</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="./product-details-2.html">Product Single 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a class="dropdown-item" href="./product-cart.html">Product Cart</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#"><span class="menu-label">Blog</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./blog.html">Blog</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./blog-masonry.html">Blog masonry</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./blog-single.html">Blog Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#"><span class="menu-label">Contact Us</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./contact-1.html">Contact 1</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./contact-2.html">Contact 2</a>
                                            </li>
                                        </ul>
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
                                    <div class="cart"> <a href="#" id="header-cart-btn"><span class="cart-badge">2</span> <i class="ti-bag"></i></a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="image">
                                                    <img src="{{asset('img/product-thumb/01.jpg')}}" class="img-fluid cart-thumb" alt="" />
                                                </a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$35</span>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="image">
                                                    <img src="{{asset('img/product-thumb/02.jpg')}}" class="img-fluid cart-thumb" alt="" />
                                                </a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$75</span>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="total text-right"> <span class="d-block">Total: $110.00</span>
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
        <button id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="flaticon-cancel"></i>
        </button>
        <form class="search-form" />
        <input class="search-input" name="search" type="search" placeholder="drones" /> <span class="search-info">Hit enter to search or ESC to close</span>
        </form>
    </div>



@yield('content')

<!--footer start-->

    <footer class="footer dark-bg">
        <div class="primary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-list">
                        <h5>Information</h5>
                        <ul class="list-unstyled">
                            <li><a href="./product.html">Top Sellers</a>
                            </li>
                            <li><a href="./product.html">New Product</a>
                            </li>
                            <li><a href="#">Delivery information</a>
                            </li>
                            <li><a href="./terms-and-conditions.html">Terms & Conditions</a>
                            </li>
                            <li><a href="#">Special</a>
                            </li>
                            <li><a href="#">Help Center</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-mt-5 footer-list">
                        <h5>Customer Service</h5>
                        <ul class="list-unstyled">
                            <li><a href="./order-tracking.html">Order Tracking</a>
                            </li>
                            <li><a href="./contact-1.html">Help & Contact</a>
                            </li>
                            <li><a href="./product.html">Career</a>
                            </li>
                            <li><a href="./return-policy.html">Returns Policy</a>
                            </li>
                            <li><a href="#">Product Support</a>
                            </li>
                            <li><a href="#">Legal Notice</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mt-5 footer-list">
                        <h5>My Account</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">My Account</a>
                            </li>
                            <li><a href="#">Personal Information</a>
                            </li>
                            <li><a href="#">Order History</a>
                            </li>
                            <li><a href="#">Address</a>
                            </li>
                            <li><a href="./product-wishlist.html">Wish List</a>
                            </li>
                            <li><a href="#">Newsletter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mt-5">
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
                    </div>
                </div>

                <div class="row client-logo mt-10">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme no-pb" data-dots="false" data-items="5" data-md-items="4" data-sm-items="3" data-margin="30" data-autoplay="true">
                            <div class="item">
                                <img class="img-center" src="{{asset('img/client/01.png')}}" alt="" />
                            </div>
                            <div class="item">
                                <img class="img-center" src="{{asset('img/client/01.png')}}" alt="" />
                            </div>
                            <div class="item">
                                <img class="img-center" src="{{asset('img/client/01.png')}}" alt="" />
                            </div>
                            <div class="item">
                                <img class="img-center" src="{{asset('img/client/01.png')}}/" alt="" />
                            </div>
                            <div class="item">
                                <img class="img-center" src="{{asset('img/client/01.png')}}" alt="" />
                            </div>
                            <div class="item">
                                <img class="img-center" src="{{asset('img/client/01.png')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-footer text-center">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12"> <span class="text-white">Copyright 2018 Oveltyshop Theme by <a target="_blank" href="www.themeht.com"> ThemeHt </a> | All Rights Reserved</span>
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
