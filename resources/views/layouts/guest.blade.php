<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="msapplication-config" content="browserconfig.xml">
        <meta name="description" content="Index page">
        <meta name="keywords" content="index, page">
        <meta name="author" content="">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

        <link href="{{ asset('assets/common/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/guest/css/all-fontawesome.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/common/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/common/css/magnific-popup.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/common/css/owl.carousel.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/guest/css/style.css') }}" rel="stylesheet">

        <title>MEMP - Ministère des Enseignements Matermel & Primaire</title>
    </head>
    <body>
        @include('layouts.guest.preloader')
        @include('layouts.guest.header')

        <main class="main mt-3">
            <div class="container-fluid px-3">
                <div class="row justify-content-center align-items-start gap-2">
                    {{-- @include('layouts.guest.partials.latest-news') --}}
                    <div class="col-md-7">
                        {{ $slot }}
                    </div>
                    {{-- @include('layouts.guest.partials.asides') --}}
                </div>
            </div>
        </main>

        @include('layouts.guest.footer')

        <a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>

        <script src="{{ asset('assets/common/js/jquery-3.7.1.min.js') }}"></script>

        <script src="{{ asset('assets/common/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/common/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/common/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/common/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/common/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/common/js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/common/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/common/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/common/js/counter-up.js') }}"></script>
        <script src="{{ asset('assets/common/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/guest/js/main.js') }}"></script>
    </body>
</html>