<link rel="stylesheet" href="{!! asset('css/div.css') !!}">
@extends('layouts.app')

<script src="https://kit.fontawesome.com/ed43c14ad0.js" crossorigin="anonymous"></script>
@section('content')


<h2 class="text-center mb-3"><b>Materias en curso</b></h2>
<div class="text-center conta">
    <div id="DIV" class="container-box">
    @foreach($materias as $materia)
        <div id="caja" class="box">
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
    </div>
</div> 

<h2 class="text-center mb-3"><b>Materias finalizadas</b></h2>
<div class="text-center conta">
    <div id="DIV" class="container-box">
    @foreach($materias2 as $materia)
        <div id="caja2" class="box">
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
    </div>
</div> 
@endsection