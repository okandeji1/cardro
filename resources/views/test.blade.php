@extends('layouts.site')
@section('content')
    <!-- Page Banner Section -->
    {{-- <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('asset2/images/background/bg-banner-1.jpg')"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Shopping Cart</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>

    </section> --}}
    <!--End Banner Section -->

    <!--End Cart Section-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!--Blog Posts-->
                    <div class="blog-post-detail">
                        <div class="inner">
                            <div class="post-meta">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="icon fa fa-user"></span> Admin</a></li>
                                    <li><a href="#"><span class="icon fa fa-comments"></span> 29
                                            Comments</a></li>
                                    <li><a href="#"><span class="icon fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                            <h2>{{ $post->title }}</h2>

                            <div class="content">
                                {{-- <p class="big-text">Cupidatat non proident sunt culpa qui
                                    officia deserunt mollit anim idest
                                    laborum sed ux perspiciatis unde omnis iste natuserror sit voluptatem accusantium.
                                    dolore laudantium totam rem aperiam eaque.</p> --}}
                                <br>
                                <figure class="image"><img class="lazy-image"
                                        src="{{ asset('asset2/images/resource/image-spacer-for-validation.png') }}"
                                        data-src="/storage/{{ $post->image }}" alt=""></figure>
                                <br>
                                <p>{{ $post->description }} </p>
                            </div>
                        </div>

                        <div class="post-share-options clearfix">
                            <div class="pull-left">
                                <p>Tags : </p>
                                <ul class="tags">
                                    <li><a href="#">Software</a></li>
                                    <li><a href="#">Application</a></li>
                                </ul>
                            </div>

                            <div class="social-links pull-right">
                                <p>Share:</p>
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- Comments Area -->
                    <div class="comments-area">
                        <div class="group-title">
                            <h3>Comments</h3>
                        </div>
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img class="lazy-image"
                                        src="images/resource/image-spacer-for-validation.png"
                                        data-src="images/resource/author-thumb-1.jpg" alt=""></div>
                                <div class="comment-info">
                                    <h4 class="name">Hanson Deck</h4>
                                    <div class="time">January 7, 2019 at 1:44 pm</div>
                                </div>
                                <div class="text">Only a quid up the duff give us a bell gosh golly gosh bobby dropped a
                                    clanger jolly good burke on your bike mate matie boy, lavatory plastered.!</div>
                                <a href="#" class="reply-btn"><span class="arrow_back"></span> Reply</a>
                            </div>
                        </div>

                        <div class="comment-box reply-comment">
                            <div class="comment">
                                <div class="author-thumb"><img class="lazy-image"
                                        src="images/resource/image-spacer-for-validation.png"
                                        data-src="images/resource/author-thumb-2.jpg" alt=""></div>
                                <div class="comment-info">
                                    <h5 class="name">Norman Gordon</h5>
                                    <div class="time">October 7, 2019 at 12:26 am</div>
                                </div>
                                <div class="text">Lavatory bloke cack haggle tickety-boo blag hanky panky pardon me cup of
                                    tea Richard, jolly good horse play harry.</div>
                                <a href="#" class="reply-btn"><span class="arrow_back"></span> Reply</a>
                            </div>
                        </div>

                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img class="lazy-image"
                                        src="images/resource/image-spacer-for-validation.png"
                                        data-src="images/resource/author-thumb-3.jpg" alt=""></div>
                                <div class="comment-info">
                                    <h4 class="name">Jake Weary</h4>
                                    <div class="time">November 16, 2019 at 10:14 pm</div>
                                </div>
                                <div class="text">Codswallop down the pub Queen's English tomfoolery the BBC owt to do with
                                    me do one Elizabeth I don't want no agro show off show?</div>
                                <a href="#" class="reply-btn"><span class="arrow_back"></span> Reply</a>
                            </div>
                        </div>
                    </div>
                    @if (Auth::user())
                        <!--Comment Form-->
                        <div class="comment-form default-form">
                            <div class="group-title">
                                <h4>Leave a Comment</h4>
                            </div>

                            <form method="post" action="blog.html">
                                <div class="row clearfix">

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name *" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your Email *" required="">
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Your Comments *"></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                                class="btn-title">Post Comment</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif


                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <h3 class="sidebar-title">Latest Posts</h3>
                            @if (count($posts) > 0)
                                <div class="widget-content">

                                    <!--News Post-->
                                    @foreach ($posts as $post)
                                        <div class="news-post">
                                            <div class="post-thumb"><a href="/details/{{ $post->uuid }}"><img
                                                        class="lazy-image"
                                                        src="{{ asset('asset2/images/resource/image-spacer-for-validation.png') }}"
                                                        data-src="/storage/{{ $post->image }}" alt=""></a></div>
                                            <div class="date"><span class="fa fa-calendar-alt"></span>
                                                {{ $post->created_at->format('F j, Y') }}
                                            </div>
                                            <h4><a href="">{{ $post->title }} </a></h4>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <h3>No post</h3>
                            @endif
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget popular-tags">
                            <h3 class="sidebar-title">Popular Tags</h3>
                            <div class="widget-content">
                                <ul class="clearfix">
                                    <li><a href="">Cardro</a></li>
                                    <li><a href="">Software</a></li>
                                    <li><a href="">Fake alert</a></li>
                                    <li><a href="">cumbo</a></li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
