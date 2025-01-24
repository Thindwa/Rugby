@extends('layouts.app')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">{{ $story->title }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('stories') }}">Stories</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{ $story->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Single Story Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded mb-4" src="{{ asset($story->image) }}" alt="{{ $story->title }}">
                    <h2 class="mb-4">{{ $story->title }}</h2>
                    <p class="mb-4">{!! $story->description !!}</p>
                    @if($story->url_link)
                        <a href="{{ $story->url_link }}" target="_blank" class="btn btn-primary">
                            <i class="fas fa-video me-2"></i> Watch Video
                        </a>
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Other Stories Section -->
                    <div class="bg-light p-4 mb-4 rounded shadow-sm">
                        <h4 class="mb-4">Other Stories</h4>
                        @foreach($otherStories as $otherStory)
                            <div class="d-flex mb-3">
                                <img class="flex-shrink-0 rounded" src="{{ asset($otherStory->image) }}" alt="{{ $otherStory->title }}" style="width: 100px; height: 70px; object-fit: cover;">
                                <div class="ms-3">
                                    <h6 class="mb-1">
                                        <a href="{{ route('stories.show', $otherStory->id) }}" class="text-dark">{{ $otherStory->title }}</a>
                                    </h6>
                                    <small class="text-muted">{!! Str::limit($otherStory->description, 50) !!}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Call to Action Section -->
                    <div class="bg-primary text-white p-4 rounded shadow-sm">
                        <h4 class="mb-4">Explore More</h4>
                        <p class="mb-4">Discover more inspiring stories from our community.</p>
                        <a href="{{ route('stories') }}" class="btn btn-light">
                            <i class="fas fa-book-open me-2"></i> View All Stories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Story End -->

@endsection
