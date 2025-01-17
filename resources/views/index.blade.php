@extends('layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Train Like a Champion</h5>
                                <h1 class="display-3 text-white animated slideInDown">Elevate Your Rugby Skills</h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Improve your game with expert training and coaching. Whether new or experienced, grow with Portland Rugby Club.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Explore Training</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Get Started</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Experience the Action</h5>
                                <h1 class="display-3 text-white animated slideInDown">Portland Rugby Club</h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Dive into the excitement of rugby! Stay updated on our latest matches, achievements, and events.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">View Events</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Learn More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


   <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Section 1: Support Your Local Rugby Club -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-users text-primary mb-4"></i>
                        <h5 class="mb-3">Support Your Club</h5>
                        <p>Be part of the Portland Rugby Club's journey. Your support matters!</p>
                    </div>
                </div>
            </div>
            <!-- Section 2: Non-Profit Organization -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hand-holding-heart text-primary mb-4"></i>
                        <h5 class="mb-3">Non-Profit Status</h5>
                        <p>The Portland Rugby Club is a 501(c)(3) non-profit organization.</p>
                    </div>
                </div>
            </div>
            <!-- Section 3: Donate Today -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-donate text-primary mb-4"></i>
                        <h5 class="mb-3">Donate Today</h5>
                        <p>Your generous contributions keep our club thriving. Donate now!</p>
                    </div>
                </div>
            </div>
            <!-- Section 4: Announcements -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-calendar-alt text-primary mb-4"></i>
                        <h5 class="mb-3">Announcements</h5>
                        <p>Spring 2025 practices begin January 21 at Delta Park. Stay tuned!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="Rugby Team" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">Welcome to Portland Rugby Club</h1>
                <p class="mb-4">Portland Rugby Club is a passionate community of players and fans dedicated to the sport of rugby. Whether you're a seasoned athlete or just starting, we provide opportunities for growth, teamwork, and thrilling competition.</p>
                <p class="mb-4">Our club promotes camaraderie, discipline, and the spirit of rugby. We host regular practices, competitive matches, and community events, fostering a love for the game while building lifelong friendships.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Experienced Coaches</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>State-of-the-Art Facilities</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Competitive Matches</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Community Events</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Inclusive Environment</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Youth Development Programs</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Events Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">EVENTS</h6>
            <h1 class="mb-5">Upcoming Events</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Season Opener Match</h5>
                                <small class="text-primary">Date: 25th June</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Youth Rugby Training Camp</h5>
                                <small class="text-primary">Date: 10th July</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Women's Rugby Clinic</h5>
                                <small class="text-primary">Date: 18th August</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">Portland Rugby Festival</h5>
                        <small class="text-primary">Date: 5th September</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Events End -->

    <!-- News Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Latest News</h6>
            <h1 class="mb-5">Stay Updated with Us</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="news-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/course-1.jpg" alt="News Image">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-4 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-3">Portland Rugby Kicks Off New Season</h5>
                        <p>Join us as the season begins with thrilling matches and exciting team updates.</p>
                        <small class="text-muted">Published: June 25, 2024</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="news-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/course-2.jpg" alt="News Image">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-4 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-3">Youth Development Programs Announced</h5>
                        <p>Discover our latest initiatives to engage young talent and foster the next generation of rugby players.</p>
                        <small class="text-muted">Published: July 10, 2024</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="news-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/course-3.jpg" alt="News Image">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-4 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-3">Upcoming Women's Rugby Events</h5>
                        <p>Stay informed about upcoming clinics and matches dedicated to women in rugby.</p>
                        <small class="text-muted">Published: August 18, 2024</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News End -->

@endsection
