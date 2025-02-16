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
                            <span class="sub-title" data-ani="slideinup" data-ani-delay="0.2s">{{$item->s_title}}</span>
                            <div data-ani="slideinup" data-ani-delay="0.4s">
                                <h1 class="hero-title">{{$item->title}}
                                </h1>
                                <div class="hero-title">Results
                                    <span class="client-group-wrap">
                                        <span class="client-group-wrap__content">
                                            <span class="client-group-wrap__box-title">
                                            {{$item->client}} <span><span class="counter-number">{{$item->number}}</span>+</span>
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
                                <img class="tilt-active" src="{{asset($business->image)}}" alt="Image">
                            </div>
                            <div class="img2-bottom">
                                <img class="tilt-active" src="{{asset($business->s_image)}}" alt="Image">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="title-area mb-25">
                        <h2 class="sec-title">{{$business->name}}</h2>
                        <p class="sec-text">{!!$business->details!!}</p>
                    </div>
                    <!-- <div class="checklist style2 mb-40">
                        <ul>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Committed to excellence in legal practice.</li>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Act with honesty and uphold ethical principles. </li>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Road Test Preparation with 98% success</li>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Meeting clients' needs is our priority.</li>
                        </ul>
                    </div> -->
                    <div>
                        <a href="{{route('about')}}" class="th-btn style4">More About <i class="fa-regular fa-arrow-right-long"></i></a>
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
                        <h4 class="box-number"><span class="counter-number"> {{$business->issue_no}} </span> <span class="plus-simple">+</span></h4>
                        <p class="box-text">{{$business->issue}}</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="{{ asset('front') }}/assets/img/icon/counter_1_2.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> {{$business->advocate_no}} </span> <span class="plus-simple">+</span></h4>
                        <p class="box-text">{{$business->advocate}}</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="{{ asset('front') }}/assets/img/icon/counter_1_3.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> {{$business->client_no}} </span> <span class="plus-simple">+</span></h4>
                        <p class="box-text">{{$business->client}}</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="{{ asset('front') }}/assets/img/icon/counter_1_4.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h4 class="box-number"><span class="counter-number"> {{$business->award_no}} </span> <span class="plus-simple">+</span></h4>
                        <p class="box-text">{{$business->award}}</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div><!--==============================
Service Area  
==============================-->
      @php
        $setting = App\Models\Category::find(105);
      @endphp
    <section class="th-service-1 overflow-hidden space" id="service-sec" data-bg-src="{{ asset('front') }}/assets/img/bg/team-2-shape-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8">
                    <div class="title-area text-center">
                        <span class="sub-title justify-content-center">{{$setting->category_name}}</span>
                        <h2 class="sec-title">{{$setting->description}}</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
            @foreach($service as $item)
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <!-- <div class="shape-mockup service_card-bg-1">
                            <img src="{{ asset($item->image) }}" alt="shape img">
                        </div> -->
                        <div class="box-icon">
                            <img src="{{ asset($item->image) }}" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="{{route('service.deatils',$item->id)}}">{{$item->name}}</a></h3>
                            <p class="box-text">{!!$item->privacy!!}</p>
                        </div>
                        <a href="{{route('service.deatils',$item->id)}}" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!--==============================
Team Area  
==============================-->
      @php
        $setting = App\Models\Category::find(106);
      @endphp
    <section class="team-area-1 space overflow-hidden" data-overlay="title" data-opacity="8" data-bg-src="{{ asset('front') }}/assets/img/bg/team-1-bg.jpg">
        <div class="container">
            <div class="row gx-60">
                    <div class="container">
                        <div class="row justify-content-lg-between justify-content-center align-items-end">
                            <div class="col-lg">
                                <div class="title-area text-center text-lg-start">
                                    <span class="sub-title">{{$setting->category_name}}</span>
                                    <h2 class="sec-title text-white">{{$setting->description}}</h2>
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
                                @foreach($advocate as $item)
                                    <div class="swiper-slide">
                                        <div class="blog-card">
                                            <div class="blog-img">
                                                <a href="{{route('attorney.details',$item->id)}}">
                                                    <img src="{{ asset($item->image) }}" alt="blog image">
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h3 class="box-title"><a href="{{route('attorney.details',$item->id)}}">{{ $item->name }}</a></h3>
                                                <span class="team-desig">{{ $item->title }}</span>
                                                <a href="{{route('attorney.details',$item->id)}}" class="link-btn mt-2 mb-3">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
 
    <!--==============================
