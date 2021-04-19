@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5">Lista de Alumnos </h2>


@section('hero')

<div class="hero-categorias">
  <form class="container h-100" method="get" action="{{route('administrador.index')}}">
    <div class="row h-100 w-50 align-items-center">
      <div class="col-12 mt-4 justify-content-center d-flex">
        <input type="search" name='search' class="form-control" placeholder="Buscar alumno">
        <input type="submit" class="btn btn-primary" value="Buscar" />
      </div>
    </div>
  </form>
</div>

@endsection

<error-busqueda> </error-busqueda>

@if($message == 0)
<error-busqueda band="{{ $message }}"></error-busqueda>
@endif

<table class="table mt-5">
  <thead>
    <tr>
      <th class="bg-primary-blue text-white" scope="col">ID</th>
      <th class="bg-primary-blue text-white" scope="col">Nombre</th>
      <th class="bg-primary-blue text-white" scope="col">Email</th>
      <th class="bg-primary-blue text-white" scope="col">Matricula</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($alumnos as $usu)
    <tr>
      <th scope="row">{{$usu->id}}</th>
      <td>{{$usu->name}}</td>
      <td>{{$usu->matricula}}</td>
      <td><a class="btn btn-success w-100" href="{{ route('alumno.show', ['alumno' => $usu->alumno->id ]) }}">Ver
          informacion</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="col-12 mt-4 justify-content-center d-flex">
  {{ $alumnos->links() }}
</div>
@endsection