@extends('front.master')
@section('title')
    Contact us
@endsection
@section('body')
 
<div class="breadcumb-wrapper " data-bg-src="{{ asset('front') }}/assets/img/bg/breadcrumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Page</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Contact Area  
==============================-->
    <div class="contact-area-2 space-top" id="contact-sec">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="contact-icon-wrap">
                    <div class="info-box">
                        <div class="info-box_icon">
                            <img src="{{ asset('front') }}/assets/img/icon/contact-icon-1.svg" alt="shape-img">
                        </div>
                        <div class="info-contnt">
                            <h4 class="footer-info-title">Location</h4>
                            <p class="info-box_text">Suite# 13E, Tropicana Tower (13th Floor), Dhaka-1000</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-box_icon">
                            <img src="{{ asset('front') }}/assets/img/icon/contact-icon-2.svg" alt="shape-img">
                        </div>
                        <div class="info-contnt">
                            <h4 class="footer-info-title">Phone</h4>

                            <p class="info-box_text">
                                <a target="_blank" href="tel:+8801791404011" class="info-box_link">+8801791404011</a>
                                <a target="_blank" href="tel:+8801833780455" class="info-box_link">+8801833780455</a>
                            </p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-box_icon">
                            <img src="{{ asset('front') }}/assets/img/icon/contact-icon-3.svg" alt="shape-img">
                        </div>
                        <div class="info-contnt">
                            <h4 class="footer-info-title">Email</h4>
                            <p class="info-box_text">
                                <a href="mailto:moloy.advocate@gmail.com" class="info-box_link">moloy.advocate@gmail.com</a>
                                <a href="mailto:moloy.advocate@mroyassociates.com" class="info-box_link">moloy.advocate@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-box_icon">
                            <img src="{{ asset('front') }}/assets/img/icon/contact-icon-4.svg" alt="shape-img">
                        </div>

                        <div class="info-contnt">
                            <h4 class="footer-info-title">Have Questions?</h4>
                            <p class="info-box_text">Discover more by visiting us or joining our community</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-7">
                    <form action="mail.php" method="POST" class="contact-form style-4 ajax-contact">
                        <h3 class="form-title text-start">Leave a Reply</h3>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                <i class="fas fa-user"></i>
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
                                <button class="th-btn style2">Send Message <i class="fa-regular fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="contact-page-thumb">
                        <img src="{{ asset('front') }}/assets/img/contact/contact-right.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Map Area  
==============================-->
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d913.0928835398264!2d90.41233361441613!3d23.734126978204902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9001a73c661%3A0x190ce08404c76761!2sR.K.%20Roy%20%26%20Associates!5e0!3m2!1sbn!2sbd!4v1738750220831!5m2!1sbn!2sbd" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
