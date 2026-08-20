@extends('layouts.app')

@section('title', 'Rugby and Education Events in Malawi | Rugby For Education')
@section('meta_description', 'Discover upcoming Rugby For Education rugby, school and community events in Malawi.')

@section('content')
@php $headerImage = optional($randomImage)->getUrl() ?: asset('img/carousel-1.jpg'); @endphp

<main class="content-page">
    <header class="content-hero content-hero--compact" style="--content-hero-image: url('{{ $headerImage }}');"><div class="content-hero__overlay"></div><div class="container content-hero__inner"><nav class="content-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><i class="fa fa-chevron-right"></i><span>Events</span></nav><span class="home-eyebrow home-eyebrow--light">Join the movement</span><h1>Events that bring people together.</h1><p>See what is happening across our rugby, education and community programmes.</p></div></header>
    <section class="content-section content-section--soft"><div class="container"><div class="content-section-heading"><div><span class="home-eyebrow">The calendar</span><h2>Upcoming activities</h2></div><p>Meet the people, teams and partners building opportunity through sport.</p></div><div class="editorial-grid editorial-grid--three">
        @forelse($events as $event)
            <article class="event-card"><a class="event-card__image" href="{{ route('events.show', $event->id) }}"><x-responsive-image path="{{ $event->image }}" alt="{{ $event->title }}" sizes="(max-width: 767px) 100vw, 33vw" /><time><strong>{{ \Carbon\Carbon::parse($event->start_date)->format('d') }}</strong><span>{{ \Carbon\Carbon::parse($event->start_date)->format('M') }}</span></time></a><div class="event-card__body"><span class="event-card__location"><i class="fa fa-map-marker-alt"></i> {{ $event->location }}</span><h3><a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a></h3><p>{{ Str::limit(strip_tags($event->description), 145) }}</p><div class="event-card__meta"><span><i class="fa fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</span><a class="home-card-link" href="{{ route('events.show', $event->id) }}">Details <i class="fa fa-arrow-right"></i></a></div></div></article>
        @empty
            <div class="content-empty"><i class="fa fa-calendar-alt"></i><h2>No events are scheduled</h2><p>Please check back soon for upcoming programmes and activities.</p></div>
        @endforelse
    </div></div></section>
</main>
@endsection
