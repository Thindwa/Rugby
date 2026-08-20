@extends('layouts.app')

@section('title', 'Rugby For Education | Education Through Sport in Malawi')
@section('meta_description', 'Rugby For Education supports talented young rugby players in Malawi with education, player development and community opportunity.')

@section('content')
<main class="home-page">
    <section class="home-hero" aria-label="Featured stories">
        <div class="owl-carousel header-carousel home-hero__carousel">
            @forelse($sliders as $slider)
                <article class="home-hero__slide">
                    <x-responsive-image path="{{ $slider->image }}" alt="{{ $slider->title }}" loading="eager" sizes="100vw" />
                    <div class="home-hero__shade"></div>
                    <div class="container home-hero__content-wrap">
                        <div class="home-hero__content">
                            @if($slider->sub_title)
                                <span class="home-eyebrow home-eyebrow--light">{{ $slider->sub_title }}</span>
                            @endif
                            <h1>{{ $slider->title }}</h1>
                            <p>{{ Str::limit(strip_tags($slider->description), 180) }}</p>
                            <div class="home-hero__actions">
                                <a href="{{ route('stories') }}" class="home-btn home-btn--primary">Explore our stories <i class="fa fa-arrow-right"></i></a>
                                <a href="{{ route('about') }}" class="home-btn home-btn--ghost">Discover our mission</a>
                            </div>
                        </div>
                    </div>
                </article>
            @empty
                <article class="home-hero__slide">
                    <x-responsive-image path="{{ $about->image }}" alt="Rugby For Education" loading="eager" sizes="100vw" />
                    <div class="home-hero__shade"></div>
                    <div class="container home-hero__content-wrap">
                        <div class="home-hero__content">
                            <span class="home-eyebrow home-eyebrow--light">Rugby For Education</span>
                            <h1>Opening doors through education and rugby</h1>
                            <p>Supporting talented young players with the education, resources and opportunities they need to thrive.</p>
                            <div class="home-hero__actions">
                                <a href="{{ route('about') }}" class="home-btn home-btn--primary">Learn about our work</a>
                            </div>
                        </div>
                    </div>
                </article>
            @endforelse
        </div>
    </section>

    <section class="home-purpose" aria-label="Our purpose">
        <div class="container">
            <div class="home-purpose__grid">
                <article class="home-purpose-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="home-purpose-card__icon"><i class="fa fa-eye"></i></div>
                    <div>
                        <span>Our vision</span>
                        <h2>A fair chance for every talented young player</h2>
                        <p>{{ $about->vision }}</p>
                    </div>
                </article>
                <article class="home-purpose-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="home-purpose-card__icon"><i class="fa fa-graduation-cap"></i></div>
                    <div>
                        <span>Our mission</span>
                        <h2>Education and sport working together</h2>
                        <p>{{ $about->mission }}</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="home-section home-about">
        <div class="container">
            <div class="home-about__grid">
                <div class="home-about__media wow fadeInLeft" data-wow-delay="0.1s">
                    <x-responsive-image path="{{ $about->image }}" alt="Rugby For Education supporting young people" loading="eager" sizes="(max-width: 991px) 100vw, 50vw" />
                    <div class="home-about__badge">
                        <i class="fa fa-book-open"></i>
                        <span><strong>Education first</strong>Building brighter futures through opportunity</span>
                    </div>
                </div>
                <div class="home-about__content wow fadeInRight" data-wow-delay="0.1s">
                    <span class="home-eyebrow">Who we are</span>
                    <h2>{{ $about->title }}</h2>
                    <p>{{ Str::limit(strip_tags($about->description), 520) }}</p>
                    <div class="home-about__values">
                        <div><i class="fa fa-check"></i><span>Education access</span></div>
                        <div><i class="fa fa-check"></i><span>Player development</span></div>
                        <div><i class="fa fa-check"></i><span>Community support</span></div>
                    </div>
                    <a href="{{ route('about') }}" class="home-text-link">More about our organisation <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    @if($announcements->isNotEmpty())
        <section class="home-section home-announcements" id="announcements">
            <div class="container">
                <div class="home-section-heading">
                    <div>
                        <span class="home-eyebrow">Official notices</span>
                        <h2>Announcements</h2>
                        <p>Important notices, opportunities and programme information from Rugby For Education.</p>
                    </div>
                    <a href="{{ route('announcements') }}" class="home-text-link">View all announcements <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="home-announcement-list">
                    @foreach($announcements as $announcement)
                        @php
                            $announcementText = Str::of(strip_tags($announcement->description))->replace('&nbsp;', ' ')->squish();
                            $announcementTitle = $announcement->title ?: Str::limit($announcementText, 88);
                        @endphp
                        <article class="home-announcement-card wow fadeInUp" data-wow-delay="{{ 0.1 * $loop->iteration }}s">
                            <div class="home-announcement-card__media">
                                @if($announcement->image)
                                    <x-responsive-image path="{{ $announcement->image }}" alt="{{ $announcementTitle }}" sizes="(max-width: 767px) 100vw, 220px" />
                                @else
                                    <span class="home-announcement-card__placeholder"><i class="fa fa-bullhorn"></i></span>
                                @endif
                            </div>
                            <div class="home-announcement-card__body">
                                <div class="home-announcement-card__meta">
                                    <span class="home-announcement-card__label"><i class="fa fa-bullhorn"></i> Announcement</span>
                                    <time datetime="{{ $announcement->created_at->toDateString() }}">{{ $announcement->created_at->format('d M Y') }}</time>
                                </div>
                                <h3>{{ $announcementTitle }}</h3>
                                <p>{{ Str::limit($announcementText, 190) }}</p>
                                <a href="{{ route('announcements.show', $announcement->id) }}" class="home-card-link">View announcement <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($events->isNotEmpty())
        <section class="home-section home-section--soft">
            <div class="container">
                <div class="home-section-heading">
                    <div>
                        <span class="home-eyebrow">Join us</span>
                        <h2>Upcoming events</h2>
                        <p>Take part in our next activities and community programmes.</p>
                    </div>
                    <a href="{{ route('events') }}" class="home-text-link">View all events <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="home-card-grid home-card-grid--three">
                    @foreach($events as $event)
                        <article class="home-event-card wow fadeInUp" data-wow-delay="{{ 0.1 * $loop->iteration }}s">
                            <a href="{{ route('events.show', $event->id) }}" class="home-event-card__image">
                                @if($event->image)
                                    <x-responsive-image path="{{ $event->image }}" alt="{{ $event->title }}" sizes="(max-width: 767px) 100vw, 33vw" />
                                @else
                                    <span class="home-image-placeholder"><i class="fa fa-calendar-alt"></i></span>
                                @endif
                                <span class="home-event-card__date">{{ \Carbon\Carbon::parse($event->start_date)->format('d M') }}</span>
                            </a>
                            <div class="home-event-card__body">
                                <span><i class="fa fa-map-marker-alt"></i> {{ $event->location }}</span>
                                <h3><a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a></h3>
                                <p>{{ Str::limit(strip_tags($event->description), 120) }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($stories->isNotEmpty())
        <section class="home-section home-section--soft home-stories">
            <div class="container">
                <div class="home-section-heading">
                    <div>
                        <span class="home-eyebrow">Real people, real progress</span>
                        <h2>Stories that inspire</h2>
                        <p>Meet the players and communities creating change through rugby and education.</p>
                    </div>
                    <a href="{{ route('stories') }}" class="home-text-link">Explore all stories <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="home-card-grid home-card-grid--stories">
                    @foreach($stories as $story)
                        <article class="home-story-card wow fadeInUp" data-wow-delay="{{ 0.1 * $loop->iteration }}s">
                            <a href="{{ route('stories.show', $story->id) }}" class="home-story-card__image">
                            <x-responsive-image path="{{ $story->image }}" alt="{{ $story->name }}" sizes="(max-width: 767px) 100vw, 33vw" />
                            </a>
                            <div class="home-story-card__body">
                                <span class="home-card-meta">{{ $story->name }}</span>
                                <h3><a href="{{ route('stories.show', $story->id) }}">{{ $story->title }}</a></h3>
                                <p>{{ Str::limit(strip_tags($story->description), 145) }}</p>
                                <div class="home-story-card__links">
                                    <a href="{{ route('stories.show', $story->id) }}" class="home-card-link">Read story <i class="fa fa-arrow-right"></i></a>
                                    @if($story->url_link && filter_var($story->url_link, FILTER_VALIDATE_URL))
                                        <a href="{{ $story->url_link }}" target="_blank" rel="noopener" class="home-video-link"><i class="fa fa-play"></i> Watch</a>
                                    @endif
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="home-cta">
        <div class="container">
            <div class="home-cta__inner">
                <div>
                    <span class="home-eyebrow home-eyebrow--light">Be part of the change</span>
                    <h2>Help a young player stay in school and keep moving forward.</h2>
                </div>
                <a href="{{ route('support') }}" class="home-btn home-btn--white">Support our work <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
</main>
@endsection
