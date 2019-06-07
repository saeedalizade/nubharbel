@extends('layouts.layout')
@section('content')
    <!--page title start-->

    <section class="page-title o-hidden" data-bg-img="{{ asset ('img/bg/02.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h1 class="mb-3">ثبت نام <span class="text-theme">کاربران</span></h1>
                    <nav aria-label="breadcrumb">
                        {{ Breadcrumbs::render('ProfileUser') }}
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
                        <div class="register-form ">
                            <h2 class="title mb-5">پروفایل  <span>کاربر</span></h2>
                            <form class="form-horizontal" method="POST" action="ProfileUser/{{ auth()->user()->id }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name" class="text-right">نام و نام خانوادگی</label>
                                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}"> <i class="far fa-user"></i>

                                            <input id="name" type="text" class="form-control form_name" name="name" value="{{ $UserProfile['user']['name'] }}" disabled=""disabled  placeholder="نام و نام خانوادگی">

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="text-right">ایمیل</label>
                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"> <i class="fas fa-at"></i>
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="پست الکترونیکی خود را وارد نمائید" disabled="disabled" value="{{$UserProfile['user']['email']}}" />

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
                                        <label for="national_code" class="text-right">کد ملی</label>
                                        <div class="form-group {{ $errors->has('national_code') ? ' has-error' : '' }}"> <i class="far fa-address-card"></i>
                                            <input id="national_code" type="text" name="national_code" class="form-control" placeholder="کد ملی خود را وارد نمائید" required="required" value="{{$UserProfile['national_code']}}"/>
                                            @if ($errors->has('national_code'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('national_code') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="postal_code" class="text-right">کد پستی</label>
                                        <div class="form-group {{ $errors->has('postal_code') ? ' has-error' : '' }}"> <i class="fas fa-envelope-open"></i>
                                            <input id="postal_code" type="text" name="postal_code" class="form-control" placeholder="کد پستی خود را وارد نمائید" required="required" value="{{$UserProfile['postal_code']}}"/>
                                            @if ($errors->has('postal_code'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('postal_code') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-6">
                                        <label for="phone" class="text-right">شماره ثابت</label>
                                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}"> <i class="fas fa-phone"></i>
                                            <input id="phone" type="text" name="phone" class="form-control" placeholder="شماره ثابت خود را وارد نمائید" required="required" value="{{$UserProfile['phone']}}"/>
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mobile" class="text-right">شماره همراه</label>
                                        <div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }}"> <i class="fas fa-mobile-alt"></i>
                                            <input id="mobile" type="text" name="mobile" class="form-control" placeholder="شماره همراه خود را وارد نمائید" value="{{$UserProfile['mobile']}}"/>
                                            @if ($errors->has('mobile'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="email" class="text-right">آدرس</label>
                                        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}"> <i class="fas fa-map-marker-alt"></i>
                                           <textarea name="address" id="address" class="form-control" placeholder="آدرس خود را وارد نمائید">{{$UserProfile['address']}}
                                           </textarea>
                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-theme btn-iconic">
                                            <span>ارسال اطلاعات <i class="fas fa-long-arrow-alt-right"></i></span>
                                        </button>
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