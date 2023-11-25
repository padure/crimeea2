@extends('layouts.frontend')
@section('title', '| Acasă')

@php
    $service = "";
    if(request()->routeIs('service.index')) {
        $service = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('banner')
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Experimentează Sauna Crimeea</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div id="ho_shad" class="services_box text_align_left">
                        <h3 class="text-center">Saună Finlandeză</h3>
                        <figure><img src="{{ asset('images/servicii/services_1.jpg') }}" alt="#"/></figure>
                        <p class="text-center">
                            Descoperă atmosfera autentică și terapeutică a saunei finlandeze, pentru o relaxare profundă și echilibru revitalizant.
                        </p>
                        <a class="read_more" href="{{ route('service.index') }}">Mai mult</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="ho_shad" class="services_box text_align_left">
                        <h3 class="text-center">Bazin cu Apă Caldă</h3>
                        <figure><img src="{{ asset('images/servicii/services_3.jpg') }}" alt="#"/></figure>
                        <p class="text-center">
                            Îmbrățișează senzația de confort în bazinul nostru cu apă caldă, un refugiu perfect pentru răcorire și relaxare intensă.
                        </p>
                        <a class="read_more" href="{{ route('service.index') }}">Mai mult</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="ho_shad" class="services_box text_align_left">
                        <h3 class="text-center">Camera Salină</h3>
                        <figure><img src="{{ asset('images/servicii/services_4.jpg') }}" alt="#"/></figure>
                        <p class="text-center">
                            Respiră aerul sărat în camera noastră salină, pentru beneficii terapeutice și relaxare profundă a respirației.
                        </p>
                        <a class="read_more" href="{{ route('service.index') }}">Mai mult</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="ho_shad" class="services_box text_align_left">
                        <h3 class="text-center">Hammam</h3>
                        <figure><img src="{{ asset('images/servicii/services_2.jpg') }}" alt="#"/></figure>
                        <p class="text-center">
                            O incursiune în tradiția orientală a hammam-ului, pentru o experiență revigorantă a purificării și relaxării profunde.
                        </p>
                        <a class="read_more" href="{{ route('service.index') }}">Mai mult</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="ho_shad" class="services_box text_align_left">
                        <h3 class="text-center">Căldare cascadă</h3>
                        <figure><img src="{{ asset('images/servicii/services_5.jpg') }}" alt="#"/></figure>
                        <p class="text-center">
                            Simte energia și revigorarea în cădarea cu cascada de apă rece, pentru o experiență revigorantă și revigorare intensă.
                        </p>
                        <a class="read_more" href="{{ route('service.index') }}">Mai mult</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="ho_shad" class="services_box text_align_left">
                        <h3 class="text-center">Karaoke și Wifi</h3>
                        <figure><img src="{{ asset('images/servicii/services_6.jpg') }}" alt="#"/></figure>
                        <p class="text-center">
                            Conectează-te la lumea ta online și adaugă o notă distractivă cu sesiuni de karaoke într-un mediu plin de confort și relaxare.
                        </p>
                        <a class="read_more" href="{{ route('service.index') }}">Mai mult</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
