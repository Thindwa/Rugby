<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Malawi-Rugby</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        jQuery("button.close").click(function (e) {
            jQuery(this).parent().slideUp("slow");
        });
    </script>
</body>

</html>
