@extends('layouts.adminLayouts')

@section('content')


    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">لیست پست</h4>
                    <h6 class="card-subtitle">لیست  تمامی پست ها و اطلاعت تکمیلی آنها را از لیست زیر میتوانید مشاهده کنید
                        <a class="btn btn-info d-none d-lg-block m-l-15 pull-right"
                           href="{{ url('admin/Post/create') }}"><i
                                    class="fa fa-image"></i> افزودن پست</a>
                    </h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان</th>
                                <th>نوع</th>
                                <th>تاریخ ثبت</th>
                                <th>تاریخ آخرین ویرایش</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($PostList as $key=>$Post)
                                <tr id="del-{{$Post->id}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$Post->title}}</td>
                                    <td>{{ $Post->type =='news' ?  'اخبار':'مقاله'}}</td>
                                    <td>
                                        @php $Created = new Verta($Post->created_at);@endphp
                                        {{ $Created->format('H:i Y-m-d')}}
                                    </td>
                                    <td>
                                        @php $Updated = new Verta($Post->updated_at);@endphp
                                        {{$Updated->format('H:i Y-m-d')}}
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-outline-primary"
                                           href="{{ url ('/admin/Post/'.$Post->id.'/edit') }}" target="_blank"><i
                                                    class="fa fa-pencil"></i>
                                        </a>


                                        <a type="button" class="btn btn-outline-danger" href="#"
                                           onclick="DeletePosts('{{$Post->id }}','{{csrf_token ()}}'); return false;"><i
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
    @include('admin.js.PostJs')
@endsection
