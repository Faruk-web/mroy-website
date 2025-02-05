@extends('front.master')

@section('title')
    Home
@endsection
@section('body')
    <!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-1" id="hero">

<div class="shape-mockup hero-img-shape-1">
    <div class="logo-icon-wrap">
        <div class="logo-icon">
            <img src="{{ asset('front') }}/assets/img/icon/logo-icon.png" alt="img">
        </div>
        <div class="logo-icon-wrap__text">
            <span class="logo-animation">Best Lawyer For You</span>
        </div>
    </div>
</div>

<div class="th-hero-bg" data-bg-src="{{ asset('front') }}/assets/img/bg/hero_bg_1_1.jpg">
    <img src="{{ asset('front') }}/assets/img/bg/hero1-overlay.png" alt="Hero overlay">
</div>

<div class="hero-1-scroll-icon-bg-shape scroll-down">
    <div class="hero-1-scroll-icon-wrap">
        <a href="#about-sec">
            <div class="shape-thumb">
                <div class="icon-btn">
                    <i class="fa-sharp fa-solid fa-arrow-down"></i>
                </div>
                <img src="{{ asset('front') }}/assets/img/shape/hero-1-scroll-icon.png" alt="Image">
            </div>
        </a>
    </div>
</div>

<div class="swiper th-slider " id="heroSlidee1" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
    <div class="swiper-wrapper">
    @foreach($Slider as $item)
        <div class="swiper-slide">
            <div class="hero-inner hero-style1">
                <div class="container">
                    <div class="row  gy-4 align-items-center">
                        <div class="col-xl-7 col-lg-7">
                            <span class="sub-title" data-ani="slideinup" data-ani-delay="0.2s">The Best Law Chamber</span>
                            <div data-ani="slideinup" data-ani-delay="0.4s">
                                <h1 class="hero-title">Welcome to M. Roy & Associates
                                </h1>
                                <div class="hero-title">Results
                                    <span class="client-group-wrap">
                                        <span class="client-group-wrap__content">
                                            <span class="client-group-wrap__box-title">
                                                We have to <span><span class="counter-number">2</span>k+</span>
                                                Happy Client
                                            </span>
                                            <span class="client-group-wrap__box-review">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <span>4.5/5(<span class="counter-number">35</span>k<span class="plus">+</span> Reviews)</span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="btn-group justify-content-center" data-ani="slideinup" data-ani-delay="0.6s">
                                <a href="contact.html" class="th-btn">Contact us <i class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="hero-img">
                                <div class="img-main" data-ani="slideinrighthero" data-ani-delay="0.8s">
                                    <img src="{{asset($item->image)}}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     @endforeach
    </div>
    <div class="slider-pagination"></div>
</div>
</div>
<!--======== / Hero Section ========--><!--==============================
About Area  
==============================-->

<div class="about-1-wrapper space bg-smoke2" id="about-sec">
        <div class="shape-mockup jump" data-left="0%" data-bottom="0%">
            <img src="{{ asset('front') }}/assets/img/shape/about1-left-shape.png" alt="image">
        </div>
        <div class="shape-mockup jump" data-top="11%" data-right="4%">
            <img src="{{ asset('front') }}/assets/img/shape/about1-right-top.png" alt="image">
        </div>
        <div class="shape-mockup jump-reverse d-none d-md-block" data-right="0" data-bottom="4%">
            <img src="{{ asset('front') }}/assets/img/shape/about1-right-bottom.png" alt="image">
        </div>
        <div class="container">
            <div class="row gy-40 gx-60 align-items-center">
                <div class="col-xl-7 mb-xl-0">
                    <div class="img-box1 about-1">
                        <div class="shape-mockup logo-shape">
                            <div class="logo-icon-wrap">
                                <h4 class="logo-icon">
                                    <img src="{{ asset('front') }}/assets/img/icon/logo-icon-white.png" alt="img">
                                </h4>
                                <div class="logo-icon-wrap__text bg-theme2">
                                    <span class="logo-animation">Best Lawyer For You</span>
                                </div>
                            </div>
                        </div>
                        <div class="img1">
                            <img class="tilt-active" src="{{ asset('front') }}/assets/img/about/about_left.jpg" alt="Image">
                        </div>
                        <div class="img2">
                            <div class="img2-top">
                                <img class="tilt-active" src="{{ asset('front') }}/assets/img/about/about-1-right.jpg" alt="Image">
                            </div>
                            <div class="img2-bottom">
                                <img class="tilt-active" src="{{ asset('front') }}/assets/img/about/about-1-right-2.jpg" alt="Image">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="title-area mb-25">
                        <span class="sub-title before-none">About Us</span>
                        <h2 class="sec-title">A Legacy of Legal Excellence</h2>
                        <p class="sec-text">Our team of experienced attorneys has a diverse range of expe rtise, covering a wide spectrum of legal areas. We specialize in corporate law, family law.</p>
                    </div>
                    <div class="checklist style2 mb-40">
                        <ul>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Committed to excellence in legal practice.</li>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Act with honesty and uphold ethical principles. </li>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Road Test Preparation with 98% success</li>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Meeting clients' needs is our priority.</li>
                        </ul>
                    </div>
                    <div>
                        <a href="about.html" class="th-btn style4">More About <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Counter Area  
