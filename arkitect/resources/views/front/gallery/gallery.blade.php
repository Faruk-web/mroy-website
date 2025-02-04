@extends('front.master')
@section('title')
Gallery
@endsection
@section('body')
 
<div class="breadcumb-wrapper " data-bg-src="{{ asset('front') }}/assets/img/bg/breadcrumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Gallery</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Gallery Area  
==============================-->
    <div class="gallery-sec-3 space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="title-area  text-center">
                        <span class="sub-title">Gallery</span>
                        <h2 class="sec-title">Our Success Stories</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <!-- <div class="gallery-2-wrapper"> -->
                @foreach($gallery as $item)
                <div class="col-xl-4 col-md-6">
                    <div class="gallery-card2 inner" data-bg-src="{{asset($item->multi_image)}}">
                        <div class="gallery-img">
                            <div class="gallery-content">
                                <a href="{{asset($item->multi_image)}}" class="icon-btn popup-image"><i class="fa-solid fa-eye"></i> </a>
                                <h2 class="box-title"><a href="case-studies-details.html">Initial Consultation</a></h2>
                                <p class="box-text">Family Law</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- </div> -->
            </div>
        </div>
    </div>
@endsection
