@extends('layouts.app')

@section('content')
   <!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        @foreach($sliders as $slider)
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset($slider->image) }}" alt="{{ $slider->title }}">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(40, 47, 86, 0.17);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">{{ $slider->sub_title }}</h5>
                            <h1 class="display-3 text-white animated slideInDown">{{ $slider->title }}</h1>
                            <p class="fs-5 text-white mb-4 pb-2">
                                {!! Str::limit($slider->description, 200) !!}
                            </p>
                            <div class="mt-3">
                                <a href="{{ route('stories') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Explore Stories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Carousel End -->




 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Section 1: Support Your Local Rugby Club -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <!-- Add content here if needed -->
            </div>
            <!-- Section 2: Non-Profit Organization -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hand-holding-heart text-primary mb-4"></i>
                        <h5 class="mb-3">Vision</h5>
                        <p>{{ $about->vision }}</p>
                    </div>
                </div>
            </div>
            <!-- Section 3: Donate Today -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-donate text-primary mb-4"></i>
                        <h5 class="mb-3">Mission</h5>
                        <p>{{ $about->mission }}</p>
                    </div>
                </div>
            </div>
            <!-- Section 4: Announcements -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <!-- Add content here if needed -->
            </div>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset($about->image) }}" alt="Rugby Team" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">{{ $about->title }}</h1>
                <p class="mb-4">{!! Str::limit($about->description, 400) !!}</p>
                <a href="{{ route('about') }}" id="read-more-btn" class="btn btn-primary">Read More</a>
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
            <!-- Events Section -->
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    @foreach($events as $event)
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="{{ route('events.show', $event->id) }}">
                            <img class="img-fluid" src="{{ asset($event->image) }}" alt="{{ $event->title }}">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">{{ $event->title }}</h5>
                                <small class="text-primary">
                                    {{ \Carbon\Carbon::parse($event->start_date)->format('jS M') }} -
                                    {{ \Carbon\Carbon::parse($event->end_date)->format('jS M') }}
                                </small>
                                <br>
                                <small class="text-muted">{{ $event->location }}</small>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

           <!-- Announcements Section -->
<div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s">
    <div class="alert alert-info text-center" role="alert">
        <strong>ANNOUNCEMENTS</strong>
    </div>
    <div class="p-4">
        @foreach($announcements as $announcement)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            @if($announcement->image)
                <img class="img-fluid mb-3" src="{{ asset($announcement->image) }}" alt="Announcement Image">
            @endif
            <p>{!! $announcement->description !!}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
    </div>
</div>
        </div>
    </div>
</div>
<!-- Events End -->

    <!-- News Start -->
<!-- Stories Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-title bg-white text-center text-primary px-3">Latest Stories</h6>
            <p class="text-muted">Explore the latest stories and insights in the world of rugby in Malawi.</p>
        </div>
        <div class="row g-4">
            @foreach($stories as $story)
            <div class="col-lg-4 col-md-6">
                <div class="news-item bg-light shadow-sm rounded">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid rounded-top" src="{{ asset($story->image) }}" alt="{{ $story->name }}">
                        <div class="read-more-overlay position-absolute top-50 start-50 translate-middle">
                            <a href="{{ route('stories.show', $story->id) }}" class="btn btn-primary px-4 py-2">Read More</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">{{ $story->name }} : {{ $story->title }}</h5>
                        <p>{!! Str::limit($story->description, 100) !!}</p> <!-- Limit description to 100 characters -->
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('stories.show', $story->id) }}" class="text-primary">Read More &raquo;</a>
                            @if($story->url_link)
                                <a href="{{ $story->url_link }}" target="_blank" class="text-secondary">Watch Video</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Stories End -->
<!-- News End -->

@endsection