==============================-->
    <div class="counter-sec1 " data-pos-for=".about-1-wrapper" data-sec-pos="top-half">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="{{ asset('front') }}/assets/img/icon/counter_1_1.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> 10 </span>k <span class="plus-simple">+</span></h4>
                        <p class="box-text">Case Done</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="{{ asset('front') }}/assets/img/icon/counter_1_2.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> 12 </span>k <span class="plus-simple">+</span></h4>
                        <p class="box-text">Expert Attorneys</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="{{ asset('front') }}/assets/img/icon/counter_1_3.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> 15 </span>k <span class="plus-simple">+</span></h4>
                        <p class="box-text">Happy Client</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="{{ asset('front') }}/assets/img/icon/counter_1_4.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> 20 </span>k <span class="plus-simple">+</span></h4>
                        <p class="box-text">Award Winning</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div><!--==============================
Service Area  
==============================-->
    <section class="th-service-1 overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8">
                    <div class="title-area text-center">
                        <span class="sub-title justify-content-center">What We Do</span>
                        <h2 class="sec-title">Legal Services We Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="shape-mockup service_card-bg-1">
                            <img src="{{ asset('front') }}/assets/img/bg/service_card-bg-1_1.png" alt="shape img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('front') }}/assets/img/icon/service_card_1_1.svg" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="{{route('service.deatils',1)}}">Criminal Law</a></h3>
                            <p class="box-text">Defense representations for more various criminal charges. Investigations and evidence analysis. Bail applications and.</p>
                        </div>
                        <a href="{{route('service.deatils',1)}}" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="shape-mockup service_card-bg-1">
                            <img src="{{ asset('front') }}/assets/img/bg/service_card-bg-1_2.png" alt="shape img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('front') }}/assets/img/icon/service_card_1_2.svg" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="{{route('service.deatils',2)}}">Corporate Law</a></h3>
                            <p class="box-text">Legal advocacy for diverse and the of Conducting in-depth think and reviewing evidence filing bail of and.</p>
                        </div>
                        <a href="{{route('service.deatils',2)}}" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="shape-mockup service_card-bg-1">
                            <img src="{{ asset('front') }}/assets/img/bg/service_card-bg-1_3.png" alt="shape img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('front') }}/assets/img/icon/service_card_1_3.svg" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="{{route('service.deatils',3)}}">Family Law</a></h3>
                            <p class="box-text">Expert defense strategies for variety of criminal cases. Comprehensive evidence case analysis and in hearings.</p>
                        </div>
                        <a href="{{route('service.deatils',3)}}" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="shape-mockup service_card-bg-1">
                            <img src="{{ asset('front') }}/assets/img/bg/service_card-bg-1_4.png" alt="shape img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('front') }}/assets/img/icon/service_card_1_4.svg" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="{{route('service.deatils',4)}}">Real Estate Law</a></h3>
                            <p class="box-text">Representation in numerous criminal matters, including detailed invest. Assistance with bail procedures eval.</p>
                        </div>
                        <a href="{{route('service.deatils',4)}}" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="shape-mockup service_card-bg-1">
                            <img src="{{ asset('front') }}/assets/img/bg/service_card-bg-1_5.png" alt="shape img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('front') }}/assets/img/icon/service_card_1_5.svg" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="service-details.html">Personal Injury Law</a></h3>
                            <p class="box-text">Professional legal defense for different types of criminal accusations. Careful examination of case details.</p>
                        </div>
                        <a href="service-details.html" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="shape-mockup service_card-bg-1">
                            <img src="{{ asset('front') }}/assets/img/bg/service_card-bg-1_6.png" alt="shape img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('front') }}/assets/img/icon/service_card_1_6.svg" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="service-details.html">Health Care Policy</a></h3>
                            <p class="box-text">Skilled advocacy for individuals facing various criminal charges. Invest support and prepare of bail motions.</p>
                        </div>
                        <a href="service-details.html" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Team Area  
