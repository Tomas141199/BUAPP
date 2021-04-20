@extends('layouts.adapp')
@section('content')
<h2 class="text-center mb-5">Lista de Alumnos </h2>





<div class="container"> 

  <h6>
  @if($search)
      <div class="alert alert-primary" role="alert">
       Resultados de su busqueda '{{$search}}' son:
      </div>
    @endif
  </h6>
</div>


<table class="table mt-5">
  <thead>
    <tr>
      <th class="bg-primary-blue text-white" scope="col">ID</th>
      <th class="bg-primary-blue text-white" scope="col">Nombre</th>
      <th class="bg-primary-blue text-white" scope="col">Email</th>
      <th class="bg-primary-blue text-white" scope="col">Matricula</th>
      <th class="bg-primary-blue text-white" scope="col"> Funciones </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($alumnos as $usu)
    <tr>
      <th scope="row">{{$usu->id}}</th>
      <td>{{$usu->name}}</td>
      <td>{{$usu->matricula}}</td>
      <td>
      <form action="{{route('administrador.update',$usu->id)}}" class="container h-100" method="get">
      <a class="btn btn-primary" href="{{ route('administrador.index') }}">
      {{ __('Restaurar') }}
      </a>
      </form>
      </td>
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