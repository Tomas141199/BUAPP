@extends('layouts.app')


@section('content')
<table class="table mt-5">
    <thead>
        <tr>
            <th class="bg-primary-blue text-white" scope="col">ID</th>
            <th class="bg-primary-blue text-white" scope="col">Nombre</th>
            <th class="bg-primary-blue text-white" scope="col">Semestre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proyeccion as $datos)
        @foreach($datos as $materia)
<<<<<<< Updated upstream
        <tr>
            <th scope="row">{{$materia->materia_id}}</th>
            <td>{{$materia->nombre}}</td>
            <td>{{$materia->semestre}}</td>
        </tr>
        @endforeach
        @endforeach
    </tbody>
</table>
=======
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
>>>>>>> Stashed changes

@endsection