==============================-->
    <section class="team-area-1 space overflow-hidden" data-overlay="title" data-opacity="8" data-bg-src="{{ asset('front') }}/assets/img/bg/team-1-bg.jpg">
        <div class="container">
            <div class="row gx-60">
                <div class="col-xl-4">
                    <div class="team-1-sec-title">
                        <div class="title-area">
                            <span class="sub-title">Our Attorneys</span>
                            <h2 class="sec-title text-white">Dedicated Lawyers, Proven Results</h2>
                            <div class="button-wrapper">
                                <a href="team.html" class="th-btn star-btn">More Attorney<i class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="team-1-card-wrap">
                        <div class="swiper has-shadow th-slider" id="teamSlider111" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"}}}'>
                            <div class="swiper-wrapper">
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img">
                                            <img src="{{ asset('front') }}/assets/img/team/team_1_1.jpg" alt="Team">
                                        </div>
                                        <div class="team-content">

                                            <h3 class="box-title"><a href="team-details.html">Michel phelops</a></h3>
                                            <span class="team-desig">Chief Justice</span>
                                        </div>
                                        <div class="team-content-hover-wrap">
                                            <div class="team-content-hover">
                                                <div class="team-img">
                                                    <img src="{{ asset('front') }}/assets/img/team/team_1_1.jpg" alt="Team">
                                                </div>
                                                <div class="hover-inner">
                                                    <h3 class="box-title"><a href="team-details.html">Michel phelops</a></h3>
                                                    <span class="team-desig">Chief Justice</span>
                                                    <div class="team-social">
                                                        <div class="th-social">
                                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img">
                                            <img src="{{ asset('front') }}/assets/img/team/team_1_2.jpg" alt="Team">
                                        </div>
                                        <div class="team-content">

                                            <h3 class="box-title"><a href="team-details.html">Sarah Rahman</a></h3>
                                            <span class="team-desig">Attorney</span>
                                        </div>
                                        <div class="team-content-hover-wrap">
                                            <div class="team-content-hover">
                                                <div class="team-img">
                                                    <img src="{{ asset('front') }}/assets/img/team/team_1_2.jpg" alt="Team">
                                                </div>
                                                <div class="hover-inner">
                                                    <h3 class="box-title"><a href="team-details.html">Sarah Rahman</a></h3>
                                                    <span class="team-desig">Attorney</span>
                                                    <div class="team-social">
                                                        <div class="th-social">
                                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img">
                                            <img src="{{ asset('front') }}/assets/img/team/team_1_3.jpg" alt="Team">
                                        </div>
                                        <div class="team-content">

                                            <h3 class="box-title"><a href="team-details.html">Smith Miller</a></h3>
                                            <span class="team-desig">Attorney</span>
                                        </div>
                                        <div class="team-content-hover-wrap">
                                            <div class="team-content-hover">
                                                <div class="team-img">
                                                    <img src="{{ asset('front') }}/assets/img/team/team_1_3.jpg" alt="Team">
                                                </div>
                                                <div class="hover-inner">
                                                    <h3 class="box-title"><a href="team-details.html">Smith Miller</a></h3>
                                                    <span class="team-desig">Attorney</span>
                                                    <div class="team-social">
                                                        <div class="th-social">
                                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img">
                                            <img src="{{ asset('front') }}/assets/img/team/team_1_4.jpg" alt="Team">
                                        </div>
                                        <div class="team-content">

                                            <h3 class="box-title"><a href="team-details.html">Samira Dsuza</a></h3>
                                            <span class="team-desig">Attorney</span>
                                        </div>
                                        <div class="team-content-hover-wrap">
                                            <div class="team-content-hover">
                                                <div class="team-img">
                                                    <img src="{{ asset('front') }}/assets/img/team/team_1_4.jpg" alt="Team">
                                                </div>
                                                <div class="hover-inner">
                                                    <h3 class="box-title"><a href="team-details.html">Samira Dsuza</a></h3>
                                                    <span class="team-desig">Attorney</span>
                                                    <div class="team-social">
                                                        <div class="th-social">
                                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img">
                                            <img src="{{ asset('front') }}/assets/img/team/team_1_5.jpg" alt="Team">
                                        </div>
                                        <div class="team-content">

                                            <h3 class="box-title"><a href="team-details.html">Poppy Linda</a></h3>
                                            <span class="team-desig">Attorney</span>
                                        </div>
                                        <div class="team-content-hover-wrap">
                                            <div class="team-content-hover">
                                                <div class="team-img">
                                                    <img src="{{ asset('front') }}/assets/img/team/team_1_5.jpg" alt="Team">
                                                </div>
                                                <div class="hover-inner">
                                                    <h3 class="box-title"><a href="team-details.html">Poppy Linda</a></h3>
                                                    <span class="team-desig">Attorney</span>
                                                    <div class="team-social">
                                                        <div class="th-social">
                                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img">
                                            <img src="{{ asset('front') }}/assets/img/team/team_1_6.jpg" alt="Team">
                                        </div>
                                        <div class="team-content">

                                            <h3 class="box-title"><a href="team-details.html">Sarah Rahman</a></h3>
                                            <span class="team-desig">Attorney</span>
                                        </div>
                                        <div class="team-content-hover-wrap">
                                            <div class="team-content-hover">
                                                <div class="team-img">
                                                    <img src="{{ asset('front') }}/assets/img/team/team_1_6.jpg" alt="Team">
                                                </div>
                                                <div class="hover-inner">
                                                    <h3 class="box-title"><a href="team-details.html">Sarah Rahman</a></h3>
                                                    <span class="team-desig">Attorney</span>
                                                    <div class="team-social">
                                                        <div class="th-social">
                                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img">
                                            <img src="{{ asset('front') }}/assets/img/team/team_1_7.jpg" alt="Team">
                                        </div>
                                        <div class="team-content">

                                            <h3 class="box-title"><a href="team-details.html">Smith Miller</a></h3>
                                            <span class="team-desig">Attorney</span>
                                        </div>
                                        <div class="team-content-hover-wrap">
                                            <div class="team-content-hover">
                                                <div class="team-img">
                                                    <img src="{{ asset('front') }}/assets/img/team/team_1_7.jpg" alt="Team">
                                                </div>
                                                <div class="hover-inner">
                                                    <h3 class="box-title"><a href="team-details.html">Smith Miller</a></h3>
                                                    <span class="team-desig">Attorney</span>
                                                    <div class="team-social">
                                                        <div class="th-social">
                                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img">
                                            <img src="{{ asset('front') }}/assets/img/team/team_1_8.jpg" alt="Team">
                                        </div>
                                        <div class="team-content">

                                            <h3 class="box-title"><a href="team-details.html">Samira Dsuza</a></h3>
                                            <span class="team-desig">Attorney</span>
                                        </div>
                                        <div class="team-content-hover-wrap">
                                            <div class="team-content-hover">
                                                <div class="team-img">
                                                    <img src="{{ asset('front') }}/assets/img/team/team_1_8.jpg" alt="Team">
                                                </div>
                                                <div class="hover-inner">
                                                    <h3 class="box-title"><a href="team-details.html">Samira Dsuza</a></h3>
                                                    <span class="team-desig">Attorney</span>
                                                    <div class="team-social">
                                                        <div class="th-social">
                                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button data-slider-prev="#teamSlider111" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#teamSlider111" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>

                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Process Area  
