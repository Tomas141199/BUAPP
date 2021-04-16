@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5">Lista de Alumnos </h2>

<form method= "get" action="{{route('administrador.index')}}" >

  <input type="search" name='search' class="form-control">

  <input type="submit" class="btn btn-primary" value="Buscar">

</form>

<table class="table">
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
        <td>{{$usu->email}}</td>
        <td>{{$usu->matricula}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
<div class="col-12 mt-4 justify-content-center d-flex">
    {{ $alumnos->links() }}
</div>
@endsection
@extends('layouts.footer')

