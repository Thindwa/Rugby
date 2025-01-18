@extends('layouts.app')

@section('content')

   <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->




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

            </div>
        </div>
    </div>
</div>
<!-- About End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Section 1: Support Your Local Rugby Club -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">

            </div>
            <!-- Section 2: Non-Profit Organization -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hand-holding-heart text-primary mb-4"></i>
                        <h5 class="mb-3">Vision</h5>
                        <p>The Portland Rugby Club is a 501(c)(3) non-profit organization.</p>
                    </div>
                </div>
            </div>
            <!-- Section 3: Donate Today -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-donate text-primary mb-4"></i>
                        <h5 class="mb-3">Mission</h5>
                        <p>Your generous contributions keep our club thriving. Donate now!</p>
                    </div>
                </div>
            </div>
            <!-- Section 4: Announcements -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">

            </div>
        </div>
    </div>
</div>
    <!-- News Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp pb-5" data-wow-delay="0.1s">
            <h2 class="section-title bg-white text-center text-primary px-3">Top Management</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light text-center p-4">
                    <div class="position-relative overflow-hidden mb-4">
                        <img class="img-fluid rounded-circle" src="img/course-1.jpg" alt="Manager Image">
                    </div>
                    <h5 class="mb-1">John Doe</h5>
                    <p class="text-primary">Chief Executive Officer</p>
                    <p class="text-muted">John leads the company with a vision for innovation and excellence, ensuring strategic growth and operational efficiency.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light text-center p-4">
                    <div class="position-relative overflow-hidden mb-4">
                        <img class="img-fluid rounded-circle" src="img/course-2.jpg" alt="Manager Image">
                    </div>
                    <h5 class="mb-1">Jane Smith</h5>
                    <p class="text-primary">Chief Operating Officer</p>
                    <p class="text-muted">Jane ensures smooth business operations by managing processes, resources, and strategic execution.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light text-center p-4">
                    <div class="position-relative overflow-hidden mb-4">
                        <img class="img-fluid rounded-circle" src="img/course-3.jpg" alt="Manager Image">
                    </div>
                    <h5 class="mb-1">Robert Brown</h5>
                    <p class="text-primary">Chief Financial Officer</p>
                    <p class="text-muted">Robert oversees financial planning, risk management, and corporate investments to maintain stability and growth.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News End -->

@endsection