==============================-->
    <section class="space" id="process-sec">
        <div class="shape-mockup jump" data-right="0" data-bottom="0">
            <img src="{{ asset('front') }}/assets/img/shape/process-1-shape.png" alt="image">
        </div>
        <div class="container">
            <div class="row gy-40 gx-50 align-items-center">
                <div class="col-xl-6 mb-xl-0">
                    <div class="process-thumb">
                        <div class="img-box1">
                            <div class="process-play-btn-wrap">
                                <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                            <img src="{{ asset('front') }}/assets/img/process/process-1.jpg" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sub-title before-none">Work Process</span>
                        <h2 class="sec-title">Navigating the Law: Your Assurance of Peace</h2>
                    </div>
                    <div class="process-bottom">
                        <div class="process-bottom-item">
                            <div class="process-bottom-item__icon">
                                <img src="{{ asset('front') }}/assets/img/icon/process-1-icon-1.svg" alt="img">
                            </div>
                            <div class="process-bottom-item__content">
                                <h5 class="box-title">Initial Consultation</h5>
                                <p>Our experienced lawyers thoroughly analyze the facts of each case. They then apply the relevant laws to provide clear.</p>
                            </div>
                        </div>
                        <div class="process-bottom-item">
                            <div class="process-bottom-item__icon">
                                <img src="{{ asset('front') }}/assets/img/icon/process-1-icon-2.svg" alt="img">
                            </div>
                            <div class="process-bottom-item__content">
                                <h5 class="box-title">Case Evaluation</h5>
                                <p>We prioritize understanding your concerns and aligning with your goals. Your satisfaction is our top priority.</p>
                            </div>
                        </div>
                        <div class="process-bottom-item">
                            <div class="process-bottom-item__icon">
                                <img src="{{ asset('front') }}/assets/img/icon/process-1-icon-3.svg" alt="img">
                            </div>
                            <div class="process-bottom-item__content">
                                <h5 class="box-title">Legal Strategy </h5>
                                <p>We develop a customized plan to protect your rights and achieve the best possible outcome.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Brand Area  
