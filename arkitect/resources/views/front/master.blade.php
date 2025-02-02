<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Best Law Chamber - M. Roy & Associates</title>
    <meta name="author" content="Ensaf">
    <meta name="description" content="Ensaf-html - Law Agency HTML Template">
    <meta name="keywords" content="Ensaf-html - Law Agency HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('front') }}/assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('front') }}/assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('front') }}/assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front') }}/assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('front') }}/assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('front') }}/assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('front') }}/assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('front') }}/assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front') }}/assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('front') }}/assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front') }}/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('front') }}/assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front') }}/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('front') }}/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('front') }}/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/magnific-popup.min.css">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/swiper-bundle.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/style.css">

</head>

<body class="">

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div>
    <div class="color-scheme-wrap active">
        <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
        <h3 class="color-scheme-wrap-title text-center">Color Switcher</h3>
        <h4 class="color-scheme-wrap-subtitle text-center">Theme Color</h4>
        <div class="color-switch-btns">
            <button data-color="#1A685B"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#f34e3a"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FF4857"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#3843C1"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FF7E02"><i class="fa-solid fa-droplet"></i></button>
        </div>
        <h4 class="color-scheme-wrap-subtitle mt-20 text-center">Secondary Color</h4>
        <div class="secondary-color-switch-btns">
            <button data-secondary-color="#FFAC00"><i class="fa-solid fa-droplet"></i></button>
            <button data-secondary-color="#F41E1E"><i class="fa-solid fa-droplet"></i></button>
            <button data-secondary-color="#f34e3a"><i class="fa-solid fa-droplet"></i></button>
            <button data-secondary-color="#FF4857"><i class="fa-solid fa-droplet"></i></button>
            <button data-secondary-color="#3843C1"><i class="fa-solid fa-droplet"></i></button>
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-info d-none d-lg-block ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="{{route('home')}}"><img src="{{ asset('front') }}/assets/img/logo.png" alt="Ensaf-html"></a>
                    </div>
                    <p class="about-text">We provide specialized winterization services to safeguard your pool during the off-season, and when spring arrives, we handle the thorough opening process.</p>
                    <div class="th-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Steps to Pursue a Career as a Legal Project Manager.</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html">6 Sep, 2025</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">The advantages of choosing a public defender.</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html">6 Sep, 2025</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Technology is revolutionizing the legal sector.</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html">6 Sep, 2025</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget newsletter-widget  ">
                <h3 class="widget_title">Newsletter</h3>
                <p class="footer-text">Sign up to get update news about us</p>
                <form class="newsletter-form">
                    <input class="form-control" type="email" placeholder="Enter Email" required="">
                    <button type="submit" class="th-btn style2">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div><!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{route('home')}}"><img src="{{ asset('front') }}/assets/img/logo.png" alt="Ensaf-html"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('practice')}}">Practice Area</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('client')}}">Clients</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('attorney')}}">Advocates</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('terms')}}">Support Team</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('gallery')}}">Gallery</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('blog')}}">Blog</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fa-regular fa-phone"></i> <a href="tel:+8801791404011">+8801791404011 , +8801833780455, Phone: +8802223385673</a></li>
                                <li><i class="fa-sharp fa-regular fa-envelope"></i> <a href="moloy.advocate@gmail.com">moloy.advocate@gmail.com</a></li>
                                <!-- <li><i class="fal fa-location-dot"></i> <a href="https://www.google.com/maps/place/Tropicana+Tower,+45+Topkhana+Road,+Dhaka+1000/@23.730477,90.409228,19z">Suite# 13E, Tropicana Tower (13th Floor), 45 Topkhana Road, Dhaka-1000</a></li> -->
                            </ul>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="header-links">
                            <div class="social-links">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <div class="logo-bg"></div>
                                <a href="{{route('home')}}"><img src="{{ asset('front') }}/assets/img/logo.png" alt="Ensaf-html"></a>
                            </div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <nav class="main-menu d-none d-lg-inline-block me-xl-auto">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('about')}}">About Us</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('practice')}}">Practice Area</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('client')}}">Clients</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('attorney')}}">Advocates</a>
                                    </li>
                                    <!-- <li class="menu-item-has-children">
                                        <a href="{{route('terms')}}">Support Team</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                       <a href="{{route('gallery')}}">Gallery</a>
                                    </li> -->
                                    <li class="menu-item-has-children">
                                        <a href="{{route('blog')}}">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('blog')}}">Blogs</a></li>
                                            <li><a href="{{route('gallery')}}">Gallery</a></li>
                                            <li><a href="{{route('terms')}}">Support Team</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <button type="button" class="icon-btn searchBoxToggler"><i class="far fa-magnifying-glass"></i></button>
                                <a href="{{route('contact')}}" class="th-btn style4">Free consultation <i class="far fa-arrow-right-long"></i></a>
                                <button type="button" class="icon-btn sideMenuInfo">
                                    <i class="fa-solid fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('body')
    <!--==============================
	Footer Area
