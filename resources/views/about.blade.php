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
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset($about->image) }}" alt="Rugby Team" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">{{ $about->title }}</h1>
                <p class="mb-4">{!! $about->description !!}</p>

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

<!-- Management Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp pb-5" data-wow-delay="0.1s">
            <h2 class="section-title bg-white text-center text-primary px-3">Top Management</h2>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($management as $member)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light text-center p-4">
                    <div class="position-relative overflow-hidden mb-4">
                        <img class="img-fluid rounded-circle" src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                    </div>
                    <h5 class="mb-1">{{ $member->name }}</h5>
                    <p class="text-primary">{{ $member->position }}</p>
                    <p class="text-muted">{!! $member->description !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Management End -->

@endsection