==============================-->
    <div class="brand-area-1" data-bg-src="{{ asset('front') }}/assets/img/bg/brand-bg-11.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper th-slider" id="brand-slider-1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_5.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset('front') }}/assets/img/brand/brand_1_5.svg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Gallery Area  
==============================-->
    <div class="overflow-hidden space gallery-sec-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="title-area  text-center">
                        <span class="sub-title justify-content-center">Case Study</span>
                        <h2 class="sec-title">Attoenwy Legal Excellence in Action</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 masonary-active">
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3  filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('front') }}/assets/img/gallery/gallery-1-1.jpg" alt="gallery image">
                            <div class="gallery-content">
                                <a href="{{ asset('front') }}/assets/img/gallery/gallery-1-1.jpg" class="popup-icon popup-image"><i class="fa-solid fa-eye"></i></a>
                                <h2 class="box-title"><a href="case-studies-details.html">Initial Consultation </a></h2>
                                <p class="box-text">Family Law</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4  filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('front') }}/assets/img/gallery/gallery-1-2.jpg" alt="gallery image">
                            <div class="gallery-content">
                                <a href="{{ asset('front') }}/assets/img/gallery/gallery-1-2.jpg" class="popup-icon popup-image"><i class="fa-solid fa-eye"></i></a>
                                <h2 class="box-title"><a href="case-studies-details.html">Legal Advice </a></h2>
                                <p class="box-text">Divorce Cases</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3  filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('front') }}/assets/img/gallery/gallery-1-3.jpg" alt="gallery image">
                            <div class="gallery-content">
                                <a href="{{ asset('front') }}/assets/img/gallery/gallery-1-3.jpg" class="popup-icon popup-image"><i class="fa-solid fa-eye"></i></a>
                                <h2 class="box-title"><a href="case-studies-details.html">Preliminary Meeting </a></h2>
                                <p class="box-text">Custody Disputes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2  filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('front') }}/assets/img/gallery/gallery-1-4.jpg" alt="gallery image">
                            <div class="gallery-content">
                                <a href="{{ asset('front') }}/assets/img/gallery/gallery-1-4.jpg" class="popup-icon popup-image"><i class="fa-solid fa-eye"></i></a>
                                <h2 class="box-title"><a href="case-studies-details.html">Client Consultation </a></h2>
                                <p class="box-text">Parental Rights</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2  filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('front') }}/assets/img/gallery/gallery-1-5.jpg" alt="gallery image">
                            <div class="gallery-content">
                                <a href="{{ asset('front') }}/assets/img/gallery/gallery-1-5.jpg" class="popup-icon popup-image"><i class="fa-solid fa-eye"></i></a>
                                <h2 class="box-title"><a href="case-studies-details.html">Advice Session </a></h2>
                                <p class="box-text">Child Support</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3  filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('front') }}/assets/img/gallery/gallery-1-6.jpg" alt="gallery image">
                            <div class="gallery-content">
                                <a href="{{ asset('front') }}/assets/img/gallery/gallery-1-6.jpg" class="popup-icon popup-image"><i class="fa-solid fa-eye"></i></a>
                                <h2 class="box-title"><a href="case-studies-details.html">First Meeting </a></h2>
                                <p class="box-text">Paternity Cases</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4  filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('front') }}/assets/img/gallery/gallery-1-7.jpg" alt="gallery image">
                            <div class="gallery-content">
                                <a href="{{ asset('front') }}/assets/img/gallery/gallery-1-7.jpg" class="popup-icon popup-image"><i class="fa-solid fa-eye"></i></a>
                                <h2 class="box-title"><a href="case-studies-details.html">Introductory Discussion </a></h2>
                                <p class="box-text">Civil Unions</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3  filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('front') }}/assets/img/gallery/gallery-1-8.jpg" alt="gallery image">
                            <div class="gallery-content">
                                <a href="{{ asset('front') }}/assets/img/gallery/gallery-1-8.jpg" class="popup-icon popup-image"><i class="fa-solid fa-eye"></i></a>
                                <h2 class="box-title"><a href="case-studies-details.html">Case Consultation </a></h2>
                                <p class="box-text">Marriage Contracts</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!--==============================
