@extends('layouts.layout')
@section('content')

    <!--page title start-->

    <section class="page-title o-hidden" data-bg-img="{{ asset ('img/bg/02.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h1 class="mb-3">Blog <span class="text-theme">Masonry</span></h1>
                    {{ Breadcrumbs::render('news',$ListPost) }}
                </div>
            </div>
        </div>
    </section>


    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <!--blog start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="masonry columns-3 row">
                            @foreach($ListPost as $post)
                                <div class="masonry-brick">
                                    <div class="post">
                                        <div class="post-image">
                                            <img class="img-fluid w-100" src="{{ asset ('img/post/'. $post['img']) }}" alt=""/>
                                            @php $Created = new Verta($post['created_at']);@endphp

                                            <div class="post-date">{{ $Created->format('d')}} <span>{{ $Created->format('F')}}</span>
                                            </div>
                                        </div>
                                        <div class="post-desc">
                                            <div class="post-title">
                                                <h5><a href="{{ url('news/'.$post['id']) }}">{{ $post['title'] }}</a></h5>
                                            </div>
                                            <p>{{ strip_tags ($post['description']) }}</p>
                                            <a class="post-btn" href="{{ url('news/'.$post['id']) }}">بیشتر بخوانید
                                                <i class="ml-2 fas fa-long-arrow-alt-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12">
                        {{$ListPost->links('Paginate') }}
                    </div>
                </div>
            </div>
        </section>

        <!--blog end-->


    </div>

@endsection