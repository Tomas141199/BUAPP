@extends('layouts.app')

@section('estilos')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
@endsection

@section('hero')
<div class="hero-categorias">
</div>
@endsection


@section('content')

<div class="mt-5">

    <div class="owl-carousel  owl-theme">
        @for($i=1 ; $i<7; $i++) <div class="card">
            <img src="/storage/img-buapp/c{{ $i }}.png" class="card-img-top" alt="imagen receta">
    </div>
    @endfor
</div>
</div>

@endsection