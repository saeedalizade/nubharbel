@extends('layouts.layout')
@section('content')
    <!--page title start-->

    <section class="page-title o-hidden" data-bg-img="{{ asset ('img/bg/02.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h1 class="mb-3">Blog <span class="text-theme">Single</span></h1>
                    {{ Breadcrumbs::render('articleDetail',$articleDetail) }}
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
                                <img class="img-fluid w-100" src="{{ asset ('img/post/Large/'.$articleDetail['img']) }}" alt=""/>
                                @php $Created = new Verta($articleDetail['created_at']);@endphp

                                <div class="post-date">{{ $Created->format('d')}} <span>{{ $Created->format('F')}}</span>
                                </div>
                                </div>
                            </div>
                            <div class="blog-details">
                                <div class="post-desc">
                                    <div class="post-title">
                                        <h3 class="mb-3">{{$articleDetail['title']}}</h3>
                                    </div>
                                    <div class="post-queto pos-r mt-5">
                                        <span><i class="fas fa-quote-left"></i></span>
                                        <h5 class="mb-0 text-capitalize font-italic">
                                            {{ strip_tags($articleDetail['description']) }}
                                        </h5>
                                    </div>
                                    <p>

                                        {{ strip_tags($articleDetail['content']) }}

                                    </p>
                                </div>

                                <div class="media-holder mt-5">
                                    <h3 class="title mb-3">All <span>Comments</span></h3>
                                    <div class="media">
                                        <img class="img-center ml-3" alt="image" src="./images/blog/blog-thumb/01.jpg"/>
                                        <div class="media-body">
                                            <h6>John Glemean</h6>
                                            <p>ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde wisi
                                                enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper
                                                turet suscipit lobortis nisl ut aliquip erat volutpat</p>
                                            <div class="reply"><a href="#" class="comment-reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="img-center ml-3" alt="image" src="./images/blog/blog-thumb/02.jpg"/>
                                        <div class="media-body">
                                            <h6>John Glemean</h6>
                                            <p>ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde wisi
                                                enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper
                                                turet suscipit lobortis nisl ut aliquip erat volutpat</p>
                                            <div class="reply"><a href="#" class="comment-reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comments mt-5 pos-r">
                                    <div class="section-title mb-4">
                                        <h3 class="title">Leave A <span>Comment</span></h3>
                                    </div>
                                    <form id="contact-form" method="post" action="contact.php"/>
                                    <div class="messages"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" class="form-control"
                                                       placeholder="Name" required="required"
                                                       data-error="Name is required."/>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" class="form-control"
                                                       placeholder="Email" required="required"
                                                       data-error="Valid email is required."/>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_subject" type="text" name="name" class="form-control"
                                                       placeholder="Subject"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="form_message" name="message" class="form-control"
                                                          placeholder="Your Comment" rows="4" required="required"
                                                          data-error="Please,leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-theme btn-circle"><span>Post Comment</span>
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
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

