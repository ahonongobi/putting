<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ashion Template">
        <meta name="keywords" content="Ashion, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>{{ $title }}</title>
 
        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

        @stack('scripts.header')

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        @if(Auth::user()->member==('oui'))
            @include('layouts/_wife-menu')
        @endif

        @if(Auth::user()->member==('non'))
            @include('layouts/_user-menu')
        @endif

        @yield('content')

        @yield('footer')

        @include('layouts/_footer')
        
        <!-- Js Plugins -->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/mixitup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        @stack('scripts.footer')
    </body>
</html>
