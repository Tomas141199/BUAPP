@extends('layouts.menualum')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 bg-white p-3 shadow">

            <form class="form-horizontal" action="{{ route('alumno.update', ['alumno' => $alumno->id] )}}"
                method="POST">
                @csrf
                @method('PUT')

                <fieldset>
                    <legend class="text-center header">Editar mi informacion</legend>

                    <div class="form-group d-flex justify-content-center">
                        <span class="col-md-1 col-md-offset-2 text-center">
                            <img src="{{ asset('images\iconos\usuario.png') }}" class="icono-g">
                        </span>
                        <div class="col-md-8">
                            <input name="nombre" type="text" placeholder="Tu nombre"
                                value="{{ $alumno->usuario->name }}"
                                class="form-control @error('nombre') is-invalid @enderror">
                        </div>

                    </div>

                    @error('nombre')
                    <span class="invalid-feedback d-block text-center mb-2 mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="form-group d-flex justify-content-center">
                        <span class="col-md-1 col-md-offset-2 text-center"><img
                                src="{{ asset('images\iconos\correo.png') }}" class="icono-g"></span>
                        <div class="col-md-8">
                            <input name="correo" type="text" placeholder="Tu correo"
                                value="{{ $alumno->usuario->email }}"
                                class="form-control @error('correo') is-invalid @enderror">
                        </div>

                    </div>

                    @error('correo')
                    <span class="invalid-feedback d-block text-center mb-2 mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="form-group d-flex justify-content-center">
                        <span class="col-md-1 col-md-offset-2 text-center"><img
                                src="{{ asset('images\iconos\telefono.png') }}" class="icono-g"></span>
                        <div class="col-md-8">
                            <input name="telefono" type="text" placeholder="Tu telefono o celular"
                                class="form-control @error('telefono') is-invalid @enderror"
                                value="{{ $alumno->telefono }}">
                        </div>

                    </div>

                    @error('telefono')
                    <span class="invalid-feedback d-block text-center mb-2 mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="form-group d-flex justify-content-center">
                        <span class="col-md-1 col-md-offset-2 text-center"><img
                                src="{{ asset('images\iconos\semestre.png') }}" class="icono-g"></span>
                        <div class="col-md-8">
                            <input name="semestre" type="text" placeholder="Tu semestre"
                                class="form-control @error('semestre') is-invalid  @enderror"
                                value="{{ $alumno->semestre }}">
                        </div>

                    </div>

                    @error('semestre')
                    <span class="invalid-feedback d-block text-center mb-2 mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="form-group d-flex justify-content-center">
                        <span class="col-md-1 col-md-offset-2 text-center"><img
                                src="{{ asset('images\iconos\matricula.png') }}" class="icono-g"></span>
                        <div class="col-md-8">
                            <input name="matricula" type="text" placeholder="Tu matricula"
                                class="form-control @error('matricula') is-invalid @enderror"
                                value="{{ $alumno->usuario->matricula }}">
                        </div>
                    </div>

                    @error('matricula')
                    <span class="invalid-feedback d-block text-center mb-2 mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg bg-secondary-blue">Guardar
                                informacion</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
@endsection