Testimonial Area  
==============================-->
    <section class="testi-card-area-1 overflow-hidden space" id="testi-sec" data-bg-src="{{ asset('front') }}/assets/img/bg/testi-bg-1.png">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title before-none">Client Testimonials</span>
                        <h2 class="sec-title">What Our Clients Say</h2>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide11" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide11" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testi-card-slide">
                <div class="swiper has-shadow th-slider" id="testiSlide11" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-block" dir="ltr">
                                <div class="testi-icon-1-top">
                                    <img src="{{ asset('front') }}/assets/img/icon/testi-icon-1-top.svg" alt="image">
                                </div>
                                <div class="testi-block-top">
                                    <div class="box-img">
                                        <img src="{{ asset('front') }}/assets/img/testimonial/testi_1_1.jpg" alt="Avater">
                                    </div>
                                    <div class="content">
                                        <h3 class="box-title">Monica D’suza</h3>
                                        <p class="box-desig">Ui/Ux Designer</p>
                                        <div class="box-review">
                                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="box-text">"I was struggling with family law for months before I found abc. They not only provided me with the solution I needed, but they also educated me on how to prevent the issue from happening again. Their team is incredibly knowledgeable and patient, and they always go the extra mile to ensure customer satisfaction. I am so grateful for their help and would recommend them to anyone."</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-block" dir="ltr">
                                <div class="testi-icon-1-top">
                                    <img src="{{ asset('front') }}/assets/img/icon/testi-icon-1-top.svg" alt="image">
                                </div>
                                <div class="testi-block-top">
                                    <div class="box-img">
                                        <img src="{{ asset('front') }}/assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                                    </div>
                                    <div class="content">
                                        <h3 class="box-title">Teresa Hamilton</h3>
                                        <p class="box-desig">Ui/Ux Designer</p>
                                        <div class="box-review">
                                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="box-text">"I had been facing challenges with family law for months until I discovered abc. They not only resolved my issues effectively but also guided me on how to avoid similar problems in the future. Their team is highly skilled, patient, and always prioritizes customer satisfaction. I truly appreciate their support okay this is right for it and would highly recommend them to others."</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-block" dir="ltr">
                                <div class="testi-icon-1-top">
                                    <img src="{{ asset('front') }}/assets/img/icon/testi-icon-1-top.svg" alt="image">
                                </div>
                                <div class="testi-block-top">
                                    <div class="box-img">
                                        <img src="{{ asset('front') }}/assets/img/testimonial/testi_1_3.jpg" alt="Avater">
                                    </div>
                                    <div class="content">
                                        <h3 class="box-title">Monks Millar</h3>
                                        <p class="box-desig">Ui/Ux Designer</p>
                                        <div class="box-review">
                                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="box-text">"I was struggling with family law for months before I found abc. They not only provided me with the solution I needed, but they also educated me on how to prevent the issue from happening again. Their team is incredibly knowledgeable and patient, and they always go the extra mile to ensure customer satisfaction. I am so grateful for their help and would recommend them to anyone."</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-block" dir="ltr">
                                <div class="testi-icon-1-top">
                                    <img src="{{ asset('front') }}/assets/img/icon/testi-icon-1-top.svg" alt="image">
                                </div>
                                <div class="testi-block-top">
                                    <div class="box-img">
                                        <img src="{{ asset('front') }}/assets/img/testimonial/testi_1_4.jpg" alt="Avater">
                                    </div>
                                    <div class="content">
                                        <h3 class="box-title">William Hazelip</h3>
                                        <p class="box-desig">Ui/Ux Designer</p>
                                        <div class="box-review">
                                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="box-text">"Navigating family law issues was overwhelming for months until I came across abc. They didn’t just solve how to prevent the issue from happening again my problem—they empowered me with knowledge to manage such situations better. Their expertise and dedication to client satisfaction left okay no problem a lasting impression. I’m forever grateful and highly endorse their services."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Price Area  
