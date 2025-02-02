@extends('front.master')

@section('title')
    Blog us
@endsection
@section('body')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('front') }}/assets/img/bg/breadcrumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/blog-s-1-1.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-regular fa-calendar"></i>26 Sep, 2024</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comment"></i>03 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Affordable legal representation with experience, knowledge, and dedication to defense.</a>
                            </h2>
                            <p class="blog-text">Public defenders often work in the same court systems regularly, so they are well-acquainted with local judges, prosecutors, and court staff. This familiarity can help in strategizing a defense based on how cases are typically handled in a particular jurisdiction.</p>
                            <a href="blog-details.html" class="link-btn"> Read More <i class="fa-regular fa-arrow-right-long"></i> </a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img th-slider" data-slider-options='{"effect":"fade"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/blog-s-1-4.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/blog-s-1-5.jpg" alt="Blog Image"></a>
                                </div>
                            </div>
                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-regular fa-calendar"></i>26 Sep, 2024</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comment"></i>03 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Gain legal expertise, project management skills, certification, and practical experience.</a>
                            </h2>
                            <p class="blog-text">Most Legal Project Managers have a background in law. Earning a law degree (J.D.) or having significant experience working in a legal environment provides the foundational knowledge needed to understand complex legal matters.</p>
                            <a href="blog-details.html" class="link-btn"> Read More <i class="fa-regular fa-arrow-right-long"></i> </a>
                        </div>
                    </div>

                    <div class="th-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-regular fa-calendar"></i>26 Sep, 2024</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comment"></i>03 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Technology is transforming legal services with automation, AI, and efficiency.</a>
                            </h2>
                            <p class="blog-text">Technology is rapidly transforming the legal sector, making it more efficient, accessible, and cost-effective. Legal tech innovations like artificial intelligence (AI), blockchain, and automation tools are streamlining processes that traditionally required significant time and resources.</p>
                            <a href="blog-details.html" class="link-btn"> Read More <i class="fa-regular fa-arrow-right-long"></i> </a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img" data-overlay="title" data-opacity="4">
                            <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-regular fa-calendar"></i>26 Sep, 2024</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comment"></i>03 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Experienced criminal defense ensures expert strategy, better outcomes, and protection.</a>
                            </h2>
                            <p class="blog-text">House cleaning services provide professional cleaning of residential spaces. These services are designed to maintain cleanliness, hygiene, and overall appearance of homes, offering convenience to homeowners and ensuring a healthy living environment.</p>
                            <a href="blog-details.html" class="link-btn"> Read More <i class="fa-regular fa-arrow-right-long"></i> </a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-audio">
                            <iframe title="Tell Me U Luv Me (with Trippie Redd) by Juice WRLD" src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F830279092&amp;show_artwork=true&amp;maxwidth=751&amp;maxheight=1000&amp;dnt=1"></iframe>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-regular fa-calendar"></i>26 Sep, 2024</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comment"></i>03 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Experienced criminal defense ensures expert strategy, better outcomes, and protection.</a>
                            </h2>
                            <p class="blog-text">House cleaning services provide professional cleaning of residential spaces. These services are designed to maintain cleanliness, hygiene, and overall appearance of homes, offering convenience to homeowners and ensuring a healthy living environment.</p>
                            <a href="blog-details.html" class="link-btn"> Read More <i class="fa-regular fa-arrow-right-long"></i> </a>
                        </div>
                    </div>

                    <div class="th-pagination ">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.html">Family Law</a>
                                    <span><i class="fa-sharp fa-light fa-arrow-right"></i></span>
                                </li>
                                <li>
                                    <a href="blog.html">Criminal Law</a>
                                    <span><i class="fa-sharp fa-light fa-arrow-right"></i></span>
                                </li>
                                <li>
                                    <a href="blog.html">Artificial Intelligence</a>
                                    <span><i class="fa-sharp fa-light fa-arrow-right"></i></span>
                                </li>
                                <li>
                                    <a href="blog.html">Health Care Policy</a>
                                    <span><i class="fa-sharp fa-light fa-arrow-right"></i></span>
                                </li>
                                <li>
                                    <a href="blog.html">Real Estate Law</a>
                                    <span><i class="fa-sharp fa-light fa-arrow-right"></i></span>
                                </li>
                                <li>
                                    <a href="blog.html">Technology Law</a>
                                    <span><i class="fa-sharp fa-light fa-arrow-right"></i></span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Steps to Pursue a Career as a Legal Project Manager.</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">6 Sep, 2025</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">The advantages of choosing a public defender.</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">6 Sep, 2025</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('front') }}/assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Technology is revolutionizing the legal sector.</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">6 Sep, 2025</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud  ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Family</a>
                                <a href="blog.html">Criminal</a>
                                <a href="blog.html">Firm</a>
                                <a href="blog.html">Clean</a>
                                <a href="blog.html">Real Estate</a>
                                <a href="blog.html">Law NFT</a>
                                <a href="blog.html">Crypto Law</a>
                                <a href="blog.html">Tips</a>
                                <a href="blog.html">Criminal Law</a>
                                <a href="blog.html">Health Policy</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section><!--==============================
Brand Area  
==============================-->
    <div class="space-bottom overflow-hidden">
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
