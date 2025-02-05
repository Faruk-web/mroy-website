@extends('front.master')
@section('title')
    Contact us
@endsection
@section('body')
 
<div class="breadcumb-wrapper " data-bg-src="{{ asset('front') }}/assets/img/bg/breadcrumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Support Team Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Support Team Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
==============================-->
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single mb-30">
                        <div class="page-img">
                            <img src="{{ asset($teams->image) }}" alt="Service Image">
                        </div>
                        <div class="page-content">
                            <h2 class="sec-title page-title">{{$teams->name}}</h2>
                            <span class="sub-title before-none">{{$teams->title}}</span>
                            <p class="">{!!$teams->privacy!!}</p>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                            @foreach($team as $item)
                                <li>
                                    <a href="{{route('team.detail',$item->id)}}">{{$item->name}}</a>
                                    <span><i class="fa-sharp fa-light fa-arrow-right"></i></span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                            @foreach($team as $item)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{route('team.detail',$item->id)}}"><img src="{{ asset($item->image) }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{route('team.detail',$item->id)}}">{{$item->name}}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="widget widget_call  ">
                            <div class="widget-call">
                                <h4 class="box-title text-white">Need Any Help?</h4>
                                <p class="text-white box_text">Need Any Help, Call Us 24/7 For Support</p>
                                <div class="widget_call">

                                    <div class="info-box">
                                        <div class="info-box_icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div>
                                            <span class="info-box_subtitle"> Call Us</span>
                                            <p class="info-box_text">
                                                <a href="tel:8801791404011" class="info-box_link">8801791404011</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <div class="info-box_icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div>
                                            <span class="info-box_subtitle">Mail Us</span>
                                            <p class="info-box_text">
                                                <a href="mailto:moloy.advocate@gmail.com" class="info-box_link">moloy.advocate@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <div class="info-box_icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div>
                                            <span class="info-box_subtitle">Office Address</span>
                                            <p class="info-box_text">Suite# 13E, Tropicana Tower (13th Floor), Dhaka-1000.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section><!--==============================
Brand Area  
==============================-->
    <div class="space-bottom">
        <div class="container">
            <div class="row">
                <div class="brand-bg-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-1-top title-area text-center">
                                <h3 class="box-title">Chosen by millions around the globe</h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="swiper th-slider" id="brandSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_1.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_2.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_3.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_4.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_5.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_6.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_1.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_2.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_3.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_4.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_5.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="about.html">
                                                <img src="{{ asset('front') }}/assets/img/brand/brand_2_6.svg" alt="Brand Logo">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
