@extends('layouts.menu')

@if(session('message'))
<notificacion-update band="si"> </notificacion-update>
@endif
@section('content')
<h2 class="text-center mb-5">Lista de Alumnos </h2>

<form class="" method="get" action="{{route('administrador.index')}}">
  <div class="col-12 mt-4 justify-content-center d-flex">
    <input type="search" id="search" name='search' class="form-control" placeholder="Buscar alumno">
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
      <td><a class="btn btn-success w-50" href="{{ route('administrador.show', ['alumno' => $usu->alumno->id ]) }}">Ver
          informacion</a>
        <form method="get">
          <input type="submit" id="{{ $usu->matricula}} " class="btn btn-primary w-50 btnEnviar" value="Restaurar">
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>


@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
@include('ajax.search')
@endsection