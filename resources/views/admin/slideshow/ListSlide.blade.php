@extends('layouts.adminLayouts')

@section('content')


    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">لیست اسلایدشو</h4>
                    <h6 class="card-subtitle">لیست  تمامی اسلایدشو و اطلاعت تکمیلی آنها را از لیست زیر میتوانید مشاهده کنید
                        <a class="btn btn-info d-none d-lg-block m-l-15 pull-right"
                           href="{{ url('admin/Slider/create') }}"><i
                                    class="fa fa-image"></i> افزودن گالری</a>
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
                            @foreach($SliderList as $key=>$slider)
                                <tr id="del-{{$slider->id}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$slider->title}}</td>
                                    <td>
                                        @php $Created = new Verta($slider->created_at);@endphp
                                        {{ $Created->format('H:i Y-m-d')}}
                                    </td>
                                    <td>
                                        @php $Updated = new Verta($slider->updated_at);@endphp
                                        {{$Updated->format('H:i Y-m-d')}}
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-outline-primary"
                                           href="{{ url ('/admin/Slider/'.$slider->id.'/edit') }}" target="_blank"><i
                                                    class="fa fa-pencil"></i>
                                        </a>


                                        <a type="button" class="btn btn-outline-danger" href="#"
                                           onclick="DeleteSlide('{{$slider->id }}','{{csrf_token ()}}'); return false;"><i
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
    @include('admin.js.sliderJs')
@endsection
