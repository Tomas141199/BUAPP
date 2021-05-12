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

                    @if (Hash::check($alumno->usuario->matricula, $alumno->usuario->password))
                    <div class="form-group d-flex justify-content-center">
                        <span class="col-md-1 col-md-offset-2 text-center">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIwIiB5MT0iMjU4LjAwMDEiIHgyPSI1MTIiIHkyPSIyNTguMDAwMSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAwIDUxNC4wMDAxKSI+DQoJPHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzAwRjJGRSIvPg0KCTxzdG9wICBvZmZzZXQ9IjAuMDIxIiBzdHlsZT0ic3RvcC1jb2xvcjojMDNFRkZFIi8+DQoJPHN0b3AgIG9mZnNldD0iMC4yOTMiIHN0eWxlPSJzdG9wLWNvbG9yOiMyNEQyRkUiLz4NCgk8c3RvcCAgb2Zmc2V0PSIwLjU1NCIgc3R5bGU9InN0b3AtY29sb3I6IzNDQkRGRSIvPg0KCTxzdG9wICBvZmZzZXQ9IjAuNzk2IiBzdHlsZT0ic3RvcC1jb2xvcjojNEFCMEZFIi8+DQoJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzRGQUNGRSIvPg0KPC9saW5lYXJHcmFkaWVudD4NCjxwYXRoIHN0eWxlPSJmaWxsOnVybCgjU1ZHSURfMV8pOyIgZD0iTTMzMiwxNDAuMDU1YzAtMTcuNjczLDE0LjMyNy0zMiwzMi0zMnMzMiwxNC4zMjcsMzIsMzJzLTE0LjMyNywzMi0zMiwzMg0KCVMzMzIsMTU3LjcyOCwzMzIsMTQwLjA1NXogTTEyOCw0OTEuOTM0di0zNmwzNi0wLjAwMWMxMS4wNDUsMCwyMC04Ljk1NCwyMC0yMHYtMzUuOTk5aDM2YzExLjA0NiwwLDIwLTguOTU0LDIwLTIwcy04Ljk1NC0yMC0yMC0yMA0KCWgtNTZjLTExLjA0NiwwLTIwLDguOTU0LTIwLDIwdjM1Ljk5OWwtMzYsMC4wMDFjLTExLjA0NSwwLTIwLDguOTU0LTIwLDIwdjM2SDQwdi01OS43MTZsMTc3LjM1My0xNzcuMzUzDQoJYzYuNTE1LTYuNTE2LDcuNzM2LTE2LjYzOSwyLjk1OC0yNC41MTdjLTYuOTMxLTExLjQyNC0xMy4yOTgtMjMuNjMyLTE4LjkyMy0zNi4yODVjLTYuNTk5LTE0Ljg0MS0zLjIzNy0zMi41Nyw4LjM2Ni00NC4xMTkNCglsNzguNTM3LTc4LjE2OWMxMS4yMTItMTEuMTU5LDI4LjAxMS0xNC43MTksNDIuNzk4LTkuMDY4YzIzLjIyMiw4Ljg3Niw1Ni42OSwyNS4yMTUsODQuMjU2LDUyLjY1Mg0KCWMyNy43MzUsMjcuNjA0LDQ0LjYyLDYxLjU2Nyw1My45LDg1LjE5N2M1Ljc5MSwxNC43NDcsMi4yNzIsMzEuNTAzLTguOTY1LDQyLjY4N2wtNzkuNDg2LDc5LjExNA0KCWMtMTEuNTc0LDExLjUyLTI4Ljg1MSwxNC44ODctNDQuMDE2LDguNThjLTEyLjUwNy01LjIwMi0yNC42MTktMTEuMzgyLTM2LTE4LjM2N2MtOS40MTQtNS43NzgtMjEuNzI5LTIuODMtMjcuNTA3LDYuNTg0DQoJYy01Ljc3OCw5LjQxNC0yLjgzMSwyMS43MjksNi41ODMsMjcuNTA4YzEzLjE1Miw4LjA3MiwyNy4xMzYsMTUuMjA3LDQxLjU2MiwyMS4yMDdjMzAuMTQyLDEyLjUzOSw2NC41MjQsNS44LDg3LjU5NS0xNy4xNjENCglsNzkuNDg2LTc5LjExM2MyMi41NDQtMjIuNDM5LDI5LjYwMi01Ni4wNjMsMTcuOTc5LTg1LjY1OWMtMTAuNjc5LTI3LjE5My0zMC4yNjQtNjYuNDMxLTYyLjkxNS05OC45MjcNCgljLTMyLjUzNS0zMi4zODQtNzEuMzU2LTUxLjQwOC05OC4xOTQtNjEuNjY2Yy0yOS40NjQtMTEuMjYxLTYyLjk0NS00LjE2My04NS4yOTUsMTguMDgybC03OC41MzgsNzguMTcNCgljLTIzLjI4MSwyMy4xNzEtMjkuOTkxLDU4LjgyNS0xNi42OTgsODguNzJjNC4xMjIsOS4yNzEsOC42MDUsMTguMzQxLDEzLjM5NSwyNy4xMDNMNS44NTgsMzg5Ljc5MQ0KCUMyLjEwNywzOTMuNTQyLDAsMzk4LjYyOSwwLDQwMy45MzR2ODhjMCwxMS4wNDYsOC45NTQsMjAsMjAsMjBoODhDMTE5LjA0Niw1MTEuOTM0LDEyOCw1MDIuOTgsMTI4LDQ5MS45MzR6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" class="icono-g"></span>
                        <div class="col-md-8">
                            <input name="password" type="password" placeholder="Tu nueva contraseña"
                                class="form-control @error('matricula') is-invalid @enderror">
                        </div>
                    </div>
                    @endif
                   

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