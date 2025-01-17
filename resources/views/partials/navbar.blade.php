 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="img/logo.jpg" alt="Logo" class="img-fluid" style="height: 73px; width:73px">
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About Us</a>
                <a href="{{route('stories')}}" class="nav-item nav-link">Stories</a>
                <a href="{{route('events')}}" class="nav-item nav-link">Events</a>
                <a href="{{route('news')}}" class="nav-item nav-link">News</a>
                 <a href="{{route('gallery')}}" class="nav-item nav-link">Gallery</a>
                <a href="{{route('contact-us')}}" class="nav-item nav-link">Contact Us</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Donate Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
