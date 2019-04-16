@extends('layouts.adminLayouts')

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">افزودن نقش جدید</h4>
                    <h6 class="card-subtitle">با استفاده از فرم زیر کاربر جدیدی در سیستم تعریف نمائید</h6>
                    <form class="form-material m-t-40" action="{{ url('admin/ListUsers') }}" name="AddUserStore" id="AddUserStore" method="POST"/>
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">نام و نام خانوادگی</label>
                        <input type="text" class="form-control form-control-line" id="name" name="name"  value="{{ old('name') }}" />
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">ایمیل کاربر</label>
                        <input type="text" class="form-control form-control-line" id="email" name="email" value="{{ old('email') }}"/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">رمز عبور کاربر</label>
                        <input type="password" class="form-control form-control-line" id="password" name="password" />
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">تکرار کلمه عبور</label>
                        <input type="password" class="form-control form-control-line" id="password-confirm" name="password_confirmation" />

                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 pull-right">ارسال اطلاعات</button>

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