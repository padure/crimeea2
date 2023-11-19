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
@include('frontend.partials.banner')
<!-- Banner End -->
<!-- Appoint -->
{{--@include('frontend.partials.appoint')--}}
<!-- Appoint End -->
<!-- Services -->
@include('frontend.partials.services')
<!-- Services End -->
<!-- Pricing -->
@include('frontend.partials.pricing')
<!-- Pricing End -->
<!-- Blog -->
@include('frontend.partials.blog')
<!-- Blog End -->
<!-- About -->
@include('frontend.partials.about')
<!-- About End -->
<!-- Customers -->
@include('frontend.partials.customers')
<!-- Customers End -->
<!-- Blade -->
@include('frontend.partials.footer')
<!-- Blade End -->

@yield('content')

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@stack('scripts')
</body>
</html>
