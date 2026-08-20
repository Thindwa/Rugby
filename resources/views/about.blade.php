@extends('layouts.app')

@section('title', 'About Rugby For Education | Rugby and Education in Malawi')
@section('meta_description', 'Learn how Rugby For Education connects education, rugby and community support to help young people in Malawi build brighter futures.')

@section('content')
@php
    $heroImage = $randomImage ? $randomImage->getUrl() : asset('storage/' . $about->image);
    $missionPoints = collect(preg_split('/(?:\r?\n|•|·|\|)+/', strip_tags($about->mission)))
        ->map(fn ($point) => trim($point))
        ->filter()
        ->values();
@endphp

<main class="about-page">
    <section class="about-page-hero" style="--about-hero-image: url('{{ $heroImage }}');">
        <div class="about-page-hero__overlay"></div>
        <div class="container about-page-hero__content">
            <nav class="about-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span aria-hidden="true">/</span>
                <span aria-current="page">About us</span>
            </nav>
            <span class="about-eyebrow about-eyebrow--light">Our organisation</span>
            <h1>Education and rugby.<br>One path forward.</h1>
            <p>We help talented young rugby players stay in school, develop their potential and build brighter futures.</p>
        </div>
    </section>

    <section class="about-story-section">
        <div class="container">
            <div class="about-story-grid">
                <div class="about-story-media wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-story-media__accent" aria-hidden="true"></div>
                    <x-responsive-image path="{{ $about->image }}" alt="Rugby For Education supporting young players" sizes="(max-width: 991px) 100vw, 50vw" />
                    <div class="about-story-media__badge">
                        <i class="fa fa-book-open" aria-hidden="true"></i>
                        <div>
                            <strong>Education first</strong>
                            <span>Opportunity on and off the field</span>
                        </div>
                    </div>
                </div>
                <div class="about-story-copy wow fadeInUp" data-wow-delay="0.2s">
                    <span class="about-eyebrow">Who we are</span>
                    <h2>{{ $about->title }}</h2>
                    <div class="about-rich-text">{!! $about->description !!}</div>
                    <div class="about-focus-list" aria-label="Our focus areas">
                        <span><i class="fa fa-check" aria-hidden="true"></i> Education access</span>
                        <span><i class="fa fa-check" aria-hidden="true"></i> Player development</span>
                        <span><i class="fa fa-check" aria-hidden="true"></i> Community support</span>
                    </div>
                    <a href="{{ route('contact') }}" class="about-text-link">Work with our organisation <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-purpose-section">
        <div class="container">
            <div class="about-section-heading">
                <div>
                    <span class="about-eyebrow">What guides us</span>
                    <h2>Purpose with a clear direction</h2>
                </div>
                <p>Our vision defines the future we want to see. Our mission explains how we work towards it every day.</p>
            </div>
            <div class="about-purpose-grid">
                <article class="about-purpose-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-purpose-card__icon"><i class="fa fa-eye" aria-hidden="true"></i></div>
                    <span>Our vision</span>
                    <h3>A fair chance for every talented young player</h3>
                    <p>{{ $about->vision }}</p>
                </article>
                <article class="about-purpose-card about-purpose-card--dark wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-purpose-card__icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                    <span>Our mission</span>
                    <h3>Education and sport working together</h3>
                    <ul class="about-mission-list">
                        @foreach($missionPoints as $point)
                            <li><i class="fa fa-check" aria-hidden="true"></i><span>{{ $point }}</span></li>
                        @endforeach
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="about-priorities-section">
        <div class="container">
            <div class="about-section-heading about-section-heading--center">
                <div>
                    <span class="about-eyebrow">How we create opportunity</span>
                    <h2>Support that goes beyond the game</h2>
                </div>
                <p>We connect education, sport and community support so young people can keep learning and growing.</p>
            </div>
            <div class="about-priorities-grid">
                <article>
                    <span>01</span>
                    <i class="fa fa-school" aria-hidden="true"></i>
                    <h3>Keep players in school</h3>
                    <p>We help remove practical barriers to education, from school fees and examinations to learning materials.</p>
                </article>
                <article>
                    <span>02</span>
                    <i class="fa fa-running" aria-hidden="true"></i>
                    <h3>Develop young talent</h3>
                    <p>Rugby builds confidence, discipline and teamwork while giving young players a positive place to belong.</p>
                </article>
                <article>
                    <span>03</span>
                    <i class="fa fa-people-carry" aria-hidden="true"></i>
                    <h3>Strengthen communities</h3>
                    <p>We work with families, clubs, schools and partners to create support that lasts beyond a single season.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="about-leadership-section" id="leadership">
        <div class="container">
            <div class="about-section-heading">
                <div>
                    <span class="about-eyebrow">The people behind the work</span>
                    <h2>Leadership and advisory team</h2>
                </div>
                <p>Meet the people guiding Rugby For Education and supporting its work in the community.</p>
            </div>
            <div class="about-team-grid">
                @foreach($management as $member)
                    @php
                        $plainBiography = trim(preg_replace('/\s+/', ' ', strip_tags($member->description)));
                    @endphp
                    <article class="about-team-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-team-card__media">
                            <x-responsive-image path="{{ ltrim($member->image, '/') }}" alt="{{ $member->name }}, {{ $member->position }}" sizes="(max-width: 991px) 100vw, 33vw" />
                            <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                        <div class="about-team-card__body">
                            <span class="about-team-card__role">{{ $member->position }}</span>
                            <h3>{{ $member->name }}</h3>
                            <div class="about-team-description">
                                <p>{{ \Illuminate\Support\Str::limit($plainBiography, 180) }}</p>
                                @if(strlen($plainBiography) > 180)
                                    <details class="about-team-profile">
                                        <summary>Read full profile <i class="fa fa-plus" aria-hidden="true"></i></summary>
                                        <div>{!! $member->description !!}</div>
                                    </details>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-cta-section">
        <div class="container">
            <div class="about-cta-panel">
                <div>
                    <span class="about-eyebrow about-eyebrow--light">Be part of the change</span>
                    <h2>Help a young player keep learning and moving forward.</h2>
                </div>
                <a href="{{ route('support') }}" class="about-cta-button">Support our work <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
</main>
@endsection
