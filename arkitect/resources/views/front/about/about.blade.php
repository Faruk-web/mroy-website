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
                                        <h3 class="team-about_title">M. Roy & Associates</h3>
                                        <p class="team-about_desig">Chief Justice</p>
                                    </div>
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.whatsapp.com/"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <p class="team-about_text">The services of ‘ M. Roy & Associates’ are the offspring of the sincere, well-thought-out and meticulous teamwork of its associates, who have embarked on the mission to serve the clients with great zeal and vigor and race-track of their professional services from ethics.</p>
                            </div>

                            <div class="about-info-wrap">
                                <div class="about-info">
                                    <div class="about-info_icon"><i class="fa-solid fa-user"></i></div>
                                    <div class="about-info_content">
                                        <p class="about-info_subtitle">Experience</p>
                                        <h6 class="about-info_title">More Than 15 Years</h6>
                                    </div>
                                </div>
                                <div class="about-info">
                                    <div class="about-info_icon"><i class="fas fa-envelope"></i></div>
                                    <div class="about-info_content">
                                        <p class="about-info_subtitle">Email</p>
                                        <h6 class="about-info_title"><a href="mailto:moloy.advocate@gmail.com">moloy.advocate@gmail.com</a></h6>
                                    </div>
                                </div>
                                <div class="about-info">
                                    <div class="about-info_icon"><i class="fas fa-phone"></i></div>
                                    <div class="about-info_content">
                                        <p class="about-info_subtitle">Phone</p>
                                        <h6 class="about-info_title"><a href="tel:+8801791404011">+8801791404011</a></h6>
                                    </div>
                                </div>
                                <div class="about-info">
                                    <div class="about-info_icon"><i class="fas fa-fax"></i></div>
                                    <div class="about-info_content">
                                        <p class="about-info_subtitle">Fax</p>
                                        <h6 class="about-info_title"><a href="tel:+8802223385673">+8802223385673</a></h6>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('home')}}" class="th-btn style2">Contact Me<i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-12">
                    <h2 class="sec-title page-title">About Chief Justice</h2>
                    <p>Michel Phelops has served as the Chief Justice of the Supreme Court of the fictional country of Erythia since 1990. A widely respected figure in the legal community, Phelops is known for his progressive interpretations of the law and a strong commitment to upholding human rights and environmental justice.Michel Phelops has garnered a reputation not only as a legal scholar but also as a forward-thinking jurist who consistently prioritizes social equity in his rulings. His tenure on the Supreme Court of Erythia has been marked by groundbreaking decisions that have reshaped the legal landscape, particularly in the areas of environmental protection, civil liberties, and human rights.s</p>
                    <h2 class="sec-title page-title">Early Career</h2>
                    <p>Michel Phelops graduated from the prestigious Erythian National University with a degree in law in 1990. After clerking for notable judges, Phelops began his career as a public defender. His passion for ensuring equal access to justice led him to co-found the "Justice for All" initiative, a non-profit organization aimed at providing legal assistance to underprivileged communities.</p>
                </div>

                <div class="col-lg-6">
                    <h3 class="title h5 fw-semibold mt-n1">Activities Skills</h3>
                    <p class="mb-4">With decades of experience in law, Phelops has honed a deep understanding of constitutional law, environmental law, and human rights. His ability to interpret and apply the law in complex cases has earned him.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="title h5 fw-semibold mt-n1">Notable Achievements</h3>
                    <p>Michel Phelops graduated from the prestigious Erythian National University with a degree in law in 1990. After clerking for notable judges, Phelops began his career as a public defender. His passion for ensuring.</p>
                </div>
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
