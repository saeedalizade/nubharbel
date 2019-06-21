@extends('layouts.layout')
@section('content')
    <!--page title start-->

    <section class="page-title o-hidden" data-bg-img="{{ asset ('img/bg/02.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h1 class="mb-3">
                        <span class="text-theme">{{$data['articleDetail']['title']}}</span></h1>
                    {{ Breadcrumbs::render('articleDetail',$data['articleDetail']) }}
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
                        <div class="left-side">
                            <div class="post-image">
                                <img class="img-fluid w-100"
                                     src="{{ asset ('img/post/Large/'.$data['articleDetail']['img']) }}"
                                     alt=""/>
                                @php $Created = new Verta($data['articleDetail']['created_at']);@endphp

                                <div class="post-date">{{ $Created->format('d')}}
                                    <span>{{ $Created->format('F')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details">
                            <div class="post-desc">
                                <div class="post-title">
                                    <h3 class="mb-3">{{$data['articleDetail']['title']}}</h3>
                                </div>
                                <div class="post-queto pos-r mt-5">
                                    <span><i class="fas fa-quote-left"></i></span>
                                    <h5 class="mb-0 text-capitalize font-italic">
                                        {{ strip_tags($data['articleDetail']['description']) }}
                                    </h5>
                                </div>
                                <p>

                                    {{ strip_tags($data['articleDetail']['content']) }}

                                </p>
                            </div>

                            <div class="media-holder mt-5">
                                <h3 class="title mb-3">نظرات <span>کاربران</span></h3>
                                @foreach($data['commentArticle'] as $comment)
                                    <div class="media">
                                        <img class="img-center ml-3 img-comment-with-100" alt="image" src="{{ asset('img/avatar_profile/'.$comment->UserProfile['avatar']) }}"/>
                                        <div class="media-body">
                                            <h6>{{ $comment->UserProfile->user['name'] }}</h6>
                                            <p>{{$comment->comment}}</p>
                                            {{--<div class="reply"><a href="#" class="comment-reply">Reply</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            @auth
                                <div class="post-comments mt-5 pos-r">
                                    <div class="section-title mb-4">
                                        <h3 class="title">نظر <span>شما</span></h3>
                                    </div>
                                    <form id="PostComment" class="PostComment" method="post"
                                          action="/comment/{{ auth()->user ()->id }}"/>
                                    {{ csrf_field () }}
                                    <input type="hidden" name="type" id="type" value="post">
                                    <input type="hidden" name="id_related" id="id_related"
                                           value="{{$data['articleDetail']['id']}}">
                                    <div class="messages"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" class="form-control"
                                                       placeholder="نام خود را وارد نمائید" required="required"
                                                       value="{{auth()->user ()->name}}"
                                                       disabled="disabled"/>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" class="form-control"
                                                       placeholder="پست الکترونیک خود را وارد نمائید"
                                                       required="required" value="{{auth()->user ()->email}}"
                                                       disabled="disabled"/>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="comment" name="comment" class="form-control"
                                                          placeholder="نظر شما" rows="4" required="required"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-theme btn-circle"><span>ارسال نظر</span>
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <!--blog end-->
    </div>

    <!--body content end-->

@endsection

