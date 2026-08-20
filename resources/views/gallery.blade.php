@extends('layouts.app')

@section('title', 'Gallery | Rugby For Education Malawi')
@section('meta_description', 'Browse photos from Rugby For Education activities, schools, players and community programmes in Malawi.')

@section('content')
@php $headerImage = $randomImage ? ($randomImage->hasWebpVariant() ? $randomImage->getWebpUrl() : $randomImage->getUrl()) : asset('img/carousel-2.jpg'); @endphp
<main class="content-page">
    <header class="content-hero content-hero--compact" style="--content-hero-image: url('{{ $headerImage }}');"><div class="content-hero__overlay"></div><div class="container content-hero__inner"><nav class="content-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><i class="fa fa-chevron-right"></i><span>Gallery</span></nav><span class="home-eyebrow home-eyebrow--light">A look at the journey</span><h1>Moments worth remembering.</h1><p>See the people, places and experiences behind Rugby For Education.</p></div></header>
    <section class="content-section content-section--soft"><div class="container"><div class="content-section-heading"><div><span class="home-eyebrow">Photo gallery</span><h2>Life around the game</h2></div><p>Browse moments from our work in schools, on the pitch and in the community.</p></div>
        @if($images->count())<div class="gallery-grid">@foreach($images as $image)@php $lightboxUrl = $image->hasWebpVariant() ? $image->getWebpUrl() : $image->getUrl(); @endphp<a href="{{ $lightboxUrl }}" class="gallery-tile" data-toggle="lightbox" data-gallery="r4e-gallery"><x-responsive-image path="{{ $image->getShortPath() }}" alt="{{ $image->title ?? 'Rugby For Education activity' }}" sizes="(max-width: 767px) 100vw, (max-width: 1199px) 50vw, 33vw" /><span>{{ $image->title ?? 'View image' }} <i class="fa fa-expand-alt"></i></span></a>@endforeach</div><div class="content-pagination">{{ $images->links('vendor.pagination.default') }}</div>@else<div class="content-empty"><i class="fa fa-images"></i><h2>The gallery is growing</h2><p>Photos from our activities will appear here soon.</p></div>@endif
    </div></section>
</main>
@endsection
