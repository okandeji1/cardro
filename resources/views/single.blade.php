@extends('layouts.site')
<style>
    .paragraph {
        white-space: pre-wrap;
    }

</style>
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
                                    <li><a href="#"><span class="icon fa fa-user"></span> Cardro Software</a></li>
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
                                        style="width: 900px; height: 400px" data-src="/storage/{{ $post->image }}" alt="">
                                </figure>
                                <br>
                                <p class="paragraph">{{ $post->description }} </p>
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
                                </ul>
                            </div>
                        </div>

                    </div>

                    {{-- @include('post.partials.replies', ['comments' => $post->comments,
                    'post_id' => $post->id])
                    --}}

                    <!-- Comments Area -->
                    @include('partials.site.replies', ['comments' => $post->comments,
                    'post_id' => $post->id])

                    @if (Auth::user())
                        <!--Comment Form-->
                        <div class="comment-form default-form">
                            <div class="group-title">
                                <h4>Leave a Comment</h4>
                            </div>
                            @include('partials.user.messages')

                            <form method="post" action="{{ route('comment.add') }}">
                                @csrf
                                <div class="row clearfix">

                                    {{-- <div class="col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name *" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your Email *" required="">
                                    </div> --}}

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Your Comments *" required></textarea>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
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
                                            <h4><a href="/details/{{ $post->uuid }}">{{ $post->title }} </a></h4>
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
