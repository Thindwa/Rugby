@extends('layouts.app')

@php
    $announcementText = Str::of(strip_tags($announcement->description))->replace('&nbsp;', ' ')->squish();
    $announcementTitle = $announcement->title ?: Str::limit($announcementText, 100);
@endphp

@section('title', $announcementTitle . ' | Rugby For Education')
@section('meta_description', Str::limit($announcementText, 155))
@if($announcement->image)
    @section('social_image', asset('storage/' . $announcement->image))
@endif

@section('content')
<main class="announcement-detail-page">
    <div class="container">
        <nav class="announcement-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i class="fa fa-chevron-right"></i>
            <a href="{{ route('announcements') }}">Announcements</a>
            <i class="fa fa-chevron-right"></i>
            <span>Announcement details</span>
        </nav>

        <div class="announcement-detail-grid">
            <article class="announcement-detail-card">
                <header class="announcement-detail-header">
                    <span class="announcement-detail-label"><i class="fa fa-bullhorn"></i> Official announcement</span>
                    <time datetime="{{ $announcement->created_at->toDateString() }}">
                        <i class="fa fa-calendar-alt"></i> Published {{ $announcement->created_at->format('d F Y') }}
                    </time>
                    <h1>{{ $announcementTitle }}</h1>
                </header>

                @if($announcement->image)
                    <figure class="announcement-detail-image">
                        <img src="{{ asset('storage/'. $announcement->image) }}" alt="{{ $announcementTitle }}">
                    </figure>
                @endif

                <div class="announcement-detail-content">
                    {!! $announcement->description !!}
                </div>

                <footer class="announcement-detail-footer">
                    <a href="{{ route('announcements') }}" class="home-text-link"><i class="fa fa-arrow-left"></i> Back to all announcements</a>
                </footer>
            </article>

            <aside class="announcement-detail-aside">
                <div class="announcement-aside-card">
                    <span class="home-eyebrow">Official notices</span>
                    <h2>More announcements</h2>
                    @forelse($otherAnnouncements as $otherAnnouncement)
                        @php
                            $otherText = Str::of(strip_tags($otherAnnouncement->description))->replace('&nbsp;', ' ')->squish();
                            $otherTitle = $otherAnnouncement->title ?: Str::limit($otherText, 62);
                        @endphp
                        <a class="announcement-aside-link" href="{{ route('announcements.show', $otherAnnouncement->id) }}">
                            @if($otherAnnouncement->image)
                                <img src="{{ asset('storage/'. $otherAnnouncement->image) }}" alt="">
                            @else
                                <span><i class="fa fa-bullhorn"></i></span>
                            @endif
                            <span>
                                <small>{{ $otherAnnouncement->created_at->format('d M Y') }}</small>
                                <strong>{{ $otherTitle }}</strong>
                            </span>
                        </a>
                    @empty
                        <p class="text-muted mb-0">There are no other announcements yet.</p>
                    @endforelse
                </div>

                <div class="announcement-aside-events">
                    <i class="fa fa-calendar-alt"></i>
                    <h2>Upcoming activities</h2>
                    <p>Announcements are official notices. Scheduled activities are listed separately as events.</p>
                    <a href="{{ route('events') }}">View upcoming events <i class="fa fa-arrow-right"></i></a>
                </div>
            </aside>
        </div>
    </div>
</main>
@endsection
