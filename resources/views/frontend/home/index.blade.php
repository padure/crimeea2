@extends('layouts.frontend')
@section('title', '| Acasă')

@php
    $home = "";
    if(request()->routeIs('home.index')) {
        $home = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('banner')
    @include('frontend.partials.banner')
@endsection

@section('content')
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
@endsection

@push('styles')
    <style>

    </style>
@endpush

@push('scripts')

@endpush
