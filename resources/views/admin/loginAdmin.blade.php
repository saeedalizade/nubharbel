@extends('layouts.loginAdminLayouts')

@section('content')


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url({{ asset('admin/images/background/login-register.jpg') }});">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="checkLogin" method="post" />
                {{ csrf_field() }}
                <a href="javascript:void(0)" class="text-center db"><img src="{{ asset('admin/images/logo-icon.png') }}" alt="Home" /><br /><img src="{{ asset('admin/images/logo-text.png') }}" alt="Home" /></a>
                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input class="form-control" type="text"  placeholder="نام کاربری(پست الکترونیک)" name="email"  id="email"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password"  placeholder="کلمه عبور" name="password" id="password"/>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" />
                            <label class="custom-control-label" for="customCheck1">مرا به خاطر بسپار</label>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> فراموشی رمز عبور</a>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">وارد شوید</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        Don't have an account? <a href="./pages-register2.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                    </div>
                </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html" />
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>بازیابی کلمه عبور</h3>
                        <p class="text-muted">پست الکترونیک خود را وارد نمائید ،لینک بازیابی کلمه عبور برای شما ارسال خواهد شد </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="پست الکترونیک" />
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">بازیابی</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


@endsection