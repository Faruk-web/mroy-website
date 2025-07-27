@extends('front.master')
@section('title')
    Contact us
@endsection
@section('body')
     @php
        $setting = App\Models\Category::find(125);
      @endphp
<div class="breadcumb-wrapper " data-bg-src="{{ asset('front') }}/assets/img/bg/breadcrumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{$setting->category_name}}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>{{$setting->description}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Team Area  
==============================-->
     @php
        $setting = App\Models\Category::find(126);
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
    </section>
@endsection
