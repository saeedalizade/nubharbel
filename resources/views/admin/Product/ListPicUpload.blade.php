@extends('layouts.adminLayouts')

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">لیست محصولات</h4>
                    <h6 class="card-subtitle">لیست  تمامی محصولات  را از لیست زیر میتوانید مشاهده کنید
                        <a class="btn btn-info d-none d-lg-block m-l-15 pull-right"
                           href="{{ url('admin/pic/'. $ListPicUpload['id']) }}"><i
                                    class="fa fa-image"></i> افزودن محصول</a>
                    </h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>تصویر</th>
                                <th>تاریخ ایجاد</th>
                                <th>عملیات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ListPicUpload['data'] as $key=>$pic)
                                <tr id="del-{{$pic->id}}">
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{ asset('img/picProduct/Thumbnail/'.$pic['img']) }}"></td>
                                    <td>
                                        @php $Created = new Verta($pic->created_at);@endphp
                                        {{ $Created->format('H:i Y-m-d')}}
                                    </td>
                                    <td>

                                        <a type="button" class="btn btn-outline-danger" href="#"
                                           onclick="DeletePicProduct('{{$pic->id }}','{{csrf_token ()}}'); return false;"><i
                                                    class="fa fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    @include('admin.js.ProductJs')
@endsection
