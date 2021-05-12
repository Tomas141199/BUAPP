@extends('layouts.app')

@section('estilos')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
@endsection

@section('links')
<nav class="navbar navbar-expand-md navbar-light categorias-bg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#categorias"
                    aria-controls="categorias" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    Menu
                </button>
                <div class="collapse navbar-collapse " id="categorias">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav w-100 d-flex justify-content-between">
                        @foreach ($categorias as $key)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $key['url'] }}" target="_blank">
                                {{ $key['nombre'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
@endsection

@section('hero')
<div class="hero-categorias">
</div>
@endsection


@section('content')

<div class="mt-5">

    <div class="owl-carousel  owl-theme">
        @for($i=1 ; $i<=7; $i++) <div class="card">
            <img src="{{ asset('images\carrusel\a'.$i.'.png') }}" class="card-img-top" alt="imagen buap">
    </div>
    @endfor
</div>
</div>

@endsection