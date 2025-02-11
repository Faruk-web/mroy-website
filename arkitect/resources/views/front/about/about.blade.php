@extends('front.master')
@section('title')
    About us
@endsection
@section('body')
<div class="breadcumb-wrapper " data-bg-src="{{ asset('front') }}/assets/img/bg/breadcrumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Attorney Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Attorney Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Team Area  
==============================-->
    <section class="space">
        <div class="container">
            <div class="team-details mb-60">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="mb-40 mb-xl-0">
                            <img class="w-100" src="{{ asset('front') }}/assets/img/team/team_details_1.jpg" alt="team image">
                        </div>
                    </div>
                    <div class="col-xl-7 ps-3 ps-xl-5 align-self-center">
                        <div class="team-about">
                            <div class="team-wrapp">
                                <div class="top-wrap">
                                    <div class="title-wrap">
                                        <h3 class="team-about_title">{{$about->name}}</h3>
                                        <p class="team-about_desig">M. Roy & Associates, Chief Justice</p>
                                    </div>
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.whatsapp.com/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <p class="team-about_text">{!!$about->sub_details!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 ps-3 ps-xl-5 align-self-center">
                        <div class="team-about">
                            <div class="team-wrapp">
                                <p>{!!$about->privacy!!}</p>   
                                <p class="mb-4">{!!$about->details!!}</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 ps-3 ps-xl-5 align-self-center">
                        <div class="team-about">
                      
                            <a href="{{route('contact')}}" class="th-btn style2">Contact Me<i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="space" id="process-sec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 about-bottom-box-wrapcol-lg-10 text-center ">
                            <div class="title-area">
                                <h2 class="sec-title mb-2">Schedule A Free Consultation</h2>
                                <p class="box-text">Our team of seasoned attorneys is dedicated to carefully listening to your concerns, ensuring a deep understanding of your unique situation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-40 justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 ">
                            <div class="process-box style-2">
                                <div class="box-icon">
                                    <span class="number">01</span>
                                    <img src="{{ asset('front') }}/assets/img/icon/process-2-icon-1.svg" alt="image">
                                </div>
                                <h3 class="box-title">Schedule A Time</h3>
                                <p class="box-text">Choose a convenient date and time that works best for you. Our experienced lawyers are available to discuss.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 ">
                            <div class="process-box style-2">
                                <div class="box-icon">
                                    <span class="number">02</span>
                                    <img src="{{ asset('front') }}/assets/img/icon/process-2-icon-2.svg" alt="image">
                                </div>
                                <h3 class="box-title">Meet with a Consultation</h3>
                                <p class="box-text">During your consultation, you'll have the opportunity to discuss your case with a qualified attorney.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 ">
                            <div class="process-box style-2">
                                <div class="box-icon">
                                    <span class="number">03</span>
                                    <img src="{{ asset('front') }}/assets/img/icon/process-2-icon-3.svg" alt="image">
                                </div>
                                <h3 class="box-title">Plan for Success</h3>
                                <p class="box-text">Based on the information gathered during your consultation, we'll develop a tailored legal strategy to help you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row gy-4">
                <div class="col-12">
                <form action="{{route('contact')}}" method="POST" class="contact-form style-4 " enctype="multipart/form-data">
                    @csrf
                        <h3 class="form-title text-start">Leave a Reply</h3>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
                                <i class="fas fa-user"></i>
                                <small id="phoneError"></small>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fas fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="th-btn style2">Send Message <i class="fa-regular fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>

        </div>
    </section><!--==============================
	Footer Area
==============================-->
@endsection
