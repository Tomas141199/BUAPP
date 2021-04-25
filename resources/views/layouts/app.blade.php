<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('estilos')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary-blue shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                    @if(Auth::user())
                    @if(auth()->user()->fullacces == 'yes')
                    {{ 'Administrador' }}
                    @else
                    {{ 'Estudiante' }}
                    @endif
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-info rounded-pill mr-2 bg-secondary-blue"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-info rounded-pill bg-secondary-blue"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif --}}

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @if(Auth::user()->fullacces !== 'yes')

                                <a class="dropdown-item" href="{{ route('alumno.index') }}">
                                    {{ __('Inicio') }}</a>

                                <a class="dropdown-item"
                                    href="{{ route('alumno.show', ['alumno' => Auth::user()->id ]) }}">
                                    {{ __('Mi Perfil') }}</a>

                                <a class="dropdown-item"
                                    href="{{ route('alumno.proyeccion', ['alumno' => Auth::user()->id ]) }}">
                                    {{ __('Mi Proyeccion') }}</a>


                                @endif

                                @if(Auth::user()->fullacces == 'yes')
                                <a class="dropdown-item"
                                    href="{{ route('administrador.index') }}">{{ __('Inicio') }}</a>
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif



                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-md navbar-light categorias-bg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#categorias"
                    aria-controls="categorias" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    Menu
                </button>
                <div class="collapse navbar-collapse " id="categorias">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav w-100 d-flex justify-content-between">
                        @foreach ($categorias as $key)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $key['url'] }}" target="_blank">
                                {{ $key['nombre'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>

        @yield('hero')

        <div class="container">
            <div class="row">
                <main class="py-4 mt-2 col-12">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    </div>
    </main>

    <footer>
        @include('layouts.footer')
    </footer>

    </div>

    @yield('scripts')
</body>

</html>