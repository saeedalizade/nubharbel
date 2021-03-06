@extends('layouts.adminLayouts')

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">افزودن محصول جدید</h4>
                    <h6 class="card-subtitle">با استفاده از فرم زیر محصول جدیدی در سیستم تعریف نمائید</h6>
                    <form class="form-material m-t-40" action="{{ url('admin/Product') }}" name="AddProduct"
                          id="AddProduct" method="POST" enctype="multipart/form-data"/>
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title">نام محصول</label>
                        <input type="text" class="form-control form-control-line" id="title" name="title"
                               value="{{ old('title') }}"/>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
                        <label for="category_id">نام دسته بندی </label>
                        <select name="category_id" id="category_id" class="form-control form-control-line select2">
                            <option value="">انتخاب کنید...</option>
                            @foreach($CatProduct as $Cat)
                                <option value="{{ $Cat['id'] }}">{{ $Cat['title'] }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description">توضیحات کوتاه</label>
                        <textarea class="form-control form-control-line" id="description"
                                  name="description"></textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                        <label for="content">توضیحات بلند</label>
                        <textarea class="form-control form-control-line" id="content"
                                  name="content"></textarea>
                        @if ($errors->has('content'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('count') ? ' has-error' : '' }}">
                        <label for="count">تعداد</label>
                        <input type="text" class="form-control form-control-line" id="count" name="count"
                               value="{{ old('count') }}"/>
                        @if ($errors->has('count'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('count') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                        <label for="price">قیمت</label>
                        <input type="text" class="form-control form-control-line" id="price" name="price"
                               value="{{ old('price') }}"/>
                        @if ($errors->has('price'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('discount') ? ' has-error' : '' }}">
                        <label for="discount">تخفیف</label>
                        <input type="text" class="form-control form-control-line" id="discount" name="discount"
                               value="{{ old('discount') }}"/>
                        @if ($errors->has('discount'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('discount') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('is_special') ? ' has-error' : '' }}">
                        <label for="is_special">محصول ویژه می باشد؟ </label>
                        <select name="is_special" id="category_id" class="form-control form-control-line select2">
                            <option value="">انتخاب کنید...</option>

                                <option value="1">بله</option>
                                <option value="0">خیر</option>

                        </select>
                        @if ($errors->has('is_special'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('is_special') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="row {{ $errors->has('img') ? ' has-error' : '' }}">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <label for="input-file-now-custom-1">تصویر محصول</label>
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

    @include('admin.js.ProductJs')

@endsection