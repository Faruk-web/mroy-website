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

            <div class="row gy-4">
                <div class="col-12">
                    <form action="mail.php" method="POST" class="contact-form team-details ajax-contact">
                        <h4 class="form-title text-start mb-4">Send a Message</h4>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select">
                                    <option value="" disabled="" selected="" hidden="">Select Subject</option>
                                    <option value="Defensive Driving">Defensive Driving</option>
                                    <option value="Traffic Guide">Traffic Guide</option>
                                    <option value="International Driving">International Driving</option>
                                    <option value="Highway Driving">Highway Driving</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fas fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn style4">Send Message <i class="fa-regular fa-arrow-right-long"></i></button>
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
