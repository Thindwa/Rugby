<!DOCTYPE html>
@php
    $pageTitle = trim($__env->yieldContent('title')) ?: 'Rugby For Education | Education Through Sport in Malawi';
    $pageDescription = trim($__env->yieldContent('meta_description')) ?: 'Rugby For Education helps talented young rugby players in Malawi stay in school, develop their potential and build brighter futures.';
    $canonicalUrl = trim($__env->yieldContent('canonical')) ?: url()->current();
    $socialImage = trim($__env->yieldContent('social_image')) ?: asset('img/logo.jpg');
@endphp
<html lang="en-MW">

<head>
    <meta charset="utf-8">
    <title>{{ $pageTitle }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="Rugby For Education">
    <meta name="theme-color" content="#111a36">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Rugby For Education">
    <meta property="og:locale" content="en_MW">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:image" content="{{ $socialImage }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ $socialImage }}">

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Rugby For Education',
            'alternateName' => 'R4E',
            'url' => url('/'),
            'logo' => asset('img/logo.jpg'),
            'description' => 'Rugby For Education helps talented young rugby players in Malawi stay in school and develop their potential through sport.',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Kabwabwa Area 25 B',
                'addressLocality' => 'Lilongwe',
                'addressCountry' => 'MW',
            ],
            'email' => 'rugbyforeducation23@gmail.com',
            'telephone' => '+265992816663',
            'sameAs' => [
                'https://www.facebook.com/people/Rugby-For-Education/100092776007978/',
                'https://www.youtube.com/@R4E-z8p',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @yield('schema')

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

     <style>
    .news-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .news-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    .read-more-overlay {
        display: none;
        background: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
        z-index: 2;
    }
    .position-relative:hover .read-more-overlay {
        display: flex;
        align-items: center;
        justify-content: center;
    }


        .banner {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .banner .alert {
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 0 !important;
        }

        .banner-wrapper {
            display: block;
            text-align: center;
            vertical-align: middle;
        }

        .alert-custom {
            background: #0066AA;
            color: #fff;
        }

        .banner-link {
            text-decoration: underline;
            color: white;
            transition: all .5s ease-in;
        }

        .banner-link:hover {
            color: #f4f4f4;
        }

        .alert-dismissable .close,
        .alert-dismissible .close {
            position: relative;
            top: 6px;
            right: 20px;
            color: inherit;
            display: block;
            margin: auto;
            text-align: center;
            color: #0066AA;
            vertical-align: middle;
            opacity: 1;
            background: #fff;
            border-radius: 50%;
            border-radius: 80px;
            padding: 1rem 1.5rem;
        }

        .close span {
            top: -1.4px;
            position: relative;
        }

         /* Reduce the height of the carousel container */
    .owl-carousel.header-carousel {
        height: 670px; /* Adjust this value as needed */
    }

    /* Ensure the carousel images fit within the reduced height */
    .owl-carousel .owl-carousel-item img {
        height: 670px; /* Match the carousel height */
        width: 100%;
        object-fit: cover; /* Ensure the image covers the area without distortion */
    }

    /* Adjust the overlay and content positioning */
    .owl-carousel .owl-carousel-item .position-absolute {
        height: 670px; /* Match the carousel height */
    }

    /* Optional: Adjust the font sizes for better proportion */
    .owl-carousel .owl-carousel-item h1 {
        font-size: 2.5rem; /* Adjust as needed */
    }

    .owl-carousel .owl-carousel-item h5 {
        font-size: 1.25rem; /* Adjust as needed */
    }

    .owl-carousel .owl-carousel-item p {
        font-size: 1rem; /* Adjust as needed */
    }
    </style>


</head>

<body>
    <!-- Navbar Start -->
    @include('partials.navbar')
    <!-- Navbar End -->


    @yield('content')

    <!-- Footer Start -->
    @include('partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        jQuery("button.close").click(function (e) {
            jQuery(this).parent().slideUp("slow");
        });
    </script>
</body>

</html>
