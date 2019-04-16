@extends('layouts.adminLayouts')

@section('content')

    {{--{{ dd($UserProfile) }}--}}

    @empty(!$UserProfile->user)
        @php $ActionAttached = '/'.$UserProfile->user_id ;
         $ProfileName = $UserProfile->user->name;
        @endphp
    @else
       @php $ActionAttached = '' ;
         $ProfileName = $UserProfile->name  @endphp
    @endempty
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> ویرایش
                        پروفایل {{$ProfileName}}
                    </h4>
                    <h6 class="card-subtitle">با استفاده از فرم زیر نقش جدیدی در سیستم تعریف نمائید</h6>
                    <form class="form-material m-t-40"
                          action="/admin/UserProfile{{$ActionAttached}}"
                          name="EditProfileUser" id="EditProfileUser" method="POST" enctype="multipart/form-data"/>
                    {{ csrf_field() }}
                    @empty(!$UserProfile->user)
                        {{ method_field('PATCH') }}
                    @else
                        <input type="hidden" name="user_id" id="user_id" value="{{ $UserProfile->id }}">
                    @endempty
                    <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone">شماره تلفن ثابت</label>
                        <input type="text" class="form-control form-control-line" id="phone" name="phone"
                               value="{{ !empty($UserProfile) ? $UserProfile->phone : '' }}"/>
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label for="mobile">شماره تلفن همراه</label>
                        <input type="text" class="form-control form-control-line" id="mobile" name="mobile"
                               value="{{ !empty($UserProfile) ? $UserProfile->mobile : '' }}"/>
                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('national_code') ? ' has-error' : '' }}">
                        <label for="national_code">کد ملی</label>
                        <input type="text" class="form-control form-control-line" id="national_code"
                               name="national_code"
                               value="{{!empty($UserProfile) ? $UserProfile->national_code : ''}}"/>
                        @if ($errors->has('national_code'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('national_code') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('postal_code') ? ' has-error' : '' }}">
                        <label for="postal_code">کد پستی</label>
                        <input type="text" class="form-control form-control-line" id="postal_code" name="postal_code"
                               value="{{!empty($UserProfile) ? $UserProfile->postal_code : ''}}"/>
                        @if ($errors->has('postal_code'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('postal_code') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address">آدرس</label>
                        <textarea class="form-control form-control-line" id="address"
                                  name="address">{{!empty($UserProfile) ? $UserProfile->address : ''}}</textarea>
                        @if ($errors->has('address'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="row {{ $errors->has('address') ? ' has-error' : '' }}">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <label for="input-file-now-custom-1">تصویر کاربر</label>
                                    <input type="file" id="avatar" name="avatar" class="dropify"
                                           data-default-file="{{URL::to('img/avatar_profile/'.$UserProfile->avatar)}}"/>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('avatar'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 pull-right">ارسال
                        اطلاعات
                    </button>

                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->

    @include('admin.js.UsersJs')

@endsection