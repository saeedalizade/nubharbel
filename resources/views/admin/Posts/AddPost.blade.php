@extends('layouts.adminLayouts')

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">افزودن پست جدید</h4>
                    <h6 class="card-subtitle">با استفاده از فرم زیر پست جدیدی در سیستم تعریف نمائید</h6>
                    <form class="form-material m-t-40" action="{{ url('admin/Post') }}" name="AddPost" id="AddPost" method="POST" enctype="multipart/form-data"/>
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title">عنوان پست</label>
                        <input type="text" class="form-control form-control-line" id="title" name="title"  value="{{ old('title') }}" />
                        @if ($errors->has('title'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }} ">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control form-control-line setToEditor" id="description"
                                  name="description"></textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                        <label for="content">محتوای پست</label>
                        <textarea class="form-control form-control-line setToEditor" id="content"
                                  name="content"></textarea>
                        @if ($errors->has('content'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                        <label for="type">نوع پست</label>
                        <select name="type" id="type" class="form-control form-control-line select2">
                            <option value="">انتخاب کنید...</option>

                            <option value="article">مقاله</option>
                            <option value="news">خبر</option>

                        </select>
                        @if ($errors->has('type'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                        <label for="status">وضعیت</label>
                        <select name="status" id="status" class="form-control form-control-line select2">
                            <option value="">انتخاب کنید...</option>

                            <option value="1">منتشر شده</option>
                            <option value="0">منتشر نشده</option>

                        </select>
                        @if ($errors->has('type'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="row {{ $errors->has('img') ? ' has-error' : '' }}">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <label for="input-file-now-custom-1">تصویر پست</label>
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

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 pull-right submitForEditor">ارسال اطلاعات</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->

    @include('admin.js.PostJs')

@endsection