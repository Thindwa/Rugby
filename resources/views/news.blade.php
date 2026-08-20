@extends('layouts.app')

@section('title', 'News | Rugby For Education Malawi')
@section('meta_description', 'News and updates from Rugby For Education, supporting education and rugby development in Malawi.')

@section('content')


  <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header"
    style="background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url('{{ $randomImage->getUrl() ?? asset($randomImage->getUrl()) }}');
           background-position: center center;
           background-repeat: no-repeat;
           background-size: cover;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">News</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                            <li class="breadcrumb-item text-white active" aria-current="page">News</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- News Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-title bg-white text-center text-primary px-3">Latest News</h6>
            <h1 class="mb-4">Stay Updated with Us</h1>
            <p class="text-muted">Explore the latest updates, events, and insights in the world of rugby.</p>
        </div>
        <div class="row g-4">
            <!-- News Item -->
            <div class="col-lg-4 col-md-6">
                <div class="news-item bg-light shadow-sm rounded">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid rounded-top" src="img/course-1.jpg" alt="News Image">
                        <div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-2">June 25, 2024</div>
                        <div class="read-more-overlay position-absolute top-50 start-50 translate-middle">
                            <a href="news-details-1.html" class="btn btn-primary px-4 py-2">Read More</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">Portland Rugby Kicks Off New Season</h5>
                        <p>Join us as the season begins with thrilling matches and exciting team updates.</p>
                        <a href="news-details-1.html" class="text-primary">Read More &raquo;</a>
                    </div>
                </div>
            </div>
            <!-- News Item -->
            <div class="col-lg-4 col-md-6">
                <div class="news-item bg-light shadow-sm rounded">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid rounded-top" src="img/course-2.jpg" alt="News Image">
                        <div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-2">July 10, 2024</div>
                        <div class="read-more-overlay position-absolute top-50 start-50 translate-middle">
                            <a href="news-details-2.html" class="btn btn-primary px-4 py-2">Read More</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">Youth Development Programs Announced</h5>
                        <p>Discover our latest initiatives to engage young talent and foster the next generation of rugby players.</p>
                        <a href="news-details-2.html" class="text-primary">Read More &raquo;</a>
                    </div>
                </div>
            </div>
            <!-- News Item -->
            <div class="col-lg-4 col-md-6">
                <div class="news-item bg-light shadow-sm rounded">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid rounded-top" src="img/course-3.jpg" alt="News Image">
                        <div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-2">August 18, 2024</div>
                        <div class="read-more-overlay position-absolute top-50 start-50 translate-middle">
                            <a href="news-details-3.html" class="btn btn-primary px-4 py-2">Read More</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">Upcoming Women's Rugby Events</h5>
                        <p>Stay informed about upcoming clinics and matches dedicated to women in rugby.</p>
                        <a href="news-details-3.html" class="text-primary">Read More &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News End -->



@endsection