==============================-->
    <!--==============================
Contact Area  
==============================-->
    <section class="space overflow-hidden">
        <div class="shape-mockup jump d-none d-xl-block" data-top="15%" data-right="3%">
            <img src="{{ asset('front') }}/assets/img/shape/contact-1-top.png" alt="shape img">
        </div>
        <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="17%" data-left="3%">
            <img src="{{ asset('front') }}/assets/img/shape/about1-right-top.png" alt="shape img">
        </div>
        <div class="container">
            <div class="contact-from-1-wrap">
                <div class="row gx-60 gy-40">
                    <div class="col-xl-6">
                        <div class="contact-form">
                            <div class="title-area mb-35">
                                <span class="sub-title justify-content-center text-white">Have Any Questions?</span>
                                <h4 class="sec-title text-white">Get in Touch with Us</h4>
                            </div>
                            <form action="mail.php" method="POST" class="quote-form ajax-contact">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="tel" class="form-control" name="number" id="number" placeholder="Number">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                        <i class="fas fa-pencil"></i>
                                    </div>
                                    <div class="form-btn col-12 mt-2">
                                        <button class="th-btn bg-theme w-100">Send Now <i class="fa-regular fa-arrow-right-long"></i></button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-icon-box-wrap">
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fa-regular fa-location-dot"></i>
                                </div>
                                <div class="info-contnt">
                                    <h4 class="footer-info-title">Location</h4>
                                    <p class="info-box_text">Suite# 13E, Tropicana Tower (13th Floor), Dhaka-1000</p>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fa-regular fa-phone"></i>
                                </div>

                                <div class="info-contnt">
                                    <h4 class="footer-info-title">Phone</h4>

                                    <p class="info-box_text">
                                        <a href="tel:+8801791404011" class="info-box_link">+8801791404011</a>
                                        <a href="tel:+8801833780455" class="info-box_link">+8801833780455</a>
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
                                        <a href="mailto:moloy.advocate@gmail.com" class="info-box_link">moloy.advocate@gmail.com</a>
                                        <a href="mailto:info@mroyassociates.com" class="info-box_link">info@mroyassociates.com</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="contact-img">
                            <img src="{{ asset('front') }}/assets/img/contact/contact_1.jpg" alt="vector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Blog Area  
