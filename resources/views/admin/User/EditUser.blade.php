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
                    <h6 class="card-subtitle">با استفاده از فرم زیر نقش جدیدی در سیستم تعریف نمائید</h6>
                    <form class="form-material m-t-40" action="/admin/ListUsers/{{$adminUser->id}}" name="adminUser" id="adminUser" method="POST"/>
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="fullname">نام و نام خانوادگی</label>
                        <input type="text" class="form-control form-control-line" id="v" name="name"  value="{{ $adminUser->name }}" />
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">ایمیل کاربر</label>
                        <input type="text" class="form-control form-control-line" id="email" name="email" value="{{ $adminUser->email }}"/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
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