==============================-->
    <footer class="footer-wrapper footer-layout1">
        <div class="widget-area bg-footer-color">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto footer-border-right">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Our Pages</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                <li>
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{route('practice')}}">Practice Area</a>
                                    </li>
                                    <li>
                                        <a href="{{route('client')}}">Clients</a>
                                    </li>
                                    <li>
                                        <a href="{{route('attorney')}}">Advocates</a>
                                    </li>
                                    <li>
                                        <a href="{{route('terms')}}">Support Team</a>
                                    </li>
                                    <li>
                                        <a href="{{route('gallery')}}">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{route('blog')}}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto footer-border-right">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Our Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="service-details.html">Real Estate Law</a></li>
                                    <li><a href="service-details.html">Personal Injury</a></li>
                                    <li><a href="service-details.html">Corporate Law</a></li>
                                    <li><a href="service-details.html">Criminal Law</a></li>
                                    <li><a href="service-details.html">Health Care</a></li>
                                    <li><a href="service-details.html">Family Law</a></li>
                                    <li><a href="service-details.html">Others Law</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 footer-border-right">
                        <div class="widget footer-widget text-xl-center text-start">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{route('home')}}"><img src="{{ asset('front') }}/assets/img/footer-round-logo.svg" alt="Ensaf-html"></a>
                                </div>
                                <p class="about-text">The services of ‘ M. Roy & Associates’ are the offspring of the sincere, well-thought-out and meticulous teamwork of its associates, who have embarked on the mission to serve the clients with great zeal and vigor and race-track of their professional services from ethics.</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto footer-border-right">
                        <div class="widget footer-widget">
                            <div class="th-widget-contact">
                                <div class="info-box">
                                    <div class="info-box_icon">
                                        <i class="fa-regular fa-location-dot"></i>
                                    </div>
                                    <div class="info-contnt">
                                        <h4 class="footer-info-title">Location</h4>
                                        <p class="info-box_text">Suite# 13E, Tropicana Tower (13th Floor), 45 Topkhana Road, Dhaka-1000</p>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon">
                                        <i class="fa-regular fa-phone"></i>
                                    </div>
                                    <div class="info-contnt">
                                        <h4 class="footer-info-title">Phone</h4>
                                        <p class="info-box_text">
                                            <a href="tel: +8801791404011" class="info-box_link"> +8801791404011</a>
                                            <a href="tel:+8801833780455" class="info-box_link">+8801833780455</a>
                                            <a href="tel:+8802223385673" class="info-box_link">+8802223385673</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="info-contnt">
                                        <h4 class="footer-info-title">Email</h4>
                                        <p class="info-box_text">
                                            <a href="mailto:moloy.advocate@gmail.com " class="info-box_link">moloy.advocate@gmail.com </a>
                                            <a href="mailto:moloy.advocate@mroyassociates.com" class="info-box_link">moloy.advocate@mroyassociates.com</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-12">
                        <p class="copyright-text text-center">Copyright <i class="fal fa-copyright"></i> 2025 <a href="{{route('home')}}">Design By M.Roy & Associates</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->

    <!-- Jquery -->
    <script src="{{ asset('front') }}/assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('front') }}/assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('front') }}/assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('front') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="{{ asset('front') }}/assets/js/jquery.counterup.min.js"></script>
    <!-- Tilt JS -->
    <script src="{{ asset('front') }}/assets/js/tilt.jquery.min.js"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('front') }}/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('front') }}/assets/js/isotope.pkgd.min.js"></script>

    <!-- Main Js File -->
    <script src="{{ asset('front') }}/assets/js/main.js"></script>
</body>

</html>