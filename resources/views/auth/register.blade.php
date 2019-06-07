@extends('layouts.layout')

@section('content')
{{--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!--page title start-->

<section class="page-title o-hidden" data-bg-img="{{ asset ('img/bg/02.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
                <h1 class="mb-3">ثبت نام <span class="text-theme">کاربران</span></h1>
                <nav aria-label="breadcrumb">
                    {{ Breadcrumbs::render('register') }}
                </nav>
            </div>
        </div>
    </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

    <!--login start-->

    <section class="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="register-form text-center">
                        <h2 class="title mb-5">ثبت نام <span>کاربران</span></h2>
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}"> <i class="far fa-user"></i>

                                    <input id="name" type="text" class="form-control form_name" name="name" value="{{ old('name') }}" required placeholder="نام و نام خانوادگی">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"> <i class="far fa-envelope"></i>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="پست الکترونیکی خود را وارد نمائید" required="required" value="{{ old('email') }}" />

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}"> <i class="fas fa-unlock-alt"></i>
                                    <input id="form_password" type="password" name="password" class="form-control" placeholder="کلمه عبور خود را وارد نمائید" required="required"/>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <i class="fas fa-unlock-alt"></i>
                                    <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="تکرار کلمه عبور را وارد نمائید" required="required" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="remember-checkbox clearfix mb-5">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">قوانین و مقررات را مطالعه کرده ام و با آن موافقم</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-theme btn-iconic">
                                    <span>ارسال اطلاعات <i class="fas fa-long-arrow-alt-right"></i></span>
                                </button>
                            </div>
                            <div class="col-md-6 sm-mt-3">
                                <h5 class="mb-0 text-capitalize">قبلا ثبت نام کرده اید؟ <a href="{{ route ('login') }}"><i>وارد شوید</i></a></h5>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--login end-->


</div>

<!--body content end-->
@endsection
