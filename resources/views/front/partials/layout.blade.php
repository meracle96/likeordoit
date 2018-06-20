<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title') | LikeOrDoIt.com</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/stylesheets/bootstrap.css') }}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/stylesheets/style.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/stylesheets/responsive.css') }}">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/settings.css') }}">

	<!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/stylesheets/animate.css') }}">

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('front/icon/apple-touch-icon-48-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{ asset('front/icon/apple-touch-icon-32-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('front/icon/favicon.png') }}" rel="shortcut icon">

</head>
<body class="header_sticky">
    <!-- Preloader -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading</h2>
        </div>
    </section>

    <!-- Boxed -->
    <div class="boxed">

    <!-- Header -->
    @include('front.partials.nav')
    <!-- /.header -->

    @yield('content')

    <!-- Footer -->
    @include('front.partials.footer')
    <!-- End Footer -->

    <!-- Go Top -->
    <a class="go-top effect-button">
        <i class="fa fa-angle-up"></i>
    </a>

    </div>

     <!-- Javascript -->
    <script src="{{ asset('front/javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('front/javascript/tether.min.js') }}"></script>
    <script src="{{ asset('front/javascript/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/javascript/jquery.easing.js') }}"></script>
    <script src="{{ asset('front/javascript/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('front/javascript/jquery-countTo.js') }}"></script>
    <script src="{{ asset('front/javascript/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/javascript/jquery.cookie.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
    <script src="{{ asset('front/javascript/parallax.js') }}"></script>
    <script src="{{ asset('front/javascript/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('front/javascript/smoothscroll.js') }}"></script>

    <script src="{{ asset('front/javascript/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('front/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/slider.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('front/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('front/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

</body>
</html>
