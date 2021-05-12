<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BUAPP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="dist/js/adminlte.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" role="button">
                        <img class=icono src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ2NC44ODMgNjQuMjY3aC00MTcuNzY2Yy0yNS45OCAwLTQ3LjExNyAyMS4xMzYtNDcuMTE3IDQ3LjE0OSAwIDI1Ljk4IDIxLjEzNyA0Ny4xMTcgNDcuMTE3IDQ3LjExN2g0MTcuNzY2YzI1Ljk4IDAgNDcuMTE3LTIxLjEzNyA0Ny4xMTctNDcuMTE3IDAtMjYuMDEzLTIxLjEzNy00Ny4xNDktNDcuMTE3LTQ3LjE0OXoiIGZpbGw9IiMwMDAwMDAiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im00NjQuODgzIDIwOC44NjdoLTQxNy43NjZjLTI1Ljk4IDAtNDcuMTE3IDIxLjEzNi00Ny4xMTcgNDcuMTQ5IDAgMjUuOTggMjEuMTM3IDQ3LjExNyA0Ny4xMTcgNDcuMTE3aDQxNy43NjZjMjUuOTggMCA0Ny4xMTctMjEuMTM3IDQ3LjExNy00Ny4xMTcgMC0yNi4wMTMtMjEuMTM3LTQ3LjE0OS00Ny4xMTctNDcuMTQ5eiIgZmlsbD0iIzAwMDAwMCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ2NC44ODMgMzUzLjQ2N2gtNDE3Ljc2NmMtMjUuOTggMC00Ny4xMTcgMjEuMTM3LTQ3LjExNyA0Ny4xNDkgMCAyNS45OCAyMS4xMzcgNDcuMTE3IDQ3LjExNyA0Ny4xMTdoNDE3Ljc2NmMyNS45OCAwIDQ3LjExNy0yMS4xMzcgNDcuMTE3LTQ3LjExNyAwLTI2LjAxMi0yMS4xMzctNDcuMTQ5LTQ3LjExNy00Ny4xNDl6IiBmaWxsPSIjMDAwMDAwIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
                        </a>
                    </li>
                    <li>
                    <a class="nav-link" role="button" href="javascript:history.back()">
                    <img class=icono src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHBhdGggZD0iTTI1NiwwQzExNC41MDksMCwwLDExNC40OTcsMCwyNTZjMCwxNDEuNDkxLDExNC40OTcsMjU2LDI1NiwyNTZjMTQxLjQ5MSwwLDI1Ni0xMTQuNDk3LDI1Ni0yNTYgICAgQzUxMiwxMTQuNTA5LDM5Ny41MDMsMCwyNTYsMHogTTM5My41MDgsMjg2LjI5MmMwLDkuNDI1LTcuNjQxLDE3LjA2Ny0xNy4wNjcsMTcuMDY3SDI3NC43NTR2NDcuOTE5ICAgIGMwLDE0LjI4NS0xNi40NTYsMjIuMTIzLTI3LjU2NSwxMy40NTZMMTI1LjA2LDI2OS40NTZjLTguNzYxLTYuODM1LTguNzQyLTIwLjA5MywwLTI2LjkxMmwxMjIuMTI5LTk1LjI3NyAgICBjMTEuMTcyLTguNzEzLDI3LjU2NS0wLjc1MiwyNy41NjUsMTMuNDU2djQ3LjkxOWgxMDEuNjg4YzkuNDI1LDAsMTcuMDY3LDcuNjQxLDE3LjA2NywxNy4wNjdWMjg2LjI5MnoiIGZpbGw9IiM2MDdkOGIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
                    </a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf

                    </li>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <div class="bg-primary-blue text-bold">
                    <a href="{{ url('/') }}" class="brand-link">
                        <img src="{{ asset('images\BUAPLOGO.png') }}" width="60px" height="60px" alt="logo buap" style="opacity: .8">
                        BUAP
                    </a>
                </div>
                <!-- Sidebar -->
                <div class="sidebar bg-primary-blue">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDM2LjkwNyA0MzYuOTA3IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0MzYuOTA3IDQzNi45MDc7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxjaXJjbGUgc3R5bGU9ImZpbGw6IzQ1QjM5QzsiIGN4PSIyMTguNDUzIiBjeT0iMjE4LjQ1MyIgcj0iMjE4LjQ1MyIvPg0KPGcgc3R5bGU9Im9wYWNpdHk6MC4xOyI+DQoJPHBhdGggZD0iTTQyOC4zNzMsMjc5LjIxMWwtMTc0LjA4LTE3NC4wOGMtMy40MTMtMy43NTUtNy41MDktNi44MjctMTIuNjI5LTkuNTU3Yy01LjEyLTIuMzg5LTEwLjkyMy00LjQzNy0xNy40MDgtNS4xMmwwLDANCgkJYy0xLjcwNywwLTMuNDEzLTAuMzQxLTUuNDYxLTAuMzQxYzAsMCwwLDAtMC4zNDEsMGMtMjkuMzU1LDAtNTMuMjQ4LDI2LjYyNC01My4yNDgsNTkuMDUxYzAsMTguNDMyLDcuODUxLDM0LjgxNiwxOS43OTcsNDUuNzM5DQoJCWwxNy43NDksMTcuNzQ5djExLjI2NHYwLjM0MWMtNC4wOTYsMC42ODMtOC41MzMsMi4wNDgtMTIuMjg4LDMuNDEzbC0wLjY4MywwLjM0MWMtMC4zNDEsMC0wLjY4MywwLjM0MS0xLjM2NSwwLjM0MWwtMS4zNjUsMC42ODMNCgkJbDAsMGMtMTAuMjQsNC4wOTYtMTkuMTE1LDkuODk5LTI2Ljk2NSwxNy40MDhsLTIxLjE2My01LjEydjE4LjA5MWwtMC4zNDEtMC42ODNjMCwwLTE1LjM2LDkuODk5LTE2LjcyNSwyNC4yMzUNCgkJYy0wLjY4Myw2LjgyNywyLjA0OCwyMC40OCw5LjU1NywyNy45ODlsMCwwbDcuNTA5LDcuNTA5djEwLjU4MWwxMDYuNDk2LDEwNi40OTZDMzMyLjgsNDI0LjI3Nyw0MDQuNDgsMzYxLjgxMyw0MjguMzczLDI3OS4yMTF6Ii8+DQo8L2c+DQo8cGF0aCBzdHlsZT0iZmlsbDojRTFFNkU5OyIgZD0iTTMwMy43ODcsMzEwLjYxM0gxMzMuMTJ2LTIuMzg5YzAtNDcuMTA0LDM4LjIyOS04NS4zMzMsODUuMzMzLTg1LjMzM2wwLDANCgljNDcuMTA0LDAsODUuMzMzLDM4LjIyOSw4NS4zMzMsODUuMzMzVjMxMC42MTN6Ii8+DQo8Zz4NCgk8ZWxsaXBzZSBzdHlsZT0iZmlsbDojRjZDMzU4OyIgY3g9IjIxOC40NTMiIGN5PSIxNDkuNTA0IiByeD0iNTMuMjQ4IiByeT0iNTkuMDUxIi8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0Y2QzM1ODsiIGQ9Ik0yMjUuMjgsMjM4LjI1MWgtOC41MzNjLTcuODUxLDAtMTMuOTk1LTYuMTQ0LTEzLjk5NS0xMy45OTV2LTMyLjA4NWgzNi44NjR2MzIuMDg1DQoJCUMyMzkuNjE2LDIzMi4xMDcsMjMzLjEzMSwyMzguMjUxLDIyNS4yOCwyMzguMjUxeiIvPg0KPC9nPg0KPHBhdGggc3R5bGU9ImZpbGw6IzNBNTU2QTsiIGQ9Ik0yMzEuNzY1LDExNS43MTJjMCwwLDYuNDg1LDI1Ljk0MSwzOS41OTUsMjYuNjI0Yy0zLjA3Mi0yOS4zNTUtMjUuNi01MS44ODMtNTIuOTA3LTUxLjg4Mw0KCWMtMjkuMzU1LDAtNTMuMjQ4LDI2LjI4My01My4yNDgsNTguNzA5QzE3NS40NDUsMTQ4LjQ4LDIyMS4xODQsMTQzLjAxOSwyMzEuNzY1LDExNS43MTJ6Ii8+DQo8Zz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRDE1MjQxOyIgZD0iTTIyMC41MDEsMjQ4LjQ5MWMtMTguNzczLDAtMzMuNzkyLTguODc1LTMzLjc5Mi0xOS40NTZsMy40MTMtMS4zNjUNCgkJYy0wLjM0MSw5LjU1NywxMy45OTUsMTcuNDA4LDMwLjM3OSwxNy40MDhzMzAuNzItNS44MDMsMzAuMzc5LTE1LjcwMWwzLjQxMywxLjM2NQ0KCQlDMjU0LjI5MywyNDEuNjY0LDIzOS42MTYsMjQ4LjQ5MSwyMjAuNTAxLDI0OC40OTF6Ii8+DQoJPHJlY3QgeD0iMjE4LjExMiIgeT0iMjQ2Ljc4NCIgc3R5bGU9ImZpbGw6I0QxNTI0MTsiIHdpZHRoPSI1LjEyIiBoZWlnaHQ9IjYzLjgyOSIvPg0KCTxyZWN0IHg9IjE2My40OTkiIHk9IjI3Mi4wNDMiIHN0eWxlPSJmaWxsOiNEMTUyNDE7IiB3aWR0aD0iMy40MTMiIGhlaWdodD0iMzguNTcxIi8+DQoJPHJlY3QgeD0iMjcwLjMzNiIgeT0iMjcyLjA0MyIgc3R5bGU9ImZpbGw6I0QxNTI0MTsiIHdpZHRoPSIzLjQxMyIgaGVpZ2h0PSIzOC41NzEiLz4NCjwvZz4NCjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNFNTYzNTM7IiBwb2ludHM9IjEzOC45MjMsMjQxLjMyMyAyMTkuODE5LDI2MS4xMiAyOTcuOTg0LDI0MS4zMjMgMjk3Ljk4NCwzMzEuNzc2IDIyMS4xODQsMzQ2LjQ1MyANCgkxMzguOTIzLDMyOC43MDQgIi8+DQo8cG9seWdvbiBzdHlsZT0iZmlsbDojRDE1MjQxOyIgcG9pbnRzPSIyMjEuMTg0LDM0Ni40NTMgMTM4LjkyMywzMjguNzA0IDEzOC45MjMsMjQxLjMyMyAyMjEuMTg0LDI2MS4xMiAiLz4NCjxnPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNGNkMzNTg7IiBkPSJNMjk0LjU3MSwyNzIuMDQzbDMuNzU1LTEzLjMxMmMwLDAsMTUuMzYsOS44OTksMTYuNzI1LDI0LjIzNQ0KCQljMS4zNjUsMTEuMjY0LTcuMTY4LDQwLjI3Ny0yOS4zNTUsMzEuNDAzYy03Ljg1MS0zLjA3Mi0xNS43MDEtMTUuNzAxLTkuMjE2LTMxLjQwMw0KCQlDMjc4LjUyOCwyNzcuODQ1LDI4NC4zMzEsMjcxLjcwMSwyOTQuNTcxLDI3Mi4wNDN6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0Y2QzM1ODsiIGQ9Ik0xNDIuMzM2LDI3Mi4wNDNsLTMuNzU1LTEzLjMxMmMwLDAtMTUuMzYsOS44OTktMTYuNzI1LDI0LjIzNQ0KCQljLTEuMzY1LDExLjI2NCw3LjE2OCw0MC4yNzcsMjkuMzU1LDMxLjQwM2M3Ljg1MS0zLjA3MiwxNS43MDEtMTUuNzAxLDkuMjE2LTMxLjQwMw0KCQlDMTU4LjM3OSwyNzcuODQ1LDE1Mi41NzYsMjcxLjcwMSwxNDIuMzM2LDI3Mi4wNDN6Ii8+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                {{ Auth::user()->name }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                </form>
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="bg-primary-blue">
                        <ul class=" nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="{{ route('alumno.index') }}" 
                                class="{{ Request::path() === 'alumno.index' ? 'nav-link active' : 'nav-link' }}">
                                    <img class="icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ4NS4zNDEgNDM3LjQyNmgtMTMuMThjLTkuMTQ0LTIxLjcyNi05LjE0OC00Mi45MjUtLjAxLTY0LjU0MmgxMy4xOWMxNC43IDAgMjYuNjU5LTExLjk1OSAyNi42NTktMjYuNjYgMC0xNC43LTExLjk1OS0yNi42Ni0yNi42NTktMjYuNjZoLTUzLjAzOGM2Ljc1MS03LjcxMiAxMC44NTUtMTcuNzk1IDEwLjg1NS0yOC44MjZ2LTgzLjUzYzAtMjQuMTY2LTE5LjY1OS00My44MjYtNDMuODI0LTQzLjgyNmgtMjEuNTY3YzEuODMtMy42NDggMi44NjYtNy43NjEgMi44NjYtMTIuMTEzIDAtMTQuOTY3LTEyLjE2Mi0yNy4xNDQtMjcuMTEyLTI3LjE0NGgtNy40MTljLTYuNjIxLTE2LjM2Ny02LjYyNS0zMi4zNTMtLjAxMS00OC42MTVoNy40M2MxNC45NSAwIDI3LjExMi0xMi4xNzcgMjcuMTEyLTI3LjE0NCAwLTE0Ljk1LTEyLjE2Mi0yNy4xMTMtMjcuMTEyLTI3LjExM2gtMjUzLjAwM2MtNDMuMzI4IDAtNzguNTc4IDM1LjIzNy03OC41NzggNzguNTQ5IDAgMjAuOTQ2IDguMTg2IDQwLjY2NyAyMy4wNDggNTUuNTMgMi45NTUgMi45NTUgNi4xMDkgNS42MzQgOS40MTkgOC4wNDloLTUuODA4Yy0xNC43IDAtMjYuNjU5IDExLjk1OS0yNi42NTkgMjYuNjZzMTEuOTU5IDI2LjY2IDI2LjY1OSAyNi42NmgxMy4xOWM5LjEzOCAyMS42MTUgOS4xMzUgNDIuODE1LS4wMSA2NC41NDFoLTEzLjE4Yy0xNC43IDAtMjYuNjU5IDExLjk1OS0yNi42NTkgMjYuNjYgMCA1LjYyNCAxLjc1NSAxMC44NDMgNC43MzkgMTUuMTQ4LTE1LjY2OCA2LjY4NS0yNi42NzkgMjIuMjQ5LTI2LjY3OSA0MC4zNHY4My41MzFjMCAyNC4xNjYgMTkuNjQ2IDQzLjgyNSA0My43OTQgNDMuODI1aDQ0MS41NDZjMTQuNyAwIDI2LjY1OS0xMS45NTkgMjYuNjU5LTI2LjY2LjAwMS0xNC43LTExLjk1OC0yNi42Ni0yNi42NTgtMjYuNjZ6bTAtMTAyLjg2MmM2LjQyOSAwIDExLjY1OSA1LjIzMSAxMS42NTkgMTEuNjZzLTUuMjMgMTEuNjYtMTEuNjU5IDExLjY2aC0xMzUuMzU3Yy00LjE0MyAwLTcuNSAzLjM1OC03LjUgNy41czMuMzU3IDcuNSA3LjUgNy41aDEwNi4wNzhjLTIuOTMxIDguMjMyLTQuNzIzIDE2LjQ5Ni01LjQgMjQuNzcxIDAgMC0yLjk5NiAxNC44NDUgNS40MTYgMzkuNzcxaC00MDAuNTg4Yy0xLjE3NiAwLTIuMTctLjk5NC0yLjE3LTIuMTcxdi02MC4yYzAtMS4xNzYuOTk0LTIuMTcgMi4xNy0yLjE3aDc0LjMwMWwuMDA1IDI0LjYzMmMtLjQ3MyA3LjM3NCAzLjEyOCAxMC4yOCA1LjMzOSAxMS4zNiAyLjI0MSAxLjA5NiA2Ljg0NSAyLjE1NyAxMi41MS0zLjAyMS4wMzktLjAzNi4wNzgtLjA3Mi4xMTYtLjEwOGwyMC45NjQtMTkuOTk1IDIwLjk2NCAxOS45OTVjLjAzOC4wMzcuMDc3LjA3My4xMTYuMTA4IDMuMzE2IDMuMDMxIDYuMjY4IDMuOTI2IDguNTk5IDMuOTI2IDEuNjY1IDAgMy4wMTMtLjQ1NyAzLjk0OS0uOTE4IDIuMjE0LTEuMDkgNS44MS00LjAxIDUuMzAxLTExLjM2N2wuMDEtMjQuNjEyaDEwNS4zOTJjNC4xNDMgMCA3LjUtMy4zNTggNy41LTcuNXMtMy4zNTctNy41LTcuNS03LjVoLTEwNS4zODdsLjAxLTIzLjMyaDI3Ny42NjJ6bS00MDIuMDU5LTkzLjA5Yy0uNjc2LTguMjc1LTIuNTAzLTE2LjUzOC01LjQzMi0yNC43NzFoMzA5LjgyYzEuMTc3IDAgMi4xNzEuOTk0IDIuMTcxIDIuMTd2NjAuMmMwIDEuMTc2LS45OTQgMi4xNy0yLjE3MSAyLjE3aC0xNzkuOTY5bC4wMS0yNC43NzFoNTIuNDg5YzQuMTQzIDAgNy41LTMuMzU4IDcuNS03LjVzLTMuMzU3LTcuNS03LjUtNy41aC0xNzYuOTE4em00Ni40OSAzOS43N2gtNTEuOTM5YzIuOTI3LTguMjQ0IDQuNzU3LTE2LjUwNyA1LjQ0MS0yNC43NzFoNDYuNDkzem02Mi45MzktMjQuNzctLjA1NCAxMzEuMzc2LTE4Ljc1Ny0xNy44OWMtMi44OTctMi43NjQtNy40NTUtMi43NjQtMTAuMzUzIDBsLTE4Ljc1NCAxNy44ODgtLjAyNy0xMzEuMzc1aDQ3Ljk0NXptLTE1NS43NzEtMTU2LjY3MWMwLTM1LjA0MSAyOC41MjEtNjMuNTQ5IDYzLjU3OC02My41NDloMjUzLjAwM2M2LjY3OSAwIDEyLjExMiA1LjQzNCAxMi4xMTIgMTIuMTEzIDAgNi42OTYtNS40MzQgMTIuMTQ0LTEyLjExMiAxMi4xNDRoLTEzOC4yNThjLTQuMTQyIDAtNy41IDMuMzU4LTcuNSA3LjVzMy4zNTggNy41IDcuNSA3LjVoMTE0Ljg0N2MtNS4yOTQgMTYuMTM0LTUuMjg3IDMyLjQxMS4wMiA0OC42MTVoLTIyOS42MTJjLTYuNDUgMC0xMi41NTctMi41NDEtMTcuMTY3LTcuMTI4LTQuNjE0LTQuNjM4LTcuMTU1LTEwLjc0NC03LjE1NS0xNy4xOTUgMC0xMy4zOTUgMTAuOTExLTI0LjI5MiAyNC4zMjItMjQuMjkyaDc3LjgxN2M0LjE0MiAwIDcuNS0zLjM1OCA3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNWgtNzcuODE3Yy0yMS42ODIgMC0zOS4zMjIgMTcuNjI2LTM5LjMyMiAzOS4yOTIgMCAxMC40NDMgNC4wOTIgMjAuMzA3IDExLjU0OCAyNy44MDEgNy40NjggNy40MyAxNy4zMzEgMTEuNTIyIDI3Ljc3NCAxMS41MjJoMjUzLjAwM2M2LjY3OSAwIDEyLjExMiA1LjQ0OCAxMi4xMTIgMTIuMTQ0IDAgNi42NzktNS40MzQgMTIuMTEzLTEyLjExMiAxMi4xMTNoLTI1My4wMDNjLTE2LjkzOSAwLTMyLjg5My02LjYyNS00NC45MjMtMTguNjU2LTEyLjAzLTEyLjAzLTE4LjY1NS0yNy45ODQtMTguNjU1LTQ0LjkyNHptMTEuNjU5IDEwMS45Yy02LjQyOSAwLTExLjY1OS01LjIzLTExLjY1OS0xMS42NiAwLTYuNDI5IDUuMjMtMTEuNjYgMTEuNjU5LTExLjY2aDM1MC43MzVjMTUuODk0IDAgMjguODI0IDEyLjkzMSAyOC44MjQgMjguODI2djgzLjUzYzAgMTUuODk1LTEyLjkzMSAyOC44MjYtMjguODI0IDI4LjgyNmgtMTkxLjY0OWwuMDEtMjMuMzJoMTc5Ljk3NGM5LjQ2OCAwIDE3LjE3MS03LjcwMyAxNy4xNzEtMTcuMTd2LTYwLjJjMC05LjQ2OC03LjcwMy0xNy4xNy0xNy4xNzEtMTcuMTdoLTMzOS4wN3ptMCA5NC41NDFoODEuMTc2bC4wMDUgMjMuMzJoLTgxLjE4Yy02LjQyOSAwLTExLjY1OS01LjIzMS0xMS42NTktMTEuNjYtLjAwMS02LjQyOSA1LjIyOS0xMS42NiAxMS42NTgtMTEuNjZ6bTQzNi43NDIgMTc5LjUwMmgtNDQxLjU0N2MtMTUuODc3IDAtMjguNzk0LTEyLjkzMS0yOC43OTQtMjguODI1di04My41MzFjMC0xNS44OTUgMTIuOTE3LTI4LjgyNiAyOC43OTQtMjguODI2aDg1Ljk4OGwuMDA1IDIzLjMyaC03NC4yOTdjLTkuNDY4IDAtMTcuMTcgNy43MDMtMTcuMTcgMTcuMTd2NjAuMmMwIDkuNDY4IDcuNzAzIDE3LjE3MSAxNy4xNyAxNy4xNzFoNDI5Ljg1MWM2LjQyOSAwIDExLjY1OSA1LjIzMSAxMS42NTkgMTEuNjZzLTUuMjMgMTEuNjYxLTExLjY1OSAxMS42NjF6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvZz48L3N2Zz4=" />
                                    <p>Mis Materias</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('alumno.show', ['alumno' => Auth::user()->id ])}}"
                                    class="{{ Request::path() === 'alumno.show' ? 'nav-link active' : 'nav-link' }}">
                                    <img class="icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgaWQ9Im91dGxpbmUiPjxwYXRoIGQ9Ik0yNTYsMTZBMjQwLDI0MCwwLDAsMCw4Ni4yOTQsNDI1LjcwNSwyNDAsMjQwLDAsMSwwLDQyNS43MDYsODYuMywyMzguNDMzLDIzOC40MzMsMCwwLDAsMjU2LDE2Wk00MTQuMzkyLDQxNC4zOTJBMjI0LDIyNCwwLDAsMSw5Ny42MDgsOTcuNjA4LDIyNCwyMjQsMCwwLDEsNDE0LjM5Miw0MTQuMzkyWiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxwYXRoIGQ9Ik0yNTYsNDhDMTQxLjMwOSw0OCw0OCwxNDEuMzA5LDQ4LDI1NnM5My4zMDksMjA4LDIwOCwyMDgsMjA4LTkzLjMwOSwyMDgtMjA4UzM3MC42OTEsNDgsMjU2LDQ4Wm0wLDQwMGExOTEuMTkxLDE5MS4xOTEsMCwwLDEtMTI2LjE0My00Ny4zNzZBODEuODMxLDgxLjgzMSwwLDAsMSwxNzYuMDY4LDM0My4zbDMyLjI2NS0xNC42NjZhOCw4LDAsMCwwLC45NDMtMTQuMDU5LDg4LDg4LDAsMSwxLDkzLjQ0OCwwLDgsOCwwLDAsMCwuOTQzLDE0LjA1OUwzMzUuOTMyLDM0My4zYTgyLjA4Myw4Mi4wODMsMCwwLDEsNDYuMjE0LDU3LjMxOUExOTEuMTkzLDE5MS4xOTMsMCwwLDEsMjU2LDQ0OFptMTM5LjMwNi02MC4wMWE5OC4xMyw5OC4xMywwLDAsMC01Mi43NTMtNTkuMjU0bC0xOS43NzUtOC45ODhhMTA0LDEwNCwwLDEsMC0xMzMuNTU2LDBsLTE5Ljc3NSw4Ljk4OGE5Ny44LDk3LjgsMCwwLDAtNTIuNzU2LDU5LjI1MUExOTEuMzE4LDE5MS4zMTgsMCwwLDEsNjQsMjU2QzY0LDE1MC4xMzEsMTUwLjEzMSw2NCwyNTYsNjRzMTkyLDg2LjEzMSwxOTIsMTkyQTE5MS4zMTUsMTkxLjMxNSwwLDAsMSwzOTUuMzA2LDM4Ny45OVoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCBkPSJNNDA1LjEsMzMzLjlhNy45OTMsNy45OTMsMCwwLDAsMTAuNjI1LTMuODg5YzEuMDYtMi4yODUsMi4wODUtNC42MjYsMy4wNDYtNi45NTdhOCw4LDAsMCwwLTE0Ljc5Mi02LjFjLS44NzMsMi4xMTktMS44LDQuMjQ1LTIuNzY4LDYuMzIyQTgsOCwwLDAsMCw0MDUuMSwzMzMuOVoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCBkPSJNNDE2LDI1NmExNjEuNDQ2LDE2MS40NDYsMCwwLDEtMi45LDMwLjQ4NSw4LDgsMCwxLDAsMTUuNzExLDMuMDNBMTc3LjUsMTc3LjUsMCwwLDAsNDMyLDI1NmExNzUuNTY1LDE3NS41NjUsMCwwLDAtMTAuMDE3LTU4LjY2Niw4LDgsMCwxLDAtMTUuMDg1LDUuMzMyQTE1OS42MzQsMTU5LjYzNCwwLDAsMSw0MTYsMjU2WiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxjaXJjbGUgY3g9IjI1NiIgY3k9IjEwOCIgcj0iMTIiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvY2lyY2xlPjxjaXJjbGUgY3g9IjI5NCIgY3k9IjEwOCIgcj0iMTAiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvY2lyY2xlPjxjaXJjbGUgY3g9IjIxOCIgY3k9IjEwOCIgcj0iMTAiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvY2lyY2xlPjxjaXJjbGUgY3g9IjIyOCIgY3k9IjIyOCIgcj0iMTIiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvY2lyY2xlPjxjaXJjbGUgY3g9IjI4NCIgY3k9IjIyOCIgcj0iMTIiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvY2lyY2xlPjxwYXRoIGQ9Ik0yNzQuMzQzLDI2Ni4zNDNhMjUuOTY5LDI1Ljk2OSwwLDAsMS0zNi42ODYsMCw4LDgsMCwwLDAtMTEuMzE0LDExLjMxNCw0MS45ODgsNDEuOTg4LDAsMCwwLDU5LjMxNCwwLDgsOCwwLDAsMC0xMS4zMTQtMTEuMzE0WiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjwvZz48L2c+PC9zdmc+" />
                                    <p>
                                        Mi Perfil
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('alumno.proyeccion', ['alumno' => Auth::user()->id ])}}"
                                    class="{{ Request::path() === 'alumno.proyeccion' ? 'nav-link active' : 'nav-link' }}">
                                    <img class="icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPHBhdGggZD0iTTQ5Ni40ODQsODcuMTQ1YzguNTU2LDAsMTUuNTE2LTYuOTYsMTUuNTE2LTE1LjUxNlY1NS41OTdjMC04LjU1Ni02Ljk2LTE1LjUxNi0xNS41MTYtMTUuNTE2SDE1LjUxNiAgIEM2Ljk2LDQwLjA4MSwwLDQ3LjA0MSwwLDU1LjU5N3YxNi4wMzJjMCw4LjU1Niw2Ljk2LDE1LjUxNiwxNS41MTYsMTUuNTE2aDAuNTE2djMwNS42NDZINy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41ICAgczMuMzU4LDcuNSw3LjUsNy41aDI0MXYxOC4yOTdjLTkuMzA4LDMuMTM5LTE2LjAzMiwxMS45NDYtMTYuMDMyLDIyLjNjMCwxMi45NzYsMTAuNTU3LDIzLjUzMiwyMy41MzIsMjMuNTMyICAgczIzLjUzMi0xMC41NTcsMjMuNTMyLTIzLjUzMmMwLTEwLjM1My02LjcyNC0xOS4xNi0xNi4wMzItMjIuM3YtMTguMjk3aDI0MWM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNWgtOC41MzIgICBWODcuMTQ1SDQ5Ni40ODR6IE0yNTYsNDU2LjkxOWMtNC43MDUsMC04LjUzMi0zLjgyOC04LjUzMi04LjUzMnMzLjgyOC04LjUzMiw4LjUzMi04LjUzMnM4LjUzMiwzLjgyOCw4LjUzMiw4LjUzMiAgIFMyNjAuNzA1LDQ1Ni45MTksMjU2LDQ1Ni45MTl6IE00ODAuOTY4LDM5Mi43OTFIMzEuMDMyVjg3LjE0NUg0NDAuMzdjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXMtMy4zNTgtNy41LTcuNS03LjVIMTUuNTE2ICAgYy0wLjI4NSwwLTAuNTE2LTAuMjMxLTAuNTE2LTAuNTE2VjU1LjU5N2MwLTAuMjg1LDAuMjMxLTAuNTE2LDAuNTE2LTAuNTE2aDQ4MC45NjhjMC4yODUsMCwwLjUxNiwwLjIzMSwwLjUxNiwwLjUxNnYxNi4wMzIgICBjMCwwLjI4NS0wLjIzMSwwLjUxNi0wLjUxNiwwLjUxNmgtMjQuMDQ3Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41czMuMzU4LDcuNSw3LjUsNy41aDguNTMxVjM5Mi43OTF6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+Cgk8cGF0aCBkPSJNNzkuNjQ1LDI1NS40ODRoMTYuMDI5YzQuMTQyLDAsNy41LTMuMzU4LDcuNS03LjVzLTMuMzU4LTcuNS03LjUtNy41aC04LjUyOXYtMTcuMDY0aDY1LjE2MnYxNy4wNjRIMTI3Ljc0ICAgYy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41czMuMzU4LDcuNSw3LjUsNy41aDMyLjA2NmM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41di0zMi4wNjRjMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNWgtMzIuNTgxICAgdi0xNy4wNjRoMTIwLjc1OGM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41di00OC4wOTdjMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNUg3OS42NDVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NDguMDk3ICAgYzAsNC4xNDIsMy4zNTgsNy41LDcuNSw3LjVoMzIuNTgxdjE3LjA2NEg3OS42NDVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2MzIuMDY0QzcyLjE0NSwyNTIuMTI2LDc1LjUwMywyNTUuNDg0LDc5LjY0NSwyNTUuNDg0ICAgeiBNODcuMTQ1LDE0My4yNThoMTUzLjMzOXYzMy4wOTdIODcuMTQ1VjE0My4yNTh6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+Cgk8cGF0aCBkPSJNNDMyLjM1NSwyMjQuNDUyaC00OC4wOTdjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2MzIuMDY0YzAsNC4xNDIsMy4zNTgsNy41LDcuNSw3LjVoMTYuNTQ4djE3LjA2NGgtNDAuNTk3ICAgYy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djQ4LjA5N2MwLDQuMTQyLDMuMzU4LDcuNSw3LjUsNy41aDcyLjE0NmM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41di00OC4wOTcgICBjMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNWgtMTYuNTQ4di0xNy4wNjRoMTYuNTQ4YzQuMTQyLDAsNy41LTMuMzU4LDcuNS03LjV2LTMyLjA2NCAgIEM0MzkuODU1LDIyNy44MSw0MzYuNDk3LDIyNC40NTIsNDMyLjM1NSwyMjQuNDUyeiBNNDI0Ljg1NSwzMzYuNjc3aC01Ny4xNDZ2LTMzLjA5N2g1Ny4xNDZWMzM2LjY3N3ogTTQyNC44NTUsMjU2LjUxNmgtMzMuMDk3ICAgdi0xNy4wNjRoMzMuMDk3VjI1Ni41MTZ6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+Cgk8cGF0aCBkPSJNNDI3LjA1MiwxMjIuNDM4bC0zNC43NzcsMzQuNzc4bC0xOC43NDYtMTguNzQ1Yy0yLjkyOS0yLjkyOS03LjY3OC0yLjkyOS0xMC42MDYsMGMtMi45MjksMi45MjktMi45MjksNy42NzgsMCwxMC42MDYgICBsMjQuMDQ5LDI0LjA0OGMxLjQ2NCwxLjQ2NCwzLjM4NCwyLjE5Nyw1LjMwMywyLjE5N3MzLjgzOS0wLjczMiw1LjMwMy0yLjE5N2w0MC4wODEtNDAuMDgxYzIuOTI5LTIuOTI5LDIuOTI5LTcuNjc4LDAtMTAuNjA2ICAgQzQzNC43MjksMTE5LjUxLDQyOS45OCwxMTkuNTEsNDI3LjA1MiwxMjIuNDM4eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPHBhdGggZD0iTTM1Ny40OTcsMTc4LjU1MmMtMS44NjMtMS44NjItNC41NjYtMi42MTItNy4xMjItMS45NzNsLTQ1LjM0NiwxMS4zMzZjLTQuMDE5LDEuMDA0LTYuNDYyLDUuMDc3LTUuNDU3LDkuMDk1ICAgYzEuMDA0LDQuMDE5LDUuMDc2LDYuNDYyLDkuMDk1LDUuNDU3bDE5LjA3Ny00Ljc2OUwyMTYuNjg3LDMwOC43NTVjLTcuNjY3LDcuNjY3LTE3Ljg2MiwxMS44OS0yOC43MDYsMTEuODloLTYxLjY2NCAgIGMtMy4zNzUtMTMuNzg2LTE1LjgyOS0yNC4wNDgtMzAuNjQtMjQuMDQ4Yy0xNy4zOTYsMC0zMS41NDgsMTQuMTUyLTMxLjU0OCwzMS41NDhzMTQuMTUyLDMxLjU0OCwzMS41NDgsMzEuNTQ4ICAgYzE0LjgxMiwwLDI3LjI2NS0xMC4yNjIsMzAuNjQtMjQuMDQ4aDYxLjY2NGMxNC44NTEsMCwyOC44MTItNS43ODMsMzkuMzEzLTE2LjI4NEwzMzguMzUsMjA4LjMwNGwtNC43NjksMTkuMDc3ICAgYy0xLjAwNSw0LjAxOCwxLjQzOCw4LjA5LDUuNDU3LDkuMDk1YzAuNjEsMC4xNTMsMS4yMjIsMC4yMjYsMS44MjUsMC4yMjZjMy4zNiwwLDYuNDE4LTIuMjc1LDcuMjctNS42ODNsMTEuMzM2LTQ1LjM0NiAgIEMzNjAuMTA4LDE4My4xMTgsMzU5LjM1OSwxODAuNDE1LDM1Ny40OTcsMTc4LjU1MnogTTk1LjY3NywzNDQuNjkzYy05LjEyNSwwLTE2LjU0OC03LjQyMy0xNi41NDgtMTYuNTQ4ICAgczcuNDIzLTE2LjU0OCwxNi41NDgtMTYuNTQ4czE2LjU0OCw3LjQyMywxNi41NDgsMTYuNTQ4UzEwNC44MDIsMzQ0LjY5Myw5NS42NzcsMzQ0LjY5M3oiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTxwYXRoIGQ9Ik0yNTUuNDg0LDIxNS45MTljMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNWgtNTYuMTEzYy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41czMuMzU4LDcuNSw3LjUsNy41aDU2LjExMyAgIEMyNTIuMTI2LDIyMy40MTksMjU1LjQ4NCwyMjAuMDYyLDI1NS40ODQsMjE1LjkxOXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTxwYXRoIGQ9Ik0zMjguMTQ1LDI5Ni41OTdoLTI0LjA0OGMtNC4xNDIsMC03LjUsMy4zNTgtNy41LDcuNXMzLjM1OCw3LjUsNy41LDcuNWgyNC4wNDhjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNSAgIFMzMzIuMjg3LDI5Ni41OTcsMzI4LjE0NSwyOTYuNTk3eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPHBhdGggZD0iTTMyOC4xNDUsMzI4LjY2MWgtNTYuMTEzYy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41czMuMzU4LDcuNSw3LjUsNy41aDU2LjExM2M0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41ICAgUzMzMi4yODcsMzI4LjY2MSwzMjguMTQ1LDMyOC42NjF6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+Cgk8cGF0aCBkPSJNMTkxLjg3MSwyNDAuNDg0Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41czMuMzU4LDcuNSw3LjUsNy41aDI0LjA0OGM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNSAgIEgxOTEuODcxeiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgo8L2c+CgoKCgoKCgoKCgoKCgoKCjwvZz48L3N2Zz4=" />
                                    <p>
                                        Mi Proyeccion
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="container">
                    <div class="row">
                        <main class="py-4 mt-2 col-12">
                            @yield('content')
                        </main>
                    </div>
                </div>
                <!-- /.content-wrapper -->
                
                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->
            </div>
        </div>

        @yield('scripts')
</body>

</html>