@extends('layouts.app')

@section('content')

@if(session('message'))
<notificacion-update band="si"> </notificacion-update>
@endif

<div class="container">
    <div class=" card mb-3 mx-auto shadow" style="max-width: 540px;">
        <div class="card-header bg-transparent border-primary font-weight-bold">Informacion personal </div>
        <div class="row g-0">
            {{-- Imagen del estudiante --}}
            <div class="col-md-4">
                <img src="{{ asset('images\perfil.png') }}" class="w-100 rounded-circle">
            </div>

            {{-- Datos del estudiante --}}
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Nombre</h5>
                    <p class="card-text">{{ $alumno->usuario->name }}</p>

                    <h5 class="card-title font-weight-bold">Matricula</h5>
                    <p class="card-text">{{ $alumno->usuario->matricula }}</p>

                    <h5 class="card-title font-weight-bold">Telefono</h5>
                    <p class="card-text">
                        @if($alumno->telefono == "")
                        {{ "Aun no tienes un telefono registrado "}}
                        @else
                        {{ $alumno->telefono }}</p>
                    @endif

                    <h5 class="card-title font-weight-bold">Semestre</h5>
                    <p class="card-text">{{ $semestre }} </p>

                    <h5 class="card-title font-weight-bold">Tu progreso</h5>
                    <p class="card-text">{{ $promedio }}%</p>
                    

                    <h5 class="card-title font-weight-bold">Correo</h5>
                    <p class="card-text">{{ $alumno->usuario->email }}</p>

                    <h5 class="card-title font-weight-bold">Contraseña</h5>
                    <div class="input-group">
                        <input class="transparent-input pwd" type="password" value="{{ $alumno->usuario->password }}" />
                        <span class="input-group-btn">
                            <button class="btn btn-defualt reveal" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 icono" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                </svg>
                            </button>
                        </span>
                    </div>

                </div>
            </div>

        </div>

        @if(Auth::user()->fullacces !== 'yes')
        <div class="card-footer bg-transparent border-primary"><a class="btn btn-primary w-100"
                href="{{ route('alumno.edit',['alumno' => $alumno->id ]) }}">Editar
                Informacion</a></div>
    </div>
    @endif

</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('/js/revealPassword.js') }}"></script>
@endsection