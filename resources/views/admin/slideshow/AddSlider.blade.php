@extends('layouts.adminLayouts')

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">افزودن تصویر جدید اسلایدشو</h4>
                    <h6 class="card-subtitle">با استفاده از فرم زیر اسلایدشوی جدیدی در سیستم تعریف نمائید</h6>
                    <form class="form-material m-t-40" action="{{ url('admin/Slider') }}" name="AddSlider" id="AddSlider" method="POST" enctype="multipart/form-data"/>
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title">عنوان اسلایدشو</label>
                        <input type="text" class="form-control form-control-line" id="title" name="title"  value="{{ old('title') }}" />
                        @if ($errors->has('title'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control form-control-line" id="description"
                                  name="description"></textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="row {{ $errors->has('img') ? ' has-error' : '' }}">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <label for="input-file-now-custom-1">تصویر کاربر</label>
                                    <input type="file" id="img" name="img" class="dropify"
                                           data-default-file=""/>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('img'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('img') }}</strong>
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

    @include('admin.js.sliderJs')

@endsection