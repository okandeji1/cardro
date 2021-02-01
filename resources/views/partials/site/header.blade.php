<header class="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left">
                    <ul class="social-links clearfix">
                        <li class="social-title">Follow Us:</li>
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        {{-- ?text=I'm%20interested%20in%20your%20car%20for%20sale --}}
                        <li><a href="https://wa.me/message/YMN4AKVNHI2EP1?text=I'm%20interested%20in%20your%20cardro%20software"
                                target="_blank"><span class="fab fa-whatsapp"></span></a>

                        </li>
                    </ul>
                </div>

                <div class="top-right">
                    <ul class="info clearfix">
                        <li class="search-btn"><button type="button" class="theme-btn search-toggler"><span
                                    class="fa fa-search"></span></button></li>
                        <li><a href="tel:12345615523"><span class="icon fa fa-phone-alt"></span> Call:
                                &nbsp;+12053418168 </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="/" title="cardro software">
                            <h4 class="text-white text-capitalize">cardro software</h4>
                        </a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="/">Home</a>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Services</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    @if (Auth::user())
                        <div class="link-box clearfix ml-3">
                            <div class="cart-link"><a href="/logout" class="theme-btn btn-style-one text-danger"><span
                                        class="fa fa-sign-out-alt"></span></a>
                            </div>
                        </div>
                        <div class="link-box clearfix ml-3">
                            <div class="cart-link"><a href="/user-dashboard" class="theme-btn btn-style-one"><span
                                        class="fa fa-tachometer-alt"></span></a></div>
                        </div>
                    @endif
                    <div class="link-box clearfix">
                        <div class="cart-link"><a href="#" class="theme-btn btn-style-one"><span
                                    class="icon flaticon-paper-bag"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="/" title="cardro software">
                    <h4 class="text-green text-capitalize">cardro software</h4>
                </a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="/"><img src="{{ asset('asset2/images/logo.png') }}" alt="" title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
