<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.png') }}" />
    <title>Elegant Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('admin/node_modules/morrisjs/morris.css') }}" rel="stylesheet" />
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('admin/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet" />
    <!--c3 plugins CSS -->
    <link href="{{ asset('admin/node_modules/c3-master/c3.min.css') }}" rel="stylesheet" />

    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('admin/css/pages/dashboard1.css') }}" rel="stylesheet" />

    <link href="{{ asset('admin/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/node_modules/switchery/dist/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/node_modules/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/node_modules/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('admin/node_modules/dropify/dist/css/dropify.min.css')}}" />
    <link href="{{ asset('admin/node_modules/bootstrap-switch/bootstrap-switch.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/css/pages/bootstrap-switch.css')}}" rel="stylesheet" />
    {{--start js file--}}
    <script src="{{ asset('admin/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.validate.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('admin/node_modules/popper/popper.min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/dropify/dist/js/dropify.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- This is data table -->
    <script src="{{asset('admin/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="{{asset('admin/node_modules/datatables/cdn/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/datatables/cdn/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/datatables/cdn/jszip.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/datatables/cdn/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/datatables/cdn/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/node_modules/datatables/cdn/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/datatables/cdn/buttons.print.min.js')}}"></script>
    <!--morris JavaScript -->
    <script src="{{ asset('admin/node_modules/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/morrisjs/morris.min.js')}}"></script>
    <script src="{{ asset('admin/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{ asset('admin/node_modules/d3/d3.min.js')}}"></script>
    <script src="{{ asset('admin/node_modules/c3-master/c3.min.js') }}"></script>
    <!-- Popup message jquery -->
    <script src="{{ asset('admin/node_modules/toast-master/js/jquery.toast.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('admin/js/dashboard1.js') }}"></script>
    <!--bootstrap-switch-->
    <script src="{{ asset('admin/node_modules/bootstrap-switch/bootstrap-switch.min.js')}}"></script>
    <script src="{{ asset('admin/node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('admin/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('admin/node_modules/multiselect/js/jquery.multi-select.js')}}"></script>

    <script src='https://www.google.com/recaptcha/api.js?render=6Lfln4UUAAAAAA3QJbrY3bs9fyc2yepZ-Lih3C5O'></script>

    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lfln4UUAAAAAA3QJbrY3bs9fyc2yepZ-Lih3C5O', {action: 'checkLogin'})
                .then(function(token) {
// Verify the token on the server.
                });
        });
    </script>
    </head>
