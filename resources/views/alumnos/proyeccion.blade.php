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
        <tr>
            <th scope="row">{{$materia->materia_id}}</th>
            <td>{{$materia->nombre}}</td>
            <td>{{$materia->semestre}}</td>
        </tr>
        @endforeach
        @endforeach
    </tbody>
</table>

@endsection