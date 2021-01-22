@extends('layouts.site')
@section('content')
    <!-- Page Banner Section -->
    {{-- <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('images/background/bg-banner-1.jpg')"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Home</h1>
            <ul class="bread-crumb clearfix">
                <li class="active">Home</li>
            </ul>
        </div>

    </section> --}}
    <!--End Banner Section -->


    <!--Sidebar Page Container-->
    <div class="sidebar-page-container shop-page">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="our-shop">
                        <div class="shop-upper-box clearfix">
                            <div class="items-label">Showing <span>1-9 of 20</span> Results</div>
                            <div class="layout-mode"><a class="thumb-view active" href="#"><span
                                        class="flaticon-shape"></span></a><a class="list-view" href="#"><span
                                        class="flaticon-menu"></span></a></div>
                            <div class="sort-by">
                                <select class="custom-select-box">
                                    <option>Default Sorting</option>
                                    <option>Price: Lowest First</option>
                                    <option>Price: Highest First</option>
                                    <option>Ascending</option>
                                    <option>Descending</option>
                                </select>
                            </div>
                        </div>

                        @if (count($products) > 0)
                            <div class="row clearfix">

                                <!--Shop Item-->
                                @foreach ($products as $product)

                                    <div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img class="lazy-image"
                                                    src="asset2/images/resource/image-spacer-for-validation.png"
                                                    data-src="/storage/{{ $product->image }}" alt="" />
                                                <div class="overlay-box">
                                                    <ul class="option-box">
                                                        <li><a href="#"><span class="far fa-heart"></span></a></li>
                                                        <li><a href="/cart/{{ $product->uuid }}"><span
                                                                    class="fa fa-shopping-bag"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tag-banner">New</div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="/cart/{{ $product->uuid }}">{{ $product->name }}</a></h3>
                                                <div class="price">&#8358;{{ number_format($product->price, 2) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <h3>No Product</h3>
                        @endif

                        <div class="pagination-box">
                            <ul class="styled-pagination text-center">
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12 b">
                    <aside class="sidebar shop-sidebar">

                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <h3 class="sidebar-title">Search</h3>
                            <form>
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                                    <button type="reset"><span class="icon flaticon-search-1"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-products">
                            <h3 class="sidebar-title">Popular Posts</h3>
                            @if (count($posts) > 0)

                                <div class="widget-content">

                                    <!--Product-->
                                    @foreach ($posts as $post)

                                        <div class="product">
                                            <div class="post-thumb"><a href="/details/{{ $post->uuid }}"><img
                                                        class="lazy-image"
                                                        src="asset2/images/resource/image-spacer-for-validation.png"
                                                        data-src="/storage/{{ $post->image }}" alt=""></a></div>
                                            <h4><a href="/details/{{ $post->uuid }}">{{ $post->title }}</a></h4>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <h3>No post available</h3>
                            @endif
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
