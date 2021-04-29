@extends('layouts.app')


@section('content')
    
        @foreach ($proyeccion as $datos)
        @foreach($datos as $materia)
        <div class="box">
            <i class="fas fa-book-reader icon"></i>
            <h4 class="title">Materia:</h4>
            <h4> {{$materia->nombre}} </h4>
            <p id="dato">NRC: {{$materia->materia_id}} <br> 
            Semestre: {{$materia->semestre}} </p>
            <div class="background-hover"> </div>
        </div>

        
@endforeach
@endforeach
    </div>
</div> 

@endsection