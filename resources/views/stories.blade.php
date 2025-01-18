@extends('layouts.app')


@section('content')


  <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Stories</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Stories</li>
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
            <h6 class="section-title bg-white text-center text-primary px-3">Latest Stories</h6>

            <p class="text-muted">Explore the latest stories and insights in the world of rugby in Malawi.</p>
        </div>
        <div class="row g-4">
            <!-- News Item -->
            <div class="col-lg-4 col-md-6">
                <div class="news-item bg-light shadow-sm rounded">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid rounded-top" src="img/course-1.jpg" alt="News Image">
                        <div class="read-more-overlay position-absolute top-50 start-50 translate-middle">
                            <a href="news-details-1.html" class="btn btn-primary px-4 py-2">Read More</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">Chisomo Thindwa: The Rugby Legend</h5>
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
                        <div class="read-more-overlay position-absolute top-50 start-50 translate-middle">
                            <a href="news-details-2.html" class="btn btn-primary px-4 py-2">Read More</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">Rionie Thindwa: The Rugby Legend</h5>
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
                        <div class="read-more-overlay position-absolute top-50 start-50 translate-middle">
                            <a href="news-details-3.html" class="btn btn-primary px-4 py-2">Read More</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">Pamela Thindwa: The Rugby Lady</h5>
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
