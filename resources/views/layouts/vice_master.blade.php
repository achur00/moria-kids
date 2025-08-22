<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">

    <!-- Open Graph (Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="Our Services | Moriah Care">
    <meta property="og:description" content="Discover how Moriah Care provides tailored residential services for children with complex needs.">
    <meta property="og:image" content="https://yourdomain.com/assets/img/moriah-og-services.jpg">
    <meta property="og:url" content="https://yourdomain.com/services">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Our Services | Moriah Care">
    <meta name="twitter:description" content="Explore specialised care services designed to support the growth and healing of every child at Moriah Care.">
    <meta name="twitter:image" content="https://yourdomain.com/assets/img/moriah-og-services.jpg">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="assets/img/moriah-favicon2.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/img/moriah-favicon2.png') }}" type="image/x-icon">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
      /* Custom text shadow utility classes */
.text-shadow {
  text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.text-shadow-sm {
  text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
}

.text-shadow-lg {
  text-shadow: 4px 4px 8px rgba(0,0,0,0.4);
}
        </style>

</head>

<body>


    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--************* Code Start From Here ************* -->

    <!--========== Preloader =========-->
    {{-- <div class="preloader">
        <button class="vs-btn wave-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <svg id="preloader" xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128">
                <path id="Path_1" data-name="Path 1"
                    d="M64,0,40.08,21.9a10.98,10.98,0,0,0-5.05,8.75C34.37,44.85,64,60.63,64,60.63Z" fill="#ffb118" />
                <path id="Path_2" data-name="Path 2"
                    d="M128,64,106.12,40.1a10.97,10.97,0,0,0-8.75-5.05C83.17,34.4,67.4,64,67.4,64Z" fill="#80c141" />
                <path id="Path_3" data-name="Path 3"
                    d="M63.7,69.73a110.97,110.97,0,0,1-5.04-20.54c-1.16-8.7.68-14.17.68-14.17H97.37s-4.3-.86-14.47,10.1C79.84,48.42,63.7,69.7,63.7,69.7Z"
                    fill="#cadc28" />
                <path id="Path_4" data-name="Path 4"
                    d="M64,128l23.9-21.88a10.97,10.97,0,0,0,5.05-8.75C93.6,83.17,64,67.4,64,67.4Z" fill="#cf171f" />
                <path id="Path_5" data-name="Path 5"
                    d="M58.27,63.7a110.97,110.97,0,0,1,20.54-5.04c8.7-1.16,14.17.68,14.17.68V97.37s.86-4.3-10.1-14.47C79.58,79.84,58.3,63.7,58.3,63.7Z"
                    fill="#ec1b21" />
                <path id="Path_6" data-name="Path 6"
                    d="M0,64,21.88,87.9a10.97,10.97,0,0,0,8.75,5.05C44.83,93.6,60.6,64,60.6,64Z" fill="#018ed5" />
                <path id="Path_7" data-name="Path 7"
                    d="M64.3,58.27a110.97,110.97,0,0,1,5.04,20.54c1.16,8.7-.68,14.17-.68,14.17H30.63s4.3.86,14.47-10.1c3.06-3.3,19.2-24.58,19.2-24.58Z"
                    fill="#00bbf2" />
                <path id="Path_8" data-name="Path 8"
                    d="M69.73,64.34a111.023,111.023,0,0,1-20.55,5.05c-8.7,1.14-14.15-.7-14.15-.7V30.65s-.86,4.3,10.1,14.5c3.3,3.05,24.6,19.2,24.6,19.2Z"
                    fill="#f8f400" />
                <circle id="Ellipse_1" data-name="Ellipse 1" cx="2.03" cy="2.03" r="2.03"
                    transform="translate(61.97 61.97)" />
            </svg>
        </div>
    </div> --}}

    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose border-theme text-theme"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>

    <!-- Side menu start -->
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="vs-widget-about">
                    <div class="about-logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/img/moriah-logo.png') }}" alt="Moriah Care">
                        </a>
                    </div>
                    <p class="about-text">Transforming Young Lives with Safe Homes, Healing Care, and a Future Full of Possibility.</p>
                    <div class="multi-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        {{-- <a href="#"><i class="fab fa-pinterest-p"></i></a> --}}
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="widget footer-widget">
                <h3 class="widget_title">Contact Us</h3>
                <div class="vs-widget-contact">
                    <p class="footer-info"><i class="fas fa-map-marker-alt"></i>{{$contact->address}}</p>
                    <p class="footer-info"><i class="fas fa-envelope"></i><a
                            href="mailto:info@Knirpseteam.com">{{$contact->email}}</a></p>
                    <p class="footer-info"><i class="fas fa-phone-alt"></i><a href="tel:{{$contact->mobile}}">{{$contact->mobile}}</a></p>
                </div>
            </div>

            <div class="widget footer-widget">
                <h4 class="widget_title">Events</h4>
                <!-- Stylish "No Event" Card (Bootstrap Responsive) -->
                <div class="card text-center shadow-lg border-0 mx-auto my-4 " style="max-width: 350px; background: linear-gradient(135deg, #fe5c02 0%, #ffb347 100%); color: #fff; border-radius: 15px;">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="d-inline-block p-3 rounded-circle" style="background: rgba(255,255,255,0.15);">
                                <svg width="40" height="40" fill="none" stroke="#fff" stroke-width="2" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10" stroke="#fff" stroke-width="2" fill="none"/>
                                    <path d="M8 12h8M12 8v8" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </span>
                        </div>
                        <h2 class="h5 fw-bold mb-2">No Event</h2>
                        <p class="mb-0 small fw-bold text-white">There are currently no upcoming events. Please check back soon!</p>
                    </div>
                </div>
                <style>
                @media (max-width: 480px) {
                    .card.mx-auto {
                        max-width: 95vw !important;
                        padding-left: 0.5rem;
                        padding-right: 0.5rem;
                    }
                    .card-body .p-3 {
                        padding: 0.6rem !important;
                    }
                    .card-body .h5 {
                        font-size: 1.1rem;
                    }
                    .card-body .small {
                        font-size: 0.95rem;
                    }
                }
                </style>
            </div>
        </div>
    </div>
    <!-- Side menu end -->
    <!--vs-mobile-menu start-->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="{{ asset('assets/img/moriah-logo.png') }}" alt="Moriah Care"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    @foreach ($allMenus as $menu)
                        <li class="{{ $menu->has_children ? 'menu-item-has-children' : '' }}">
                            <a href="{{ url($menu->url) }}">{{ ucfirst($menu->name) }}</a>
                            @if ($menu->submenu->count() > 0)
                            @foreach ($menu->submenu as $submenu)
                            <ul class="sub-menu">
                            <!-- service as submenu -->
                            @if ($submenu->services->count() > 0)
                                @foreach ($submenu->services as $service)
                                <li><a href="{{  url('service/'.$service->id)  }}">{{$service->name}}</a></li>
                                @endforeach
                            @endif
                            </ul>
                            @endforeach
                        @endif      
                        </li>
                    @endforeach
                </ul>
            </div><!-- Menu Will Append With Javascript -->
        </div>
    </div>
    <!--vs-mobile-menu end-->

    <!--======== Header ========-->
    <header class="vs-header">
        <!--header-top-wrapper start-->
        <div class="header-top-area d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li><i class="fal fa-clock"></i>
                                    @php
                                        echo date('g:i a') . 'Mon - Sun';
                                    @endphp
                                    
                                </li>
                                <li><i class="fas fa-phone-alt"></i><a href="tel:{{ $contact->mobile }}">{{ $contact->mobile }}</a></li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $contact->address }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-skype"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header-top-wrapper end-->
        <!--vs-main-menu-wrapper start-->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="header-menu-area">
                    <div class="container position-relative">
                        <div class="row gx-20 align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/img/moriah-logo.png') }}" alt="Moriah Care">
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu menu-style1 d-none d-lg-inline-block">
                                    <ul>
                                        @foreach ($allMenus as $menu)
                                            <li class="{{ $menu->has_children ? 'menu-item-has-children' : '' }}">
                                                <a href="{{ url($menu->url) }}">{{ ucfirst($menu->name) }}</a>
                                                @if ($menu->submenu->count() > 0)
                                                    @foreach ($menu->submenu as $submenu)
                                                        <ul class="sub-menu">
                                                            <!-- service as submenu -->
                                                            @if ($submenu->services->count() > 0)
                                                                @foreach ($submenu->services as $service)
                                                                    <li><a
                                                                            href="{{  url('service/'.$service->id)  }}">{{ $service->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            @endif
                                                        </ul>
                                                    @endforeach
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                                <button type="button" class="vs-menu-toggle d-block d-lg-none"><i
                                        class="far fa-bars"></i> Menu</button>
                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <div class="header-button">
                                    <a href="contact.html" class="vs-btn wave-btn">Book a visit</a>
                                    <button type="button" class="searchBoxToggler icon-btn"><i
                                            class="far fa-search"></i></button>
                                    <button type="button" class="sideMenuToggler icon-btn"><i
                                            class="fal fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--vs-main-menu-wrapper end-->
    </header>
    <!--======== / Header ========-->

    <!--======== About Section ========-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/'.$page->image) }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-shadow-lg">{{ $page->name }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active text-shadow-lg">{{ $page->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    
    <!--======== / About Section ========-->

    @yield('content')

                     <!--==============================
                Footer Area
                ==============================-->
                <footer class="footer-wrapper footer-layout2">
                    <div class="shape-before"><img src="{{ asset('assets/img/shape/footer-before.png') }}" alt="shape"></div>
                    <div class="shape-mockup movingX d-none d-hd-block" data-bottom="37%" data-left="6%"><img src="{{ asset('assets/img/icon/cloud-2.png') }}" alt="shapes"></div>
        <div class="shape-mockup moving d-none d-lg-block" data-top="17%" data-right="7%"><img src="{{ asset('assets/img/icon/car-4.png') }}" alt="shapes"></div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- About Widget-->
                    <div class="col-xl-auto col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="widget footer-widget">
                            <div class="vs-widget-about">
                                <div class="about-logo">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/img/moriah-logo.png') }}" alt="Moriah-care">
                                    </a>
                                </div>
                                <p class="about-text">Transforming Young Lives with Safe Homes, Healing Care, and a Future Full of Possibility.</p>
                                <div class="multi-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget-->
                    <div class="col-xl-auto col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="widget footer-widget widget_nav_menu">
                            <h4 class="widget_title">Menu</h4>
                            <ul class="menu">
                                @foreach($allMenus as $menu)
                                    <li><a href="{{ url($menu->url) }}">{{ ucfirst($menu->name) }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-xl-auto col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        {{-- <div class="widget footer-widget">
                            <h4 class="widget_title">News Feed</h4>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/blog-thumb-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-alt"></i> 25th March, 2024</a></div>
                                        <h4 class="post-title"><a href="blog-details.html">User’s Pepare Using Story Guide Yes</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/blog-thumb-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-alt"></i> 25th March, 2024</a></div>
                                        <h4 class="post-title"><a href="blog-details.html">How to prepare child for examination</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-xl-auto col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="vs-widget-contact">
                                <p class="footer-info"><i class="fas fa-map-marker-alt"></i>256 Lonely Street Ave, Brooklyn CA, United State</p>
                                <p class="footer-info"><i class="fas fa-envelope"></i><a href="mailto:info@Moriah Careteam.com">info@Moriah Careteam.com</a></p>
                                <p class="footer-info"><i class="fas fa-phone-alt"></i><a href="tel:+25631562156236">+256 (3156) 2156 236</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">

                <p class="copyright">&copy; Copyright @php echo date('Y') @endphp Moriah Care Service. <br>Designed by <a href="https://www.arkuzzcreo.com">Arkuzcreo</a>.</p>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->


    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/jquery-3.5.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Counter up  -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Parallax  -->
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <!-- Custom Carousel -->
    <script src="{{ asset('assets/js/vscustom-carousel.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- WOW JS (Animation JS) -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Form Js -->
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>