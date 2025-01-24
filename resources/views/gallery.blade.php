@extends('layouts.app')

<style>
    .img-container {
    position: relative;
    overflow: hidden;
}

.image-title {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    text-align: center;
    padding: 5px 0;
    font-size: 14px;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.img-container:hover .image-title {
    opacity: 1;
}

</style>

@section('content')

<!-- Hero Section -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-1">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Resources</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Media Gallery</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Content Section -->
<section id="" class="mb-5">
    <div class="container">
        <div class="row shadow">
            <!-- Main content (Photo Gallery) -->
            <div class="col-md-12 main-content">
                <div class="mb-5 pt-4">
                    <h3 class="page-heading">Photo Gallery</h3>
                </div>

                <!-- Gallery Section -->
                <div class="row">
                    <!-- Gallery Items -->
                    @foreach ($images as $image)
                        <div class="col-sm-4 mb-4 position-relative">
                            <a href="{{ $image->getUrl() }}"
                               class="d-block img-container"
                               data-toggle="lightbox"
                               data-gallery="example-gallery">
                                <img src="{{ $image->getUrl() }}"
                                     class="img-fluid rounded"
                                     alt="{{ $image->alt ?? '' }}">
                                <div class="image-title">
                                    {{ $image->title ?? '' }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
</section>

@endsection
