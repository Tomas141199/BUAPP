@extends('layouts.app')

@section('content')

<h2 class="text-center mb-5">Lista de Materias en curso</h2>
<table class="table">
    <thead>
        <tr>
            <th class="bg-primary-blue text-white" scope="col">ID</th>
            <th class="bg-primary-blue text-white" scope="col">Nombre</th>
            <th class="bg-primary-blue text-white" scope="col">Estado</th>
            <th class="bg-primary-blue text-white" scope="col">No.Creditos</th>
            <th class="bg-primary-blue text-white" scope="col">Semestre</th>
            <th class="bg-primary-blue text-white" scope="col">Area</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($materias as $materia)
        <tr>
            <th scope="row">{{$materia->idmateria}}</th>
            <td>{{$materia->nombre}}</td>
            <td>{{$materia->estado}}</td>
            <td>{{$materia->creditos}}</td>
            <td>{{$materia->semestre}}</td>
            <td>{{$materia->area}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="col-12 mt-4 justify-content-center d-flex">
    {{ $materias->links() }}
</div>
@endsection