<body class="skin-purple-dark fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elegant admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="./index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{ asset('admin/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{ asset('admin/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{ asset('admin/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                         <img src="{{ asset('admin/images/logo-light-text.png') }}" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="./index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox animated bounceInDown">
                            <span class="with-arrow"><span class="bg-primary"></span></span>
                            <ul>
                                <li>
                                    <div class="drop-title bg-primary text-white">
                                        <h4 class="m-b-0 m-t-5">4 New</h4>
                                        <span class="font-light">Notifications</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center m-b-5" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="./index.html" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                            <span class="with-arrow"><span class="bg-danger"></span></span>
                            <ul>
                                <li>
                                    <div class="drop-title text-white bg-danger">
                                        <h4 class="m-b-0 m-t-5">5 New</h4>
                                        <span class="font-light">Messages</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{ asset('admin/images/users/1.jpg') }}" alt="user" class="img-circle" /> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{ asset('admin/images/users/2.jpg') }}" alt="user" class="img-circle" /> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{ asset('admin/images/users/3.jpg') }}" alt="user" class="img-circle" /> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{ asset('admin/images/users/4.jpg') }}" alt="user" class="img-circle" /> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link m-b-5" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search" />
                        <input type="text" class="form-control" placeholder="Search &amp; enter" /> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="./index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
                        <div class="dropdown-menu animated bounceInDown">
                            <ul class="mega-dropdown-menu row">
                                <li class="col-lg-3 col-xlg-2 m-b-30">
                                    <h4 class="m-b-20">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="container"> <img class="d-block img-fluid" src="{{ asset('admin/images/big/img1.jpg') }}" alt="First slide" /></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container"><img class="d-block img-fluid" src="{{  asset('admin/images/big/img2.jpg') }}" alt="Second slide" /></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container"><img class="d-block img-fluid" src="{{  asset('admin/images/big/img3.jpg') }}" alt="Third slide" /></div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </li>
                                <li class="col-lg-3 m-b-30">
                                    <h4 class="m-b-20">ACCORDION</h4>
                                    <!-- Accordian -->
                                    <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Collapsible Group Item #1
                                                    </a>
                                                </h5> </div>
                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Collapsible Group Item #2
                                                    </a>
                                                </h5> </div>
                                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                    </a>
                                                </h5> </div>
                                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3  m-b-30">
                                    <h4 class="m-b-20">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form />
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name" /> </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter email" /> </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </li>
                                <li class="col-lg-3 col-xlg-4 m-b-30">
                                    <h4 class="m-b-20">List style</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="./index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('admin/images/users/1.jpg') }}" alt="user" class="img-circle" width="30" /></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <span class="with-arrow"><span class="bg-primary"></span></span>
                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                <div class=""><img src="{{ asset('admin/images/users/1.jpg') }}" alt="user" class="img-circle" width="60" /></div>
                                <div class="m-l-10">
                                    <h4 class="m-b-0">Steave Jobs</h4>
                                    <p class=" m-b-0">varun@gmail.com</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('admin/Logout') }}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <div class="d-flex no-block nav-text-box align-items-center">
            <span><img src="{{ asset('admin/images/logo-icon.png') }}" alt="elegant admin template" /></span>
            <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
            <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard <span class="badge badge-pill badge-cyan">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./index.html">Minimal <i class="fa fa-circle-o text-success"></i></a></li>
                            <li><a href="./index2.html">Analytical <i class="fa fa-circle-o text-info"></i></a></li>
                            <li><a href="./index3.html">Demographical <i class="fa fa-circle-o text-danger"></i></a></li>
                            <li><a href="./index4.html">Modern <i class="fa fa-circle-o text-warning"></i></a></li>
                            <li><a href="./index5.html">Cryptocurrency <i class="fa fa-circle-o text-primary"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./app-calendar.html">Calendar <i class="ti-calendar"></i></a></li>
                            <li><a href="./app-chat.html">Chat app <i class="ti-comment"></i></a></li>
                            <li><a href="./app-ticket.html">Support Ticket <i class="ti-support"></i></a></li>
                            <li><a href="./app-contact.html">Contact / Employee <i class="ti-user"></i></a></li>
                            <li><a href="./app-contact2.html">Contact Grid <i class=" ti-list"></i></a></li>
                            <li><a href="./app-contact-detail.html">Contact Detail <i class="ti-pencil-alt"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./app-email.html">Mailbox <i class="icon-envelope-open"></i></a></li>
                            <li><a href="./app-email-detail.html">Mailbox Detail <i class="ti-layout-media-left-alt"></i></a></li>
                            <li><a href="./app-compose.html">Compose Mail <i class="icon-note"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span class="badge badge-pill badge-primary text-white">25</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./ui-cards.html">Cards <i class="ti-layers-alt"></i></a></li>
                            <li><a href="./ui-user-card.html">User Cards <i class="ti-user"></i></a></li>
                            <li><a href="./ui-buttons.html">Buttons <i class="ti-layout-menu"></i></a></li>
                            <li><a href="./ui-modals.html">Modals <i class="ti-layout-slider-alt"></i></a></li>
                            <li><a href="./ui-tab.html">Tab <i class="ti-layout-tab-min"></i></a></li>
                            <li><a href="./ui-tooltip-popover.html">Tooltip &amp; Popover <i class="ti-pin2"></i></a></li>
                            <li><a href="./ui-tooltip-stylish.html">Tooltip stylish <i class="ti-themify-favicon"></i></a></li>
                            <li><a href="./ui-sweetalert.html">Sweet Alert <i class="ti-comments-smiley"></i></a></li>
                            <li><a href="./ui-notification.html">Notification <i class="ti-alert"></i></a></li>
                            <li><a href="./ui-progressbar.html">Progressbar <i class="ti-layout-list-post"></i></a></li>
                            <li><a href="./ui-nestable.html">Nestable <i class="ti-layout-accordion-separated"></i></a></li>
                            <li><a href="./ui-range-slider.html">Range slider <i class="ti-layout-slider-alt"></i></a></li>
                            <li><a href="./ui-timeline.html">Timeline <i class="ti-dashboard"></i></a></li>
                            <li><a href="./ui-typography.html">Typography <i class="ti-more-alt"></i></a></li>
                            <li><a href="./ui-horizontal-timeline.html">Horizontal Timeline <i class="ti-layout-list-thumb"></i></a></li>
                            <li><a href="./ui-session-timeout.html">Session Timeout <i class="ti-na"></i></a></li>
                            <li><a href="./ui-session-ideal-timeout.html">Session Ideal Timeout <i class="ti-time"></i></a></li>
                            <li><a href="./ui-bootstrap.html">Bootstrap Ui <i class="ti-rocket"></i></a></li>
                            <li><a href="./ui-breadcrumb.html">Breadcrumb <i class="icon-directions"></i></a></li>
                            <li><a href="./ui-bootstrap-switch.html">Bootstrap Switch <i class="ti-flickr"></i></a></li>
                            <li><a href="./ui-list-media.html">List Media <i class="icon-grid"></i></a></li>
                            <li><a href="./ui-ribbons.html">Ribbons <i class="ti-medall"></i></a></li>
                            <li><a href="./ui-grid.html">Grid <i class="ti-layout-grid3-alt"></i></a></li>
                            <li><a href="./ui-carousel.html">Carousel <i class="ti-layout-slider"></i></a></li>
                            <li><a href="./ui-date-paginator.html">Date-paginator <i class="icon-calender"></i></a></li>
                            <li><a href="./ui-dragable-portlet.html">Dragable Portlet <i class="ti-move"></i></a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./form-basic.html">Basic Forms <i class="ti-file"></i></a></li>
                            <li><a href="./form-layout.html">Form Layouts <i class="ti-files"></i></a></li>
                            <li><a href="./form-addons.html">Form Addons <i class="ti-zip"></i></a></li>
                            <li><a href="./form-material.html">Form Material <i class="ti-agenda"></i></a></li>
                            <li><a href="./form-float-input.html">Floating Lable <i class="ti-receipt"></i></a></li>
                            <li><a href="./form-pickers.html">Form Pickers <i class="ti-write"></i></a></li>
                            <li><a href="./form-upload.html">File Upload <i class="ti-upload"></i></a></li>
                            <li><a href="./form-mask.html">Form Mask <i class="ti-layers"></i></a></li>
                            <li><a href="./form-validation.html">Form Validation <i class="icon-info"></i></a></li>
                            <li><a href="./form-dropzone.html">File Dropzone <i class="ti-layout-sidebar-2"></i></a></li>
                            <li><a href="./form-icheck.html">Icheck control <i class="icon-eye"></i></a></li>
                            <li><a href="./form-img-cropper.html">Image Cropper <i class="icon-crop"></i></a></li>
                            <li><a href="./form-bootstrapwysihtml5.html">HTML5 Editor <i class="ti-html5"></i></a></li>
                            <li><a href="./form-typehead.html">Form Typehead <i class="ti-text"></i></a></li>
                            <li><a href="./form-wizard.html">Form Wizard <i class="ti-new-window"></i></a></li>
                            <li><a href="./form-xeditable.html">Xeditable Editor <i class="ti-palette"></i></a></li>
                            <li><a href="./form-summernote.html">Summernote Editor <i class="ti-pin2"></i></a></li>
                            <li><a href="./form-tinymce.html">Tinymce Editor <i class="ti-text"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./table-basic.html">Basic Tables <i class="ti-widgetized"></i></a></li>
                            <li><a href="./table-layout.html">Table Layouts <i class="ti-layout-accordion-list"></i></a></li>
                            <li><a href="./table-data-table.html">Data Tables <i class="ti-widget"></i></a></li>
                            <li><a href="./table-footable.html">Footable <i class="ti-layout-accordion-merged"></i></a></li>
                            <li><a href="./table-jsgrid.html">Js Grid Table <i class="ti-layout-placeholder"></i></a></li>
                            <li><a href="./table-responsive.html">Responsive Table <i class="ti-layout-accordion-separated"></i></a></li>
                            <li><a href="./table-bootstrap.html">Bootstrap Tables <i class="ti-layout"></i></a></li>
                            <li><a href="./table-editable-table.html">Editable Table <i class="ti-pencil-alt"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./widget-data.html">Data Widgets <i class="icon-puzzle"></i></a></li>
                            <li><a href="./widget-apps.html">Apps Widgets <i class="icon-drawar"></i></a></li>
                            <li><a href="./widget-charts.html">Charts Widgets <i class="ti-bar-chart-alt"></i></a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Page Layout</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./layout-single-column.html">1 Column <i class="ti-layout-menu-separated"></i></a></li>
                            <li><a href="./layout-fix-header.html">Fix header <i class="mdi mdi-page-layout-header"></i></a></li>
                            <li><a href="./layout-fix-sidebar.html">Fix sidebar <i class="mdi mdi-page-layout-sidebar-left"></i></a></li>
                            <li><a href="./layout-fix-header-sidebar.html">Fixe header &amp; Sidebar <i class="ti-agenda"></i></a></li>
                            <li><a href="./layout-boxed.html">Boxed Layout <i class="mdi mdi-page-layout-body"></i></a></li>
                            <li><a href="./layout-logo-center.html">Logo in Center <i class="icon-size-actual"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span class="badge badge-pill badge-info">25</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./starter-kit.html">Starter Kit <i class="ti-layout-width-default"></i></a></li>
                            <li><a href="./pages-blank.html">Blank page <i class="mdi mdi-content-copy"></i></a></li>
                            <li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge badge-pill badge-success pull-right">6</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="./pages-login.html">Login 1 <i class="ti-lock"></i></a></li>
                                    <li><a href="./pages-login-2.html">Login 2 <i class="icon-user-following"></i></a></li>
                                    <li><a href="./pages-register.html">Register <i class="ti-marker-alt"></i></a></li>
                                    <li><a href="./pages-register2.html">Register 2 <i class="ti-marker"></i></a></li>
                                    <li><a href="./pages-register3.html">Register 3 <i class="ti-marker-alt"></i></a></li>
                                    <li><a href="./pages-lockscreen.html">Lockscreen <i class="icon-lock"></i></a></li>
                                    <li><a href="./pages-recover-password.html">Recover password <i class="icon-lock-open"></i></a></li>
                                </ul>
                            </li>
                            <li><a href="./pages-profile.html">Profile page <i class="ti-id-badge"></i></a></li>
                            <li><a href="./pages-animation.html">Animation <i class="ti-video-clapper"></i></a></li>
                            <li><a href="./pages-fix-innersidebar.html">Sticky Left sidebar <i class="ti-layout-sidebar-left"></i></a></li>
                            <li><a href="./pages-fix-inner-right-sidebar.html">Sticky Right sidebar <i class="ti-layout-sidebar-right"></i></a></li>
                            <li><a href="./pages-invoice.html">Invoice <i class="icon-speech"></i></a></li>
                            <li><a href="./pages-treeview.html">Treeview <i class="ti-layout-menu-v"></i></a></li>
                            <li><a href="./pages-utility-classes.html">Helper Classes <i class="icon-compass"></i></a></li>
                            <li><a href="./pages-search-result.html">Search result <i class="icon-hourglass"></i></a></li>
                            <li><a href="./pages-scroll.html">Scrollbar <i class="icon-equalizer"></i></a></li>
                            <li><a href="./pages-pricing.html">Pricing <i class="ti-money"></i></a></li>
                            <li><a href="./pages-lightbox-popup.html">Lighbox popup <i class="ti-light-bulb"></i></a></li>
                            <li><a href="./pages-gallery.html">Gallery <i class="ti-gallery"></i></a></li>
                            <li><a href="./pages-faq.html">Faqs <i class="icon-social-foursqare"></i></a></li>
                            <li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="./pages-error-400.html">400 <i class="ti-info-alt"></i></a></li>
                                    <li><a href="./pages-error-403.html">403 <i class="ti-info"></i></a></li>
                                    <li><a href="./pages-error-404.html">404 <i class="ti-face-sad"></i></a></li>
                                    <li><a href="./pages-error-500.html">500 <i class="ti-help"></i></a></li>
                                    <li><a href="./pages-error-503.html">503 <i class="ti-infinite"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Charts</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./chart-morris.html">Morris Chart <i class="ti-stats-up"></i></a></li>
                            <li><a href="./chart-chartist.html">Chartis Chart <i class="ti-bar-chart"></i></a></li>
                            <li><a href="./chart-echart.html">Echarts <i class="icon-chart"></i></a></li>
                            <li><a href="./chart-flot.html">Flot Chart <i class="mdi-chart-histogram"></i></a></li>
                            <li><a href="./chart-knob.html">Knob Chart <i class="ti-pulse"></i></a></li>
                            <li><a href="./chart-chart-js.html">Chartjs <i class="mdi mdi-chart-areaspline"></i></a></li>
                            <li><a href="./chart-sparkline.html">Sparkline Chart <i class="icon-graph"></i></a></li>
                            <li><a href="./chart-extra-chart.html">Extra chart <i class="ti-stats-down"></i></a></li>
                            <li><a href="./chart-peity.html">Peity Charts <i class="mdi mdi-chart-pie"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Icons</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./icon-material.html">Material Icons <i class="icon-social-reddit"></i></a></li>
                            <li><a href="./icon-fontawesome.html">Fontawesome Icons <i class="ti-github"></i></a></li>
                            <li><a href="./icon-themify.html">Themify Icons <i class="ti-themify-logo"></i></a></li>
                            <li><a href="./icon-weather.html">Weather Icons <i class="ti-shine"></i></a></li>
                            <li><a href="./icon-simple-lineicon.html">Simple Line icons <i class="icon-emotsmile"></i></a></li>
                            <li><a href="./icon-flag.html">Flag Icons <i class="ti-flag"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="./map-google.html">Google Maps <i class="mdi mdi-google-maps"></i></a></li>
                            <li><a href="./map-vector.html">Vector Maps <i class="mdi mdi-map-marker"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi level dd</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="javascript:void(0)">item 1.1<i class="ti-align-left"></i></a></li>
                            <li><a href="javascript:void(0)">item 1.2<i class="ti-align-left"></i></a></li>
                            <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3<i class="ti-align-left"></i></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="javascript:void(0)">item 1.3.1<i class="ti-list-ol"></i></a></li>
                                    <li><a href="javascript:void(0)">item 1.3.2<i class="ti-list-ol"></i></a></li>
                                    <li><a href="javascript:void(0)">item 1.3.3<i class="ti-list-ol"></i></a></li>
                                    <li><a href="javascript:void(0)">item 1.3.4<i class="ti-list-ol"></i></a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">item 1.4<i class="ti-align-left"></i></a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"></li>
                    <li> <a class="waves-effect waves-dark" href="../documentation/documentation.html" aria-expanded="false"><i class="fa fa-circle-o text-danger"></i><span class="hide-menu">Documentation</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="./pages-login.html" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">Log Out</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="./pages-faq.html" aria-expanded="false"><i class="fa fa-circle-o text-info"></i><span class="hide-menu">FAQs</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Datatable</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Datatable</li>
                        </ol>
                        {{--<button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>--}}
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
@yield('content')

        <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme working">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle" /> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle" /> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle" /> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle" /> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle" /> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle" /> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle" /> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle" /> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
    © 2018 Elegent Admin by wrappixel.com
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->


</body>

</html>