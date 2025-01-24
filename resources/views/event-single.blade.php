@extends('layouts.app')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">{{ $event->title }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('events') }}">Events</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{ $event->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Single Event Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded mb-4" src="{{ asset($event->image) }}" alt="{{ $event->title }}">
                    <h2 class="mb-4">{{ $event->title }}</h2>
                    <p class="mb-4">{!! $event->description !!}</p>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fas fa-calendar-alt text-primary me-2"></i>Start Date: {{ \Carbon\Carbon::parse($event->start_date)->format('jS M Y') }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fas fa-calendar-alt text-primary me-2"></i>End Date: {{ \Carbon\Carbon::parse($event->end_date)->format('jS M Y') }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fas fa-map-marker-alt text-primary me-2"></i>Location: {{ $event->location }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fas fa-info-circle text-primary me-2"></i>Status: {{ ucfirst($event->status) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Other Events Section -->
                    <div class="bg-light p-4 mb-4 rounded shadow-sm">
                        <h4 class="mb-4">Other Events</h4>
                        @foreach($otherEvents as $otherEvent)
                            <div class="d-flex mb-3">
                                <img class="flex-shrink-0 rounded" src="{{ asset($otherEvent->image) }}" alt="{{ $otherEvent->title }}" style="width: 100px; height: 70px; object-fit: cover;">
                                <div class="ms-3">
                                    <h6 class="mb-1">
                                        <a href="{{ route('events.show', $otherEvent->id) }}" class="text-dark">{{ $otherEvent->title }}</a>
                                    </h6>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($otherEvent->start_date)->format('jS M Y') }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Call to Action Section -->
                    <div class="bg-primary text-white p-4 rounded shadow-sm">
                        <h4 class="mb-4">Explore More</h4>
                        <p class="mb-4">Discover more exciting events from our community.</p>
                        <a href="{{ route('events') }}" class="btn btn-light">
                            <i class="fas fa-calendar-alt me-2"></i> View All Events
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Event End -->

@endsection
