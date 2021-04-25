@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5">Lista de Alumnos </h2>

<form class="" method="get" action="{{route('administrador.index')}}">
  <div class="col-12 mt-4 justify-content-center d-flex">
    <input type="search" name='search' class="form-control" placeholder="Buscar alumno">
    <input type="submit" class="btn btn-primary" value="Buscar" />
  </div>
</form>



<table class="table mt-5">
  <thead>
    <tr>
      <th class="bg-primary-blue text-white" scope="col">ID</th>
      <th class="bg-primary-blue text-white" scope="col">Nombre</th>
      <th class="bg-primary-blue text-white" scope="col">Matricula</th>
      <th class="bg-primary-blue text-white" scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($alumnos as $usu)
    <tr>
      <th scope="row">{{$usu->id}}</th>
      <td>{{$usu->name}}</td>
      <td>{{$usu->matricula}}</td>
      <td><a class="btn btn-success w-50" href="{{ route('alumno.show', ['alumno' => $usu->alumno->id ]) }}">Ver
          informacion</a>
        <form action="{{route('administrador.update', ['alumno' => $usu->alumno->id ])}}" method="get">
          <input type="submit" class="btn btn-primary w-50" value="Restaurar">
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
<div class="col-12 mt-4 justify-content-center d-flex">
  {{ $alumnos->links() }}
</div>

@if(session('message'))
<notificacion-update band="si"> </notificacion-update>
@endif




@endsection