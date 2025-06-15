<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('title')</title>

<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets/images/el-favicon.jpg') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/el-favicon.jpg') }}" type="image/x-icon">

<!-- line awesome -->
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >


<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('js/respond.js') }}"></script><![endif]-->


</head>

<body>

<div class="page-wrapper">

    <!-- Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!-- Cursor End -->

    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="box"></div>
    </div> -->

    <!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">

                        <!-- Logo Box -->
                        <div class="header-lower">
                            <div class="auto-container">
                                <div class="inner-container">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">

                                          <!-- Logo Box -->
                                          <div class="logo-box" style="width: clamp(150px, 50%, 200px);
                                          margin: 0;
                                          padding: 10px 0 10px 10px;
                                          float: left;">
                  <a href="{{ url('/') }}" style="display: block;">
                      <img src="{{ asset('assets/images/el_roi-logo.png') }}"
                           alt="Company Logo"
                           title="Home"
                           style="width: 150%;
                                  height: auto;
                                  max-width: 120%;
                                  min-width: 100px;">
                  </a>
                </div>
                        <!-- End Logo Box -->

                        <!-- Nav Outer -->
                        <div class="nav-outer d-flex align-items-center flex-wrap">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        @foreach ($menus as $menu)
                                        <li class="{{$menu->type}}"><a href="{{ $menu->url}}">{{ $menu->name }}</a>
                                            @if($menu->Submenus->count() > 0)
                                                <ul>

                                                    @foreach ($menu->submenus->sortBy('order', SORT_ASC) as $submenu)
                                                    @if($submenu->name =='Our People')
                                                    <li><a href="{{ url("$submenu->url") }}">{{ $submenu->name }}</a></li>

                                                   @elseif($submenu->name !=='Our People')
                                                    <li><a href="{{ url("$submenu->url/$submenu->id") }}">{{ $submenu->name }}</a></li>
                                                    @endif
                                                @endforeach
                                                </ul>
                                            @endif
                                        </li>

                                    @endforeach
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- End Nav Outer -->

                        <!-- Outer Box -->
                        <div class="outer-box d-flex align-items-center flex-wrap">

                            <!-- Header Options Box -->
                            <div class="header-options_box d-flex align-items-center">

                                <!-- Search Btn -->
                                <div class="search-box-btn search-box-outer"><span class="icon"><img src="{{ asset('assets/images/icons/search-light.svg') }}" alt="" /></span></div>

                                <!-- Nav Btn -->
                                <div class="nav-btn navSidebar-button">
                                    <i class="flaticon-dots-menu"></i>
                                </div>

                            </div>

                            <!-- Header Button Box -->
                            <div class="header_button-box">
                                <a href="{{ url('/#quote') }}" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get a Quotes</span>
                                        <span class="text-two">Get a Quotes</span>
                                    </span>
                                </a>
                            </div>
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        </div>
                        <!-- End Outer Box -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-close-1"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/images/el_roi-logo.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Banner Two -->
    <section class="banner-two">
        {{-- <div class="banner-two_info">
            <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
            <span><a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></span>
        </div> --}}
        <div class="banner-two_socials mt-5">
            <a  class="fa-brands fa-fw" href="mailto:{{$contact->email}}"><i class="fa-solid fa-envelope"></i></a>
            <a  class="fa-brands fa-fw" href="tel:{{$contact->phone}}"><i class="fa-solid fa-phone"></i></a>
            <a class="fa-brands fa-facebook-f fa-fw" href="#"></a>
            <a class="fa-brands fa-instagram fa-fw" href="#"></a>
            <a class="fa-brands fa-twitter fa-fw" href="#"></a>
            <a class="fa-brands fa-youtube fa-fw" href="#"></a>
        </div>

        <!-- Video and Content Wrapper -->
        <div class="banner-two_video-wrapper" style="position: relative; width: 100%; height: auto;">
            <video autoplay muted loop playsinline style="width: 100%; height: auto; object-fit: cover;">
                <source src="{{ asset('assets/videos/combined-lincense.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Content Column -->
            <div class="banner-two_content" style="position: absolute; top: 50%; left: 5%; transform: translateY(-50%); z-index: 2; text-align: left;">
                <div class="banner-two_content-inner">
                    <div class="banner-two_title" style="background-color: #e0f7fa; color: #006064; padding: 15px; border-radius: 8px; animation: fadeInDown 3s ease-in-out infinite alternate;">
                        <span class="content-switcher" data-content="Discover Your Dream Space|Unleash Your Imagination|Create Timeless Memories">
                            Discover Your Dream Space
                        </span>
                    </div>
                    <div class="content-columns">
                        <div class="banner-two_column" style="display: none;">
                            <h1 class="banner-two_heading" style="font-size: clamp(24px, 5vw, 60px); animation: zoomInOut 6s ease-in-out infinite;">
                                <span style="background-color: #e0f7fa; color: #006064; padding: 10px; border-radius: 8px;">
                                    <span class="m-1">Experience Luxury</span>
                                    <span class="text-dark p-1"><br>Embrace Comfort</span>
                                </span>
                            </h1>
                            <div class="banner-two_text" style="background-color: #e0f7fa; color: #006064; padding: 10px; border-radius: 8px; animation: fadeInUpOut 6s ease-in-out infinite;">
                                Transforming Spaces—Crafting Memories That Last Forever.
                            </div>
                        </div>
                        <div class="banner-two_column" style="display: none;">
                            <h1 class="banner-two_heading" style="font-size: clamp(24px, 5vw, 60px); animation: zoomInOut 6s ease-in-out infinite;">
                                <span style="background-color: #e0f7fa; color: #006064; padding: 15px; border-radius: 8px;">
                                    <span class="m-1">Innovative Designs</span>
                                    <span class="text-dark p-1"><br>Tailored for You</span>
                                </span>
                            </h1>
                            <div class="banner-two_text" style="background-color: #e0f7fa; color: #006064; padding: 15px; border-radius: 8px; animation: fadeInUpOut 6s ease-in-out infinite;">
                                Redefining Spaces with Creativity and Precision.
                            </div>
                        </div>
                        <div class="banner-two_column" style="display: none;">
                            <h1 class="banner-two_heading" style="font-size: clamp(24px, 5vw, 60px); animation: zoomInOut 6s ease-in-out infinite;">
                                <span style="background-color: #e0f7fa; color: #006064; padding: 10px; border-radius: 8px;">
                                    <span class="m-1">Timeless Elegance</span>
                                    <span class="text-dark p-1"><br>Unmatched Quality</span>
                                </span>
                            </h1>
                            <div class="banner-two_text" style="background-color: #e0f7fa; color: #006064; padding: 10px; border-radius: 8px; animation: fadeInUpOut 6s ease-in-out infinite;">
                                Crafting Spaces That Inspire and Delight.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const columns = document.querySelectorAll('.banner-two_column');
                    let currentIndex = 0;

                    function showColumn(index) {
                        columns.forEach((column, i) => {
                            column.style.display = i === index ? 'block' : 'none';
                        });
                    }

                    showColumn(currentIndex);

                    setInterval(() => {
                        currentIndex = (currentIndex + 1) % columns.length;
                        showColumn(currentIndex);
                    }, 6000); // Switch every 6 seconds
                });
            </script>
        </div>

        <style>
            @keyframes fadeInDown {
                0% {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes zoomInOut {
                0%, 100% {
                    opacity: 0;
                    transform: scale(0.8);
                }
                50% {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            @keyframes fadeInUpOut {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }
                50% {
                    opacity: 1;
                    transform: translateY(0);
                }
                100% {
                    opacity: 0;
                    transform: translateY(-20px);
                }
            }

            @media (max-width: 768px) {
                .banner-two_column h1,
                .banner-two_column .banner-two_text {
                    margin-bottom: 10px;
                }

                .banner-two_column span {
                    padding: 8px;
                }
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const switcher = document.querySelector('.content-switcher');
                if (switcher) {
                    const contents = switcher.dataset.content.split('|');
                    let index = 0;

                    setInterval(() => {
                        index = (index + 1) % contents.length;
                        switcher.textContent = contents[index];
                    }, 6000); // Switch every 6 seconds
                }
            });
        </script>
    </section>
    <!-- End Banner Two -->



    @yield('content')




     <!-- Main Footer -->
     <footer class="main-footer style-two">
        <div class="main-footer_pattern" style="background-image: url({{ asset('assets/images/background/footer-1.png') }})"></div>
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget">
                                    <div class="footer-logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/images/el_roi-logo2.png') }}" alt="" title="" style="width: 70%; height:auto;"></a></div>
                                    {{-- <div class="footer-text">Lorem ipsum dolor sit amet consecte adipiscing elit Ut et massa mi. Aliquam  hendrerit urna.</div> --}}
                                    <div class="footer-location">
                                        <div class="footer-location_inner">
                                            <i class="flaticon-maps-and-flags"></i> {{$contact->address}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5 class="footer-title">About Company</h5>
                                    <ul class="footer-list">
                                        @foreach ($about->Sections as $about)
                                        <li><a href="{{ url('about#'.$about->url) }}">{{$about->name}}</a></li>
                                        @endforeach
                                        {{-- <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                        <li><a href="{{ url('pricing-plan') }}">Pricing Plan</a></li>
                                        <li><a href="{{ url('services') }}">Our Services</a></li>
                                        <li><a href="{{ url('contact') }}">Contact</a></li>
                                        <li><a href="{{ url('careers') }}">Careers</a></li>
                                        <li><a href="{{ url('faqs') }}">FAQS</a></li> --}}
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5 class="footer-title">
                                      {{$service->name}}
                                    </h5>
                                    <ul class="footer-list">
                                        @foreach ( $service->Submenus as $service )
                                        <li><a href="{{ url('service/'.$service->id ) }}">{{$service->name    }}</a></li>
                                        @endforeach

                                        {{-- <li><a href="{{ url('city/los-angeles') }}">Los Angeles</a></li>
                                        <li><a href="{{ url('city/new-jersey') }}">New Jersey</a></li>
                                        <li><a href="{{ url('city/russia') }}">Russia</a></li>
                                        <li><a href="{{ url('city/south-africa') }}">South Africa</a></li>
                                        <li><a href="{{ url('city/canada') }}">Canada</a></li>
                                        <li><a href="{{ url('city/germany') }}">Germany</a></li> --}}
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget subscribe-widget">
                                    <h5 class="footer-title">Subscribe Now!</h5>
                                    <!-- Newsletter Box -->
                                    <div class="newsletter-box">
                                        <form method="post" action="{{ url('subscribe') }}">
                                            <div class="form-group">
                                                <input type="email" name="search-field" value="" placeholder="Your Email" required>
                                                <button type="submit"><i class="flaticon-bell"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Social Box -->
                                    <div class="footer_socials">
                                        <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                        <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- End Widgets Section -->

		<!-- Footer Bottom -->
		<div class="footer-bottom centered">
			<div class="auto-container">
				<div class="copyright">Copyright &copy; 2025 @php date('Y')==2025?$till=' ':$till='- '.date('Y');
                 echo $till;
                    @endphp <a href="#">El-Roi</a> All Rights Reserved<br> Designed by <a href='https://arkuzcreo.com'>ArkuzCreo</a></div>
			</div>
		</div>

	</footer>
	<!-- End Main Footer -->

	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="flaticon-close"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->

	<!-- Sidebar Cart Item -->
    @include('include.sidebar_cart')

</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/backtotop.js')}}"></script>
<script src="{{asset('assets/js/odometer.js')}}"></script>
<script src="{{asset('assets/js/parallax-scroll.js')}}"></script>

<script src="{{asset('assets/js/gsap.min.js')}}"></script>
<script src="{{asset('assets/js/SplitText.min.js')}}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>

<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/nav-tool.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('assets/js/element-in-view.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
{{-- recapcha --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    document.getElementById("my-form").addEventListener("submit", function(event) {
        var recaptchaValue = document.getElementById("g-recaptcha-response").value;
        if (recaptchaValue === "") {
            event.preventDefault(); // Prevent submission
            alert("Please complete the reCAPTCHA");
        }
    });
    </script>
</body>
</html>
