<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CYLE0D1HZX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-CYLE0D1HZX');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Expo Premios e Incentivos')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Search Console -->
    <meta name="google-site-verification" content="jQ66hx-3txOG0J-GHj1-vWNiDc51guc5dZNQFvn0ROs" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/poppins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/style.css') }}">
</head>

<body>
    <x-preloader />

    <header>
        <x-header />
    </header>

    @yield('content')

    <footer>
        <x-footer />
    </footer>

    <x-scrollup />

    <!-- JS here -->
    @vite('resources/js/app.js')

    <script src="{{ asset('assets/plugin/js/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/plugin/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/plugin/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/plugin/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/plugin/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('assets/plugin/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('assets/plugin/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('assets/plugin/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('assets/plugin/js/jquery.counterup.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/plugin/js/waypoints.min.js') }}"></script> --}}
    <script src="{{ asset('assets/plugin/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('assets/plugin/js/contact.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/plugin/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/main.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/timer.js') }}"></script>
    @stack('scriptsBody')
</body>

</html>
