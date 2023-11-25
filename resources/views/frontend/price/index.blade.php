@extends('layouts.frontend')
@section('title', '| Acasă')

@php
    $prices = "";
    if(request()->routeIs('prices.index')) {
        $prices = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('banner')
    <!-- priceing -->
    <div class="priceing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Descoperă Ofertele Noastre de Excepție</h2>
                        <p>
                            Experimentează luxul și relaxarea la Sauna Crimeea, unde prețurile noastre reflectă angajamentul nostru pentru servicii și clienți mulțumiți.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="our_pri w-100 text-center">
                <h3>Prețuri pentru Sauna Crimeea</h3>
                <span>lei <strong>400</strong></span>
                <p><strong>Ora de Saună:</strong> 400 lei până la 6 persoane</p>
                <p><strong>Ofertă Specială:</strong> La achitarea a 5 ore, a șasea oră este GRATIS</p>
                <p><strong>Prosoape Incluse:</strong> Beneficiezi de prosoape gratuite pentru o experiență fără griji</p>
                <p><strong>Copii Sub 6 Ani:</strong> Gratuitate cu prezentarea certificatului de naștere</p>
                <p><strong>Rezervare Minimă:</strong> 4 ore de pură relaxare și răsfăț</p>
                <p><strong>Închiriere Cu Programare Prealabilă:</strong> Asigură-ți locul în avans pentru o experiență personalizată</p>
                <p><strong>Adresa:</strong> Strada Independenței 16/4, Chișinău 2072</p>
            </div>
        </div>
    </div>
    <!-- end priceing -->

@endsection

@push('styles')
    <style>
        .full_bg{
            height: auto!important;
        }
        .our_pri{
            margin-bottom: 0px!important;
        }
        .our_pri p{
            text-align: center!important;
        }
        .our_pri p:hover{
            cursor: pointer;
            transition: all .4s ease-in-out;
            transform: translateY(3px);
        }
        .titlepage{
            padding-bottom: 0!important;
        }
    </style>
@endpush

@push('scripts')

@endpush
