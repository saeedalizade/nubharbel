@extends('layouts.adminLayouts')

@section('content')


    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">لیست کاربران</h4>
                    <h6 class="card-subtitle">تمامی کاربران و اطلاعت تکمیلی آنها را از لیست زیر میتوانید مشاهده کنید
                        <a class="btn btn-info d-none d-lg-block m-l-15 pull-right"
                           href="{{ url('admin/ListUsers/create') }}"><i
                                    class="fa fa-user-plus"></i> افزودن کاربر</a>
                    </h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>تاریخ ثبت</th>
                                <th>تاریخ آخرین ویرایش</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=>$user)
                                <tr id="del-{{$user->id}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @php $Created = new Verta($user->created_at);@endphp
                                        {{ $Created->format('H:i Y-m-d')}}
                                    </td>
                                    <td>
                                        @php $Updated = new Verta($user->updated_at);@endphp
                                        {{$Updated->format('H:i Y-m-d')}}
                                    </td>
                                    <td><input type="checkbox" {{ $user->is_del == '0' ? 'checked='.'"checked"'.'':'' }} class="bt-switch" data-on-color="success" data-off-color="danger" data-on-text=" فعال" data-off-text="غیر فعال" onchange="ChangeStatus('{{ $user->id }}','{{ csrf_token () }}')" id="IsDel-{{$user->id}}"/></td>
                                    <td>
                                        <a type="button" class="btn btn-outline-primary"
                                                href="{{ url ('/admin/ListUsers/'.$user->id.'/edit') }}" target="_blank"><i
                                                    class="fa fa-pencil"></i>
                                        </a>

                                        <a type="button" class="btn btn-outline-success"
                                           href="{{ url ('/admin/UserProfile/'.$user->id) }}" target="_blank"><i
                                                    class="fa fa-vcard "></i>
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
    @include('admin.js.UsersJs')
@endsection
