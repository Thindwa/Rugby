@extends('layouts.app')

@section('title', 'Stories | Rugby For Education Malawi')
@section('meta_description', 'Read stories from Rugby For Education players, families and community partners across Malawi.')

@section('content')
@php $headerImage = $randomImage ? ($randomImage->hasWebpVariant() ? $randomImage->getWebpUrl() : $randomImage->getUrl()) : asset('img/carousel-2.jpg'); @endphp

<main class="content-page">
    <header class="content-hero" style="--content-hero-image: url('{{ $headerImage }}');">
        <div class="content-hero__overlay"></div>
        <div class="container content-hero__inner">
            <nav class="content-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><i class="fa fa-chevron-right"></i><span>Stories</span></nav>
            <span class="home-eyebrow home-eyebrow--light">Voices from our community</span>
            <h1>Stories that move us forward.</h1>
            <p>Read how education, rugby and community support are creating new possibilities for young people.</p>
        </div>
    </header>
    <section class="content-section content-section--soft"><div class="container">
        <div class="content-section-heading"><div><span class="home-eyebrow">Latest stories</span><h2>People, progress and purpose</h2></div><p>Explore experiences from players, families and the people who make Rugby For Education possible.</p></div>
        <div class="editorial-grid editorial-grid--three">
            @forelse($stories as $story)
                @php $storyText = Str::of(strip_tags($story->description))->replace('&nbsp;', ' ')->squish(); @endphp
                <article class="editorial-card"><a class="editorial-card__image" href="{{ route('stories.show', $story->id) }}"><x-responsive-image path="{{ $story->image }}" alt="{{ $story->title }}" sizes="(max-width: 767px) 100vw, 33vw" /><span class="editorial-card__arrow"><i class="fa fa-arrow-right"></i></span></a><div class="editorial-card__body"><span class="home-card-meta">{{ $story->name }}</span><h3><a href="{{ route('stories.show', $story->id) }}">{{ $story->title }}</a></h3><p>{{ Str::limit($storyText, 155) }}</p><div class="editorial-card__footer"><a class="home-card-link" href="{{ route('stories.show', $story->id) }}">Read story <i class="fa fa-arrow-right"></i></a>@if($story->url_link && filter_var($story->url_link, FILTER_VALIDATE_URL))<a class="home-video-link" href="{{ $story->url_link }}" target="_blank" rel="noopener"><i class="fa fa-play"></i> Watch</a>@endif</div></div></article>
            @empty
                <div class="content-empty"><i class="fa fa-book-open"></i><h2>Stories are coming soon</h2><p>New stories from our community will appear here.</p></div>
            @endforelse
        </div>
    </div></section>
</main>
@endsection
