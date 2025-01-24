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

                        <li class="breadcrumb-item text-white active" aria-current="page">Stories</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

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

@endsection
