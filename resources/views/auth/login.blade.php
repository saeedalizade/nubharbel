@extends('layouts.layout')
@section('content')
{{--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
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
                <h1 class="mb-3">ورود <span class="text-theme">کاربران</span></h1>
                <nav aria-label="breadcrumb">
                    {{ Breadcrumbs::render('login') }}
                </nav>
            </div>
        </div>
    </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

    <!--login start-->

    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 ml-auto mr-auto">
                    <div class="login-form text-center box-shadow white-bg pt-5">
                        <h2 class="title mb-4">ورود<span>کاربران</span></h2>
                        <form id="loginUser" name="loginUser" class="px-5" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                        <div class="messages"></div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <i class="far fa-user"></i>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="ایمیل خود را وارد نمائید">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="fas fa-unlock-alt"></i>
                            <input id="password" type="password" class="form-control" name="password" required placeholder="کلمه عبور خود را وارد نمائید">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group mt-4 mb-5">
                            <div class="remember-checkbox clearfix">
                                <div class="custom-control custom-checkbox">

                                    <input type="checkbox" name="remember" class="custom-control-input" id="rememberUser" name="rememberUser" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customCheck1">مرا به خاطر بسپار</label>
                                </div>
                                <a href="{{ route('password.request') }}" class="float-right">کلمه عبور خود را فراموش کرده اید؟</a>
                            </div>
                        </div>

                            <button type="submit" class="btn btn-theme btn-block"><span>ورود</span></button>
                        <h5 class="mb-0 mt-3 text-capitalize"> در گلابسرا ثبت نام نکرده اید؟&nbsp;<a href="{{ route('register') }}"><i>ثبت نام کنید</i></a></h5>
                        </form>
                        <div class="login-social mt-5 text-center clearfix">
                            <ul class="list-inline d-flex flex-lg-row flex-column justify-content-between align-items-between">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--login end-->



</div>

<!--body content end-->
@endsection
