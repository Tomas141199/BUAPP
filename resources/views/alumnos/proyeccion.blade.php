@extends('layouts.menualum')

<script src="https://kit.fontawesome.com/ed43c14ad0.js" crossorigin="anonymous"></script>
@section('content')


<h2 class="text-center mb-3"><b>Proyección materias</b></h2>

<div class="text-center conta">
    <div class="container-box">
        @foreach ($proyeccion as $datos)
        @foreach($datos as $materia)

        <div class="box shadow">
            <i class="fas fa-book-reader icon"></i>
            <h4 class="title">Materia:</h4>
            <h4> {{$materia->nombre}} </h4>
            <p id="dato">NRC: {{$materia->materia_id}} <br>
                Semestre: {{$materia->semestre}} </p>
            <div class="
            @switch($materia->area)
            @case('Formacion general universitaria')
            {{'background-hover-fgu'}}
            @break
            @case('Ciencias basicas')
            {{'background-hover-acb'}}
            @break
            @case('Modelado de sistemas')
            {{'background-hover-ams'}}
            @break
            @case('Tecnologia')
            {{'background-hover-at'}}
            @break
            @default
            {{'background-hover'}}
            @break
            @endswitch  
            "> </div>
        </div>


        @endforeach
        @endforeach
    </div>
</div>

@endsection