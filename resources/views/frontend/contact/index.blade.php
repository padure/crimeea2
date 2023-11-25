@extends('layouts.frontend')
@section('title', '| Acasă')

@php
    $contacts = "";
    if(request()->routeIs('contacts.index')) {
        $contacts = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('banner')
    @include('frontend.partials.customers')
@endsection

@push('styles')
    <style>
        .full_bg{
            height: auto!important;
        }
    </style>
@endpush

@push('scripts')

@endpush
