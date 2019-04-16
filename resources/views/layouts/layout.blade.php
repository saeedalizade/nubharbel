<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>گلاب سرا</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png')}}" />

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bundle.css') }}" />
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<!-- Add your site or application content here -->


<!--header area start-->
<header class="header_area">
    <!--header top start-->
    <div class="header_top top_three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="top_right text-right">
                        <ul>
                            <li class="top_links"><a href="#">پروفایل من <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="./wishlist.html">My Wish List </a></li>
                                    <li><a href="./my-account.html">My Account </a></li>
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="#">Compare Products  </a></li>
                                </ul>
                            </li>
                            {{--<li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>--}}
                            {{--<ul class="dropdown_currency">--}}
                            {{--<li><a href="#">EUR</a></li>--}}
                            {{--<li><a href="#">BRL</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="language"><a href="#"><img src="{{asset ('img/logo/language.png')}}" alt="" /> English <i class="ion-chevron-down"></i></a>--}}
                            {{--<ul class="dropdown_language">--}}
                            {{--<li><a href="#"><img src="{{asset ('img/logo/cigar.jpg')}}" alt="" /> French</a></li>--}}
                            {{--<li><a href="#"><img src="{{asset ('img/logo/language2.png')}}" alt="" />German</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="welcome_text">
                        <p>عطر و گلاب و عرقیات کاشان ،کاملا ارگانیک</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->
    <div class="header_middel middel_three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3">
                    <div class="cart_area">
                        <div class="wishlist_link">
                            <a href="#"><i class="ion-ios-heart-outline"></i></a>
                        </div>
                        <div class="cart_link">
                            <a href="#"><i class="ion-ios-cart-outline"></i>My Cart</a>
                            <span class="cart_count">2</span>
                            <!--mini cart-->
                            <div class="mini_cart">
                                <div class="items_nunber">
                                    <span>2 Items in Cart</span>
                                </div>
                                <div class="cart_button checkout">
                                    <a href="./checkout.html">Proceed to Checkout</a>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="./assets/img/cart/cart1.jpg" alt="" /></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Mr.Coffee 12-Cup</a>
                                        <form action="#" />
                                        <input min="0" max="100" type="number" />
                                        <span>$60.00</span>
                                        </form>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="./assets/img/cart/cart2.jpg" alt="" /></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Lid Cover Cookware</a>
                                        <form action="#" />
                                        <input min="0" max="100" type="number" />
                                        <span>$160.00</span>
                                        </form>
                                    </div>
                                </div>
                                <div class="cart_button view_cart">
                                    <a href="#">View and Edit Cart</a>
                                </div>
                            </div>
                            <!--mini cart end-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="main_menu_inner">
                        <div class="main_menu d-none d-lg-block">
                            <ul class="text-center">
                                <li class="active"><a href="./index.html">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu">
                                        <li><a href="./index.html">Home 1</a></li>
                                        <li><a href="./index-2.html">Home 2</a></li>
                                        <li><a href="./index-3.html">Home 3</a></li>
                                        <li><a href="./index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="./shop.html">shop <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega_menu">
                                        <li><a href="#">Shop Layouts</a>
                                            <ul>
                                                <li><a href="./shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="./shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="./shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="./shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="./shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">other Pages</a>
                                            <ul>
                                                <li><a href="./portfolio.html">portfolio</a></li>
                                                <li><a href="./portfolio-details.html">portfolio details</a></li>
                                                <li><a href="./cart.html">cart</a></li>
                                                <li><a href="./checkout.html">Checkout</a></li>
                                                <li><a href="./my-account.html">my account</a></li>


                                            </ul>
                                        </li>
                                        <li><a href="#">Product Types</a>
                                            <ul>
                                                <li><a href="./product-details.html">product details</a></li>
                                                <li><a href="./product-sidebar.html">product sidebar</a></li>
                                                <li><a href="./product-gallery.html">product gallery</a></li>
                                                <li><a href="./product-slider.html">product slider</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega_menu">
                                        <li><a href="#">Blog Layouts</a>
                                            <ul>

                                                <li><a href="./blog-details.html">blog details</a></li>
                                                <li><a href="./blog-sidebar.html">blog  Sidebar</a></li>
                                                <li><a href="./blog-fullwidth.html">blog fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">blog Pages</a>
                                            <ul>
                                                <li><a href="#">Author</a></li>
                                                <li><a href="./blog-sidebar.html">Category</a></li>
                                                <li><a href="#">Blog tag</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Post Formats</a>
                                            <ul>
                                                <li><a href="./blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="./blog-fullwidth.html">blog fullwidth</a></li>
                                                <li><a href="./blog-sidebar.html">Gallery Format</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="./about.html">About Us</a></li>
                                        <li><a href="./services.html">services</a></li>
                                        <li><a href="./faq.html">Frequently Questions</a></li>
                                        <li><a href="./login.html">login</a></li>
                                        <li><a href="./my-account.html">my account</a></li>
                                        <li><a href="./wishlist.html">Wishlist</a></li>
                                        <li><a href="./404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact Us</a></li>
                            </ul>

                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="logo">
                        <a href="./index.html"><img src="{{asset ('img/logo/logo3.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--header bottom satrt-->
    <div class="header_bottom bottom_three">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle"> All categories</h2>
                        </div>
                        <div class="categories_menu_inner">
                            <ul>
                                <li class="categorie_list"><a href="#">Laptop & Computer <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu">
                                        <li><a href="#">Headphoness</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Dell Laptops</a></li>
                                                    <li><a href="./index-3.html">HP Laptops</a></li>
                                                    <li><a href="./index-3.html">Lenovo Laptops</a></li>
                                                    <li><a href="./index-3.html">Apple Laptops</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Laptop & Computers</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Digital Cameras</a></li>
                                                    <li><a href="./index-3.html">Camcorders</a></li>
                                                    <li><a href="./index-3.html">Photo Accessories</a></li>
                                                    <li><a href="./index-3.html">Memory Cards</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Camera & Photos</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Apple Phones</a></li>
                                                    <li><a href="./index-3.html">Samsung Phones</a></li>
                                                    <li><a href="./index-3.html">Motorola Phones</a></li>
                                                    <li><a href="./index-3.html">Lenovo Phones</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><img src="./assets/img/categorie/categorie.png" alt="" /></li>



                                    </ul>
                                </li>
                                <li><a href="#"> Fashion  <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu">
                                        <li><a href="#">Dresses</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Sweater</a></li>
                                                    <li><a href="./index-3.html">Evening</a></li>
                                                    <li><a href="./index-3.html">Day</a></li>
                                                    <li><a href="./index-3.html">Sports</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Handbags</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Shoulder</a></li>
                                                    <li><a href="./index-3.html">Satchels</a></li>
                                                    <li><a href="./index-3.html">kids</a></li>
                                                    <li><a href="./index-3.html">coats</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">shoes</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Ankle Boots</a></li>
                                                    <li><a href="./index-3.html">Clog sandals </a></li>
                                                    <li><a href="./index-3.html">run</a></li>
                                                    <li><a href="./index-3.html">Books</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Clothing</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Coats  Jackets </a></li>
                                                    <li><a href="./index-3.html">Raincoats</a></li>
                                                    <li><a href="./index-3.html">Jackets</a></li>
                                                    <li><a href="./index-3.html">T-shirts</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#"> Furnitured & Decor <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu column_3">
                                        <li><a href="#">Chair</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Dining room</a></li>
                                                    <li><a href="./index-3.html">bedroom</a></li>
                                                    <li><a href="./index-3.html"> Home & Office</a></li>
                                                    <li><a href="./index-3.html">living room</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Lighting</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Ceiling Lighting</a></li>
                                                    <li><a href="./index-3.html">Wall Lighting</a></li>
                                                    <li><a href="./index-3.html">Outdoor Lighting</a></li>
                                                    <li><a href="./index-3.html">Smart Lighting</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Sofa</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Fabric Sofas</a></li>
                                                    <li><a href="./index-3.html">Leather Sofas</a></li>
                                                    <li><a href="./index-3.html">Corner Sofas</a></li>
                                                    <li><a href="./index-3.html">Sofa Beds</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"> Toys & Hobbies <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu column_2">
                                        <li><a href="#">Boys' Toys</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Building Toys</a></li>
                                                    <li><a href="./index-3.html">Electronics Toys</a></li>
                                                    <li><a href="./index-3.html">action figures </a></li>
                                                    <li><a href="./index-3.html">specialty & boutique toy</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Girls' Toys</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="./index-3.html">Dolls for Girls</a></li>
                                                    <li><a href="./index-3.html">Girls' Learning Toys</a></li>
                                                    <li><a href="./index-3.html">Arts and Crafts for Girls</a></li>
                                                    <li><a href="./index-3.html">Video Games for Girls</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#"> Accessories</a></li>
                                <li><a href="#"> Jewelry & Watches</a></li>
                                <li><a href="#"> Health & Beauty</a></li>
                                <li><a href="#">Books & Office</a></li>
                                <li><a href="#"> Sport & Outdoor</a></li>
                                <li id="cat_toggle" class="has-sub"><a href="#"> More Categories</a>
                                    <ul class="categorie_sub">
                                        <li><a href="#"> Computer - Laptop</a></li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="mobile-menu mobail_menu_three d-lg-none">
                        <nav>
                            <ul>
                                <li><a href="./index.html">Home</a>
                                    <ul>
                                        <li><a href="./index.html">Home 1</a></li>
                                        <li><a href="./index-2.html">Home 2</a></li>
                                        <li><a href="./index-3.html">Home 3</a></li>
                                        <li><a href="./index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="./shop.html">shop</a>
                                    <ul>
                                        <li><a href="#">Shop Layouts</a>
                                            <ul>
                                                <li><a href="./shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="./shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="./shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="./shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="./shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">other Pages</a>
                                            <ul>
                                                <li><a href="./portfolio.html">portfolio</a></li>
                                                <li><a href="./portfolio-details.html">portfolio details</a></li>
                                                <li><a href="./cart.html">cart</a></li>
                                                <li><a href="./checkout.html">Checkout</a></li>
                                                <li><a href="./my-account.html">my account</a></li>


                                            </ul>
                                        </li>
                                        <li><a href="#">Product Types</a>
                                            <ul>
                                                <li><a href="./product-details.html">product details</a></li>
                                                <li><a href="./product-sidebar.html">product sidebar</a></li>
                                                <li><a href="./product-gallery.html">product gallery</a></li>
                                                <li><a href="./product-slider.html">product slider</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">blog</a>
                                    <ul>
                                        <li><a href="#">Blog Layouts</a>
                                            <ul>

                                                <li><a href="./blog-details.html">blog details</a></li>
                                                <li><a href="./blog-sidebar.html">blog  Sidebar</a></li>
                                                <li><a href="./blog-fullwidth.html">blog fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">blog Pages</a>
                                            <ul>
                                                <li><a href="#">Author</a></li>
                                                <li><a href="./blog-sidebar.html">Category</a></li>
                                                <li><a href="#">Blog tag</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Post Formats</a>
                                            <ul>
                                                <li><a href="./blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="./blog-fullwidth.html">blog fullwidth</a></li>
                                                <li><a href="./blog-sidebar.html">Gallery Format</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="./about.html">About Us</a></li>
                                        <li><a href="./services.html">services</a></li>
                                        <li><a href="./faq.html">Frequently Questions</a></li>
                                        <li><a href="./login.html">login</a></li>
                                        <li><a href="./my-account.html">my account</a></li>
                                        <li><a href="./wishlist.html">Wishlist</a></li>
                                        <li><a href="./404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="search_bar ">
                        <form action="#" />
                        <input placeholder="Search entire store here..." type="text" class="text-right" />
                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="contact_phone">
                        <div class="contact_number">
                            <p>Call Us:</p>
                            <span>(999) 1234 56789</span>
                        </div>
                        <div class="contact_icone">
                            <span class="pe-7s-headphones"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header bottom end-->
</header>
<!--header area end-->


@yield('content')
<!--footer area start-->
<div class="footer_area footer_three">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-8">
                    <div class="single_footer">
                        <div class="footer_logo">
                            <a href="#"><img src="./assets/img/logo/logo3.png" alt="" /></a>
                        </div>
                        <div class="footer_desc">
                            <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                        </div>
                        <div class="footer_contact">
                            <ul>
                                <li><i class="ion-location"></i> Ullenhall, Henley-in-Arden B578 5CC, England</li>
                                <li><i class="ion-ios-telephone"></i> +123.456.789 - +123.456.678/li>
                                </li><li><i class="ion-ios-email"></i> <a href="#">support@plazathemes.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="single_footer">
                        <h3>CUSTOMER SERVICE</h3>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Unsubscribe</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="single_footer">
                        <h3>Information</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Warranty</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="single_footer">
                        <h3>instagram</h3>
                        <div class="instagram_active owl-carousel">
                            <div class="instagram_items">
                                <div class="instagram_list">
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram1.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram1.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram2.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram2.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram3.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram3.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram4.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram4.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="instagram_list">
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram5.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram5.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram6.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram6.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram7.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram7.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram8.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram8.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="instagram_items">
                                <div class="instagram_list">
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram1.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram1.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>

                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram2.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram2.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram3.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram3.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram4.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram4.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="instagram_list">
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram5.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram5.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram6.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram6.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram7.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram7.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="./assets/img/instagram/instagram8.jpg" alt="" /></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="./assets/img/instagram/instagram8.jpg"><i class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-12">
                    <div class="tag_block">
                        <ul>
                            <li><a href="#">Online Shopping</a></li>
                            <li><a href="#">Promotions</a></li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Most Populars</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Special Products</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Our Stores</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Warantee</a></li>
                            <li><a href="#">Refunds</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Refunds</a></li>
                        </ul>
                    </div>
                    <div class="footer_social">
                        <ul>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_content">
                        <p>Copyright &copy; 2018, <a href="#">Cigar</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-payment text-right">
                        <a href="#"><img src="./assets/img/visha/payment.png" alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--footer area end-->


<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./assets/img/product/product44.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./assets/img/product/product45.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./assets/img/product/product46.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./assets/img/product/product47.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="./assets/img/cart/cart5.jpg" alt="" /></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="./assets/img/cart/cart6.jpg" alt="" /></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="./assets/img/cart/cart7.jpg" alt="" /></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="./assets/img/cart/cart8.jpg" alt="" /></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>Handbag feugiat</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">$64.99</span>
                                    <span class="old_price">$78.99</span>
                                </div>
                                <div class="modal_content mb-10">
                                    <p>Short-sleeved blouse with feminine draped sleeve detail.</p>
                                </div>
                                <div class="modal_size mb-15">
                                    <h2>size</h2>
                                    <ul>
                                        <li><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">xxl</a></li>
                                    </ul>
                                </div>
                                <div class="modal_add_to_cart mb-15">
                                    <form action="#" />
                                    <input min="0" max="100" step="2" value="1" type="number" />
                                    <button type="submit">add to cart</button>
                                    </form>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area start-->

<!--news letter popup start-->
{{--<div class="newsletter_popup newsletter_popup_three ">--}}
    {{--<div class="popup_container">--}}
        {{--<div class="popup_close">--}}
            {{--<span>close</span>--}}
        {{--</div>--}}
        {{--<div class="popup_text">--}}
            {{--<h2>Subscribe to our Newsletter</h2>--}}
            {{--<p>Subscribe to the Pebona mailing list to receive updates on new arrivals, special offers and other discount information.</p>--}}
            {{--<form action="#" />--}}
            {{--<input placeholder="Enter your email address" type="text" />--}}
            {{--<button type="submit">Subscribe</button>--}}
            {{--</form>--}}
        {{--</div>--}}
        {{--<div class="popup_footer">--}}
            {{--<form action="#" />--}}
            {{--<input id="check_newsletter" class="form_check" type="checkbox" />--}}
            {{--<span class="checkmark"></span>--}}
            {{--<label class="form_check" for="check_newsletter">Don't show this popup again</label>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!--news letter popup start-->



<!-- all js here -->
<script src="{{asset ('js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset ('js/popper.js')}}"></script>
<script src="{{asset ('js/bootstrap.min.js')}}"></script>
<script src="{{asset ('js/plugins.js')}}"></script>
<script src="{{asset ('js/main.js')}}"></script>
</body>
</html>
