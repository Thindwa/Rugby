@extends('layouts.app')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Events</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                        <li class="breadcrumb-item text-white active" aria-current="page">Events</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

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

@endsection
