@extends('layouts.frontend')
@section('title', '| Acasă')

@php
    $gallery = "";
    if(request()->routeIs('gallery.index')) {
        $gallery = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('banner')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Exploră Frumusețea Noastră</h2>
                        <p>Descoperă atmosfera unică și serviciile de lux la Sauna Crimeea. O incursiune vizuală în lumea noastră de relaxare și răsfăț.</p>
                    </div>
                </div>
            </div>
            <div class="row d_flex">
                <div class=" col-md-4">
                    <div class="latest">
                        <figure><img src="{{ asset('images/gallery/img1.jpg') }}" alt="#"/></figure>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest">
                        <figure><img src="{{ asset('images/gallery/img2.jpg') }}" alt="#"/></figure>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest">
                        <figure><img src="{{ asset('images/gallery/img3.jpg') }}" alt="#"/></figure>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest">
                        <figure><img src="{{ asset('images/gallery/img4.jpg') }}" alt="#"/></figure>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest">
                        <figure><img src="{{ asset('images/gallery/img5.jpg') }}" alt="#"/></figure>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest">
                        <figure><img src="{{ asset('images/gallery/img6.jpg') }}" alt="#"/></figure>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest">
                        <figure><img src="{{ asset('images/gallery/img7.jpg') }}" alt="#"/></figure>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest">
                        <figure><img src="{{ asset('images/gallery/img8.jpg') }}" alt="#"/></figure>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest">
                        <figure><img src="{{ asset('images/gallery/img9.jpg') }}" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
    <!-- Fereastra modală pentru imagine -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-close btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                    <img id="modalImage" src="" class="img-fluid">
                    <a class="btn btn-primary" id="prevButton"><i class="fas fa-chevron-left"></i></a>
                    <a class="btn btn-primary" id="nextButton"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end fereastra -->
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
