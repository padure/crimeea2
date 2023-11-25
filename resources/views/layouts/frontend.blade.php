<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Sauna Crimeea')}} @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="description"
          content="@yield('meta_description', config('app.name', 'Sauna Crimeea'))">
    <meta name="keywords" content="@yield('meta_keywords', config('app.name', 'Sauna Crimeea'))">
    @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
<!-- Banner -->
<div class="full_bg">
    <!-- header -->
    @include('frontend.partials.header')
    <!-- end header inner -->
    @yield('banner')
</div>
<!-- Banner End -->
@yield('content')
<!-- Blade -->
@include('frontend.partials.footer')
<!-- Blade End -->
<a href="#" class="btn btn-lg back-to-top text-white"><i class="fa fa-angle-double-up"></i></a>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@stack('scripts')
</body>
</html>