==============================-->
    <section class="space bg-smoke2" id="blog-sec">
        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-left="0" data-bottom="0">
            <img src="{{ asset('front') }}/assets/img/shape/blog-1-shape-left.png" alt="shape-img">
        </div>
        <div class="shape-mockup jump d-none d-xxl-block" data-right="0" data-bottom="0">
            <img src="{{ asset('front') }}/assets/img/shape/blog-1-shape-right.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">News & Blog</span>
                        <h2 class="sec-title">Our News & Update</h2>
                    </div>
                </div>
                <div class="col-lg-auto d-none d-lg-block">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#blogSlider1" class="slider-arrow default show-all"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#blogSlider1" class="slider-arrow default show-all"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('front') }}/assets/img/blog/blog_1_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                        <a href="blog.html"><i class="fa-regular fa-calendar"></i>22 Sep, 2025</a>
                                        <a href="blog-details.html"><i class="fa-regular fa-comment"></i>2 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Steps to Pursue a Career as a Legal Project Manager.</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('front') }}/assets/img/blog/blog_1_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                        <a href="blog.html"><i class="fa-regular fa-calendar"></i>23 Sep, 2025</a>
                                        <a href="blog-details.html"><i class="fa-regular fa-comment"></i>3 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">The advantages of choosing a public defender.</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('front') }}/assets/img/blog/blog_1_3.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                        <a href="blog.html"><i class="fa-regular fa-calendar"></i>24 Sep, 2025</a>
                                        <a href="blog-details.html"><i class="fa-regular fa-comment"></i>2 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Technology is revolutionizing the legal sector.</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('front') }}/assets/img/blog/blog_1_4.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                        <a href="blog.html"><i class="fa-regular fa-calendar"></i>26 Sep, 2025</a>
                                        <a href="blog-details.html"><i class="fa-regular fa-comment"></i>4 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Design a leverage existing future proof rathe of-morate.</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('front') }}/assets/img/blog/blog_1_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                        <a href="blog.html"><i class="fa-regular fa-calendar"></i>27 Sep, 2025</a>
                                        <a href="blog-details.html"><i class="fa-regular fa-comment"></i>2 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">The advantages of choosing a public defender.</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('front') }}/assets/img/blog/blog_1_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                        <a href="blog.html"><i class="fa-regular fa-calendar"></i>29 Sep, 2025</a>
                                        <a href="blog-details.html"><i class="fa-regular fa-comment"></i>3 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Technology is revolutionizing the legal sector.</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
	Newsletter Area start
==============================-->
    <div class="news-letter-1-wrapper" data-bg-src="{{ asset('front') }}/assets/img/bg/footer-1-top-right.jpg">
        <div class="shape-mockup jump d-none d-xxl-block z-index-3" data-top="10%" data-left="0">
            <img src="{{ asset('front') }}/assets/img/icon/footer-1-top.png" alt="shape">
        </div>
        <div class="container">
            <div class="subscribe-box">
                <div class="row gy-40 gx-60 align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <p class="subscribe-box_text">Newsletter</p>
                        <h4 class="subscribe-box_title">Sign Up to get latest Update</h4>
                    </div>
                    <div class="col-xl-6 col-lg-8">
                        <form class="newsletter-form">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Enter your email" required="">
                            </div>
                            <button type="submit" class="th-btn theme-bg">Subscribe Now <i class="fa-regular fa-arrow-right-long"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
