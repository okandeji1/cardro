<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cardro Software</title>
    <!-- Stylesheets -->
    <link href="{{ asset('asset2/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('asset2/css/style.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('asset2/css/responsive.css') }}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{ asset('asset2/css/color.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('asset2/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('asset2/images/favicon.ico') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!-- Main Header -->
        @include('partials.site.header')
        <!-- End Main Header -->

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form>
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="reset" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>

                    <br>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="l#">Product</a></li>
                        <li><a href="l#">Post</a></li>
                        <li><a href="l#">Blog</a></li>
                        <li><a href="l#">Softwares</a></li>
                    </ul>

                </div>

            </div>
        </div>


        <!-- Page Content -->
        @yield('content')
        <!-- End Page Content -->

        <!-- Main Footer -->
        @include('partials.site.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

    <script src="{{ asset('asset2/js/jquery.js') }}"></script>
    <script src="{{ asset('asset2/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset2/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('asset2/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('asset2/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('asset2/js/owl.js') }}"></script>
    <script src="{{ asset('asset2/js/appear.js') }}"></script>
    <script src="{{ asset('asset2/js/wow.js') }}"></script>
    <script src="{{ asset('asset2/js/lazyload.js') }}"></script>
    <script src="{{ asset('asset2/js/scrollbar.js') }}"></script>
    <script src="{{ asset('asset2/js/script.js') }}"></script>

</body>

</html>