Gallery Area  
==============================-->
     @php
        $setting = App\Models\Category::find(107);
      @endphp
      <section class="space bg-smoke2" id="blog-sec" data-bg-src="{{ asset('front') }}/assets/img/bg/team-2-shape-bg.png">
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
                        <span class="sub-title">{{$setting->category_name}}</span>
                        <h2 class="sec-title">{{$setting->description}}</h2>
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
                      @foreach($prectice as $item)
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset($item->image) }}" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="box-title"><a href="{{route('practice.deatils',$item->id)}}">{{ $item->name }}</a></h3>
                                <span class="team-desig">{{ $item->title }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!--==============================
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
                                <a href="{{$peace->link}}" class="play-btn style2 popup-video">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                            <img src="{{ asset('front') }}/assets/img/process/process-1.jpg" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area">
                        <h2 class="sec-title">{{$peace->name}}</h2>
                    </div>
                    <div class="process-bottom">
                        <div class="process-bottom-item">
                            <div class="process-bottom-item__icon">
                                <img src="{{ asset('front') }}/assets/img/icon/process-1-icon-1.svg" alt="img">
                            </div>
                            <div class="process-bottom-item__content">
                                <h5 class="box-title">{{$peace->consultation}}</h5>
                                <p>{{$peace->consultation_d}}</p>
                            </div>
                        </div>
                        <div class="process-bottom-item">
                            <div class="process-bottom-item__icon">
                                <img src="{{ asset('front') }}/assets/img/icon/process-1-icon-2.svg" alt="img">
                            </div>
                            <div class="process-bottom-item__content">
                                <h5 class="box-title">{{$peace->evaluation}}</h5>
                                <p>{{$peace->evaluation_d}}</p>
                            </div>
                        </div>
                        <div class="process-bottom-item">
                            <div class="process-bottom-item__icon">
                                <img src="{{ asset('front') }}/assets/img/icon/process-1-icon-3.svg" alt="img">
                            </div>
                            <div class="process-bottom-item__content">
                                <h5 class="box-title">{{$peace->strategy}}</h5>
                                <p>{{$peace->strategy_d}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--==============================
Blog Area  
==============================-->
     @php
        $setting = App\Models\Category::find(108);
      @endphp
  <section class="space" id="team-sec" data-bg-src="{{ asset('front') }}/assets/img/bg/team-2-shape-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-9 ">
                    <div class="title-area text-center">
                        <span class="sub-title justify-content-center">{{$setting->category_name}}</span>
                        <h2 class="sec-title">{{$setting->description}}</h2>
                    </div>
                </div>
                <div></div>
            </div>
            <div class="row gy-4">
                <!-- Single Item -->
                @foreach($blog as $item)
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="team-card style-2">
                        <div class="team-img">
                            <img src="{{ asset($item->image) }}" alt="Team">
                        </div>
                        <div class="team-content">
                            <h3 class="box-title"><a href="{{route('blog.details',$item->id)}}">{{ $item->name }}</a></h3>
                            <span class="team-desig">{!!$item->privacy!!}</span>

                            <div class="team-social">
                            <a href="{{route('blog.details',$item->id)}}" class="link-btn"> Read More <i class="fa-regular fa-arrow-right-long"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </section>
       <!--==============================
Brand Area  
==============================-->
<div class="brand-area-1" data-bg-src="{{ asset('front') }}/assets/img/bg/brand-bg-11.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper th-slider" id="brand-slider-1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                        <div class="swiper-wrapper">
                           @foreach($logo as $item)
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset($item->multi_logo) }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            @endforeach 
                            @foreach($logo as $item)
                            <div class="swiper-slide">
                                <div class="brand-box">
                                    <a href="about.html">
                                        <img src="{{ asset($item->multi_logo) }}" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!--==============================
Testimonial Area  
==============================-->
      @php
        $setting = App\Models\Category::find(109);
      @endphp
<section class="testi-card-area-1 overflow-hidden space" id="testi-sec" data-bg-src="{{ asset('front') }}/assets/img/bg/testi-bg-1.png">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title before-none">{{$setting->category_name}}</span>
                        <h2 class="sec-title">{{$setting->description}}</h2>
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
                      @foreach($client as $item)
                        <div class="swiper-slide">
                            <div class="testi-block" dir="ltr">
                                <div class="testi-icon-1-top">
                                    <img src="{{ asset('front') }}/assets/img/icon/counter_1_3.svg" alt="image">
                                </div>
                                <div class="testi-block-top">
                                    <div class="box-img">
                                        <img src="{{ asset('front') }}/assets/img/c-logo.jpg" alt="Avater">
                                    </div>
                                    <div class="content">
                                        <h3 class="box-title">{{$item->name}}</h3>
                                        <p class="box-desig">{{$item->title}}</p>
                                        <div class="box-review">
                                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="box-text">{!!$item->privacy!!}</p>
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
        $setting = App\Models\Category::find(110);
      @endphp
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
                                <span class="sub-title justify-content-center text-white">{{$setting->category_name}}</span>
                                <h4 class="sec-title text-white">{{$setting->description}}</h4>
                            </div>
                            <form action="{{route('contact')}}" method="POST" enctype="multipart/form-data">
                                @csrf
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
                                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="phone">
                                        <i class="fas fa-phone"></i>
                                        <small id="phoneError"></small>
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                        <i class="fas fa-pencil"></i>
                                    </div>
                                    <div class="form-btn col-12 mt-2">
                                        <button type="submit" class="th-btn bg-theme w-100">Send Now <i class="fa-regular fa-arrow-right-long"></i></button>
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
                                    <p class="info-box_text">{{$setting->location}}</p>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fa-regular fa-phone"></i>
                                </div>

                                <div class="info-contnt">
                                    <h4 class="footer-info-title">Phone</h4>

                                    <p class="info-box_text">
                                        <a href="tel:{{$setting->p_phone}}" class="info-box_link">{{$setting->p_phone}}</a>
                                        <a href="tel:{{$setting->s_phone}}" class="info-box_link">{{$setting->s_phone}}</a>
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
                                        <a href="mailto:{{$setting->p_mail}}" class="info-box_link">{{$setting->p_mail}}</a>
                                        <a href="mailto:{{$setting->s_mail}}" class="info-box_link">{{$setting->s_mail}}</a>
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
    </section>
    <!--==============================
	Newsletter Area start
==============================-->
      @php
        $setting = App\Models\Category::find(111);
      @endphp
    <div class="news-letter-1-wrapper" data-bg-src="{{ asset('front') }}/assets/img/bg/footer-1-top-right.jpg">
        <div class="shape-mockup jump d-none d-xxl-block z-index-3" data-top="10%" data-left="0">
            <img src="{{ asset('front') }}/assets/img/icon/footer-1-top.png" alt="shape">
        </div>
        <div class="container">
            <div class="subscribe-box">
                <div class="row gy-40 gx-60 align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <p class="subscribe-box_text">{{$setting->category_name}}</p>
                        <h4 class="subscribe-box_title">{{$setting->description}}</h4>
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
