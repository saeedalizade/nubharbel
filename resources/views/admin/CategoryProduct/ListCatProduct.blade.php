@extends('layouts.adminLayouts')

@section('content')


    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">لیست دسته بندی محصولات</h4>
                    <h6 class="card-subtitle">لیست  تمامی دسته بندی محصولات  را از لیست زیر میتوانید مشاهده کنید
                        <a class="btn btn-info d-none d-lg-block m-l-15 pull-right"
                           href="{{ url('admin/CategoryProduct/create') }}"><i
                                    class="fa fa-image"></i> افزودن دسته بندی</a>
                    </h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان</th>
                                <th>تاریخ ثبت</th>
                                <th>تاریخ آخرین ویرایش</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Cats as $key=>$Cat)
                                <tr id="del-{{$Cat->id}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$Cat->title}}</td>
                                    <td>
                                        @php $Created = new Verta($Cat->created_at);@endphp
                                        {{ $Created->format('H:i Y-m-d')}}
                                    </td>
                                    <td>
                                        @php $Updated = new Verta($Cat->updated_at);@endphp
                                        {{$Updated->format('H:i Y-m-d')}}
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-outline-primary"
                                           href="{{ url ('/admin/CategoryProduct/'.$Cat->id.'/edit') }}" target="_blank"><i
                                                    class="fa fa-pencil"></i>
                                        </a>


                                        <a type="button" class="btn btn-outline-danger"
                                           onclick="DeleteCat('{{$Cat->id }}','{{csrf_token ()}}'); return false;"><i
                                                    class="fa fa-trash"></i> حذف
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
