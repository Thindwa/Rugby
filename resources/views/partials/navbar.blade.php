 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center px-3 px-lg-4">
            <img src="{{asset('img/logo.jpg')}}" alt="Rugby For Education logo" class="site-brand-logo">
            <span class="site-brand-copy">Rugby For Education<small>Education through sport</small></span>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                <a href="{{route('stories')}}" class="nav-item nav-link {{ request()->routeIs('stories*') ? 'active' : '' }}">Stories</a>
                <a href="{{route('events')}}" class="nav-item nav-link {{ request()->routeIs('events*') ? 'active' : '' }}">Events</a>
                <a href="{{route('announcements')}}" class="nav-item nav-link {{ request()->routeIs('announcements*') ? 'active' : '' }}">Announcements</a>
                {{-- <a href="{{route('news')}}" class="nav-item nav-link">News</a> --}}
                 <a href="{{route('gallery')}}" class="nav-item nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                <a href="{{route('contact')}}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
            </div>
            <a href="{{ route('support') }}" class="btn btn-primary px-lg-4 d-none d-lg-flex site-donate-btn">Support Us<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
