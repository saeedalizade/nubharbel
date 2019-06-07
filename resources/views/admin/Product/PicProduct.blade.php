@extends('layouts.adminLayouts')

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">افزودن تصویر محصول جدید</h4>
                    <h6 class="card-subtitle">با استفاده از فرم زیر  تصویر محصول جدیدی در سیستم تعریف نمائید</h6>
                    <form class="form-material m-t-40 dropzone" action="{{ url('admin/picUpload/'.$data['id']) }}" name="PicProduct"
                          id="PicProduct" method="POST" enctype="multipart/form-data"/>
                    {{ csrf_field() }}

                                    <div class="fallback">
                                        <input name="img" id="img" type="file" multiple="" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->


@endsection