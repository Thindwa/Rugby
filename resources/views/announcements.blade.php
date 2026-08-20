@extends('layouts.app')

@section('title', 'Announcements | Rugby For Education Malawi')
@section('meta_description', 'Read official Rugby For Education announcements, opportunities and programme updates from Malawi.')

@section('content')
@php
    $headerImage = optional($randomImage)->getUrl() ?: asset('img/carousel-1.jpg');
@endphp

<header class="announcement-page-hero" style="background-image: linear-gradient(rgba(16, 27, 56, .88), rgba(16, 27, 56, .88)), url('{{ $headerImage }}');">
    <div class="container">
        <span class="home-eyebrow home-eyebrow--light">Official notices</span>
        <h1>Announcements</h1>
        <p>Important notices, opportunities and programme information published by Rugby For Education.</p>
    </div>
</header>

<main class="announcement-index-page">
    <div class="container">
        <div class="announcement-index-heading">
            <div>
                <span class="home-eyebrow">Stay informed</span>
                <h2>Latest announcements</h2>
            </div>
            <a href="{{ route('events') }}" class="home-text-link">Looking for events? <i class="fa fa-calendar-alt"></i></a>
        </div>

        <div class="home-announcement-list">
            @forelse($announcements as $announcement)
                @php
                    $announcementText = Str::of(strip_tags($announcement->description))->replace('&nbsp;', ' ')->squish();
                    $announcementTitle = $announcement->title ?: Str::limit($announcementText, 88);
                @endphp
                <article class="home-announcement-card wow fadeInUp" data-wow-delay="{{ 0.08 * $loop->iteration }}s">
                    <a class="home-announcement-card__media" href="{{ route('announcements.show', $announcement->id) }}" aria-label="View {{ $announcementTitle }}">
                        @if($announcement->image)
                            <x-responsive-image path="{{ $announcement->image }}" alt="{{ $announcementTitle }}" sizes="(max-width: 767px) 100vw, 220px" />
                        @else
                            <span class="home-announcement-card__placeholder"><i class="fa fa-bullhorn"></i></span>
                        @endif
                    </a>
                    <div class="home-announcement-card__body">
                        <div class="home-announcement-card__meta">
                            <span class="home-announcement-card__label"><i class="fa fa-bullhorn"></i> Announcement</span>
                            <time datetime="{{ $announcement->created_at->toDateString() }}">{{ $announcement->created_at->format('d M Y') }}</time>
                        </div>
                        <h3><a href="{{ route('announcements.show', $announcement->id) }}">{{ $announcementTitle }}</a></h3>
                        <p>{{ Str::limit($announcementText, 210) }}</p>
                        <a href="{{ route('announcements.show', $announcement->id) }}" class="home-card-link">View announcement <i class="fa fa-arrow-right"></i></a>
                    </div>
                </article>
            @empty
                <div class="announcement-empty-state">
                    <i class="fa fa-bullhorn"></i>
                    <h2>No announcements yet</h2>
                    <p>Official notices from Rugby For Education will appear here.</p>
                </div>
            @endforelse
        </div>
        <div class="content-inline-cta"><div><span class="home-eyebrow home-eyebrow--light">Support the work</span><strong>Help young players keep learning and moving forward.</strong></div><a href="{{ $supportUrl ?? 'https://www.paypal.com/paypalme/Rugby4Education' }}" target="_blank" rel="noopener noreferrer" class="home-btn home-btn--white">Support us <i class="fa fa-arrow-right"></i></a></div>
    </div>
</main>
@endsection
