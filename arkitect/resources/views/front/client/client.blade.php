@extends('front.master')
@section('title')
    Contact us
@endsection
@section('body')
 
<div class="breadcumb-wrapper " data-bg-src="{{ asset('front') }}/assets/img/bg/breadcrumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"> Our Clients</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li> Our Clients</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Team Area  
==============================-->
    <section class="space" id="team-sec" data-bg-src="{{ asset('front') }}/assets/img/bg/team-2-shape-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-9 ">
                    <div class="title-area text-center">
                        <span class="sub-title justify-content-center"> Our Clients</span>
                        <h2 class="sec-title">Meet Our Happy Clients</h2>
                    </div>
                </div>
                <div></div>
            </div>
            <div class="row gy-4">
                <!-- Single Item -->
                @foreach($client as $item)
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="team-card style-2">
                        <div class="team-img">
                            <img src="{{ asset($item->image) }}" alt="Team">
                        </div>
                        <div class="team-content">
                            <h3 class="box-title"><a href="{{route('client.deatils',$item->id)}}">{{ $item->name }}</a></h3>
                            <span class="team-desig">{{ $item->title }}</span>

                            <div class="team-social">
                            <a href="{{route('client.deatils',$item->id)}}" class="link-btn"> Read More <i class="fa-regular fa-arrow-right-long"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
