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
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                            <img class=icono src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjM4NHB0IiB2aWV3Qm94PSIwIC0yMSAzODQgMzg0IiB3aWR0aD0iMzg0cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iIzYwN2Q4YiI+PHBhdGggZD0ibTM1MiAwaC0zMjBjLTE3LjY2NDA2MiAwLTMyIDE0LjMzNTkzOC0zMiAzMnYyMS4zMzIwMzFjMCAxNy42NjQwNjMgMTQuMzM1OTM4IDMyIDMyIDMyaDMyMGMxNy42NjQwNjIgMCAzMi0xNC4zMzU5MzcgMzItMzJ2LTIxLjMzMjAzMWMwLTE3LjY2NDA2Mi0xNC4zMzU5MzgtMzItMzItMzJ6bTAgMCIvPjxwYXRoIGQ9Im0zNTIgMTI4aC0zMjBjLTE3LjY2NDA2MiAwLTMyIDE0LjMzNTkzOC0zMiAzMnYyMS4zMzIwMzFjMCAxNy42NjQwNjMgMTQuMzM1OTM4IDMyIDMyIDMyaDMyMGMxNy42NjQwNjIgMCAzMi0xNC4zMzU5MzcgMzItMzJ2LTIxLjMzMjAzMWMwLTE3LjY2NDA2Mi0xNC4zMzU5MzgtMzItMzItMzJ6bTAgMCIvPjxwYXRoIGQ9Im0zNTIgMjU2aC0zMjBjLTE3LjY2NDA2MiAwLTMyIDE0LjMzNTkzOC0zMiAzMnYyMS4zMzIwMzFjMCAxNy42NjQwNjMgMTQuMzM1OTM4IDMyIDMyIDMyaDMyMGMxNy42NjQwNjIgMCAzMi0xNC4zMzU5MzcgMzItMzJ2LTIxLjMzMjAzMWMwLTE3LjY2NDA2Mi0xNC4zMzU5MzgtMzItMzItMzJ6bTAgMCIvPjwvZz48L3N2Zz4=" />
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
                            <img class = "icono-grande" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PGc+PGc+PHBhdGggZD0ibTI1Ni4wMjUgNDgzLjMzNCAxMDEuNDI5LTI1LjYxNGM1Ny44OTUtNDguMDc0IDk0Ljc3MS0xMjAuNTg2IDk0Ljc3MS0yMDEuNzE5IDAtMTI1LjE0NC04Ny43MTEtMjI5LjgwMS0yMDUuMDEyLTI1NS44NTItMTM3LjMxNiA0LjYzMS0yNDcuMjEzIDExNy40MDctMjQ3LjIxMyAyNTUuODUxIDAgNzEuMTEyIDI5IDEzNS40NDYgNzUuODEyIDE4MS44MzZ6IiBmaWxsPSIjY2JlMmZmIi8+PC9nPjxnPjxwYXRoIGQ9Im00NDYuOTE0IDI1NmMwIDgzLjkxNS00MC4zODEgMTU4LjM5MS0xMDIuNzY1IDIwNS4wNzlsOTIuMDMxLTIzLjI0MWM0Ni44MTUtNDYuMzkgNzUuODItMTEwLjcyNCA3NS44Mi0xODEuODM4IDAtMTQxLjM4NS0xMTQuNjE1LTI1Ni0yNTYtMjU2LTExLjAyNCAwLTIxLjg4Ni42OTgtMzIuNTQzIDIuMDUgMTI2LjAxOSAxNS45ODggMjIzLjQ1NyAxMjMuNTkgMjIzLjQ1NyAyNTMuOTV6IiBmaWxsPSIjYmVkOGZiIi8+PC9nPjxnPjxnPjxnPjxwYXRoIGQ9Im0zMTkuNjIxIDk2Ljk1MmMwLTEzLjA3NS0xMC41OTktMjMuNjc0LTIzLjY3NC0yMy42NzRoLTgxLjU4MmMtMzAuMDkxIDAtNTQuNDg1IDI0LjM5NC01NC40ODUgNTQuNDg1djYwLjQ5M2gxOTIuMjA5di01OS42MzVjMC0xMy4wNzUtMTAuNTk5LTIzLjY3NC0yMy42NzQtMjMuNjc0aC0uNzk4Yy00LjQxNiAwLTcuOTk2LTMuNTc5LTcuOTk2LTcuOTk1eiIgZmlsbD0iIzM2NWU3ZCIvPjxwYXRoIGQ9Im0zMjguNDE1IDEwNC45NDdoLS43OThjLTQuNDE2IDAtNy45OTYtMy41OC03Ljk5Ni03Ljk5NiAwLTEzLjA3NS0xMC41OTktMjMuNjc0LTIzLjY3NC0yMy42NzRoLTguOTQ1djExNC45NzhoNjUuMDg2di01OS42MzVjLjAwMS0xMy4wNzMtMTAuNTk5LTIzLjY3My0yMy42NzMtMjMuNjczeiIgZmlsbD0iIzJiNGQ2NiIvPjxwYXRoIGQ9Im00MjUuMDQ1IDM3Mi4zNTVjLTYuMjU5LTYuMTgyLTE0LjAwMS0xMC45NjMtMjIuNzktMTMuNzQ1bC02OS44OTEtMjIuMTI4LTc2LjM0OC0yLjY4My03Ni4zOCAyLjY4My02OS44OTEgMjIuMTI4Yy0yMy42NDQgNy40ODYtMzkuNzEzIDI5LjQyOC0zOS43MTMgNTQuMjI5djE5LjA5NGM0NC43ODkgNDcuMzI4IDEwNy40NTEgNzcuNTY4IDE3Ny4xODMgNzkuOTIgNzguMTI4LTE3LjM1MyAxNDMuMTI5LTY5LjU3NiAxNzcuODMtMTM5LjQ5OHoiIGZpbGw9IiM0YTgwYWEiLz48cGF0aCBkPSJtNDQxLjk2OCA0MzEuOTMydi0xOS4wOTRjMC0xNy41MzYtOC4wNC0zMy42MzUtMjEuMTA1LTQ0LjIxMy0zNy4xMTEgNzUuNjI2LTExMC40MjIgMTMwLjI2OC0xOTcuMzQ2IDE0MS4zMTcgMTAuNDkyIDEuMzI5IDIxLjE3OCAyLjAzOCAzMi4wMjYgMi4wNTcgMTAuNDIzLS4wMTYgMjAuNzA4LS42MiAzMC44MjQtMS43ODIgNjEuMDMxLTcuMjEyIDExNS40ODUtMzUuODk0IDE1NS42MDEtNzguMjg1eiIgZmlsbD0iIzQwNzA5MyIvPjxwYXRoIGQ9Im0yNjEuNzk2IDUwOC4xNjhjMTUuNDg5LTMwLjc1MSA1NS44MjItMTE4LjA2NyA0NC4zMjEtMTcyLjYwOWwtNTAuMTAxLTE5LjQ5OS01MC4xNDggMTkuNWMtMTEuODU2IDU2LjIyNSAzMS4zNyAxNDcuMjc3IDQ1LjY4MSAxNzUuMjkgMy40NDItLjgyNiA2Ljg1OS0xLjcyMSAxMC4yNDctMi42ODJ6IiBmaWxsPSIjZTRmNmZmIi8+PHBhdGggZD0ibTI4OC4xOTcgNDgzLjc4OS0yMC4zMTQtNzkuOTE3aC0yMy43NjdsLTIwLjI2NCA3OS42OTkgMjUuMDU4IDI3Ljg5N2M2LjM2MS0xLjQ1NyAxMi42MzQtMy4xNDYgMTguODEtNS4wNTd6IiBmaWxsPSIjZTI4MDg2Ii8+PHBhdGggZD0ibTI0OS4zMDIgNTExLjkwNWMyLjA3NS4wNTQgNC4xNTQuMDkxIDYuMjQxLjA5NSAyLjQxNS0uMDA0IDQuODIyLS4wNDYgNy4yMjItLjExM2wxMi45MDctMTQuMjU5Yy0xMC4xNTkgMy41NjQtMjAuNjEgNi41MDYtMzEuMzA5IDguNzc5eiIgZmlsbD0iI2RkNjM2ZSIvPjxnPjxnPjxnPjxnPjxnPjxnPjxnPjxnPjxwYXRoIGQ9Im0yOTguNzc0IDMyOC4xODN2LTQ1LjA2NmgtODUuNTh2NDUuMDY2YzAgMjMuNjMyIDQyLjc5IDQ5LjQ0NiA0Mi43OSA0OS40NDZzNDIuNzktMjUuODE0IDQyLjc5LTQ5LjQ0NnoiIGZpbGw9IiNmZmRkY2UiLz48L2c+PC9nPjwvZz48L2c+PC9nPjwvZz48L2c+PHBhdGggZD0ibTM1Mi4wODkgMTgwLjMxOGgtMTYuMzU5Yy05LjA5OCAwLTE2LjQ3My03LjM3NS0xNi40NzMtMTYuNDczdi05LjAxNWMwLTExLjg1MS0xMS41OTUtMjAuMjMtMjIuODQ3LTE2LjUxMS0yNi4yNDMgOC42NzQtNTQuNTc5IDguNjc2LTgwLjgyMy4wMDZsLS4wMzEtLjAxYy0xMS4yNTItMy43MTctMjIuODQ1IDQuNjYyLTIyLjg0NSAxNi41MTJ2OS4wMTljMCA5LjA5OC03LjM3NSAxNi40NzMtMTYuNDczIDE2LjQ3M2gtMTYuMzU4djI2LjkzOGMwIDYuODgzIDUuNTggMTIuNDY0IDEyLjQ2NCAxMi40NjQgMi4xNzIgMCAzLjkzOSAxLjcwMSA0LjA3NiAzLjg2OSAyLjYyOCA0MS42NjggMzcuMjM1IDc0LjY1NCA3OS41NjUgNzQuNjU0IDQyLjMzIDAgNzYuOTM3LTMyLjk4NiA3OS41NjUtNzQuNjU0LjEzNy0yLjE2NyAxLjkwNC0zLjg2OSA0LjA3Ni0zLjg2OSA2Ljg4MyAwIDEyLjQ2NC01LjU4IDEyLjQ2NC0xMi40NjR2LTI2LjkzOXoiIGZpbGw9IiNmZmRkY2UiLz48cGF0aCBkPSJtMzM1LjczIDE4MC4zMThjLTkuMDk4IDAtMTYuNDczLTcuMzc1LTE2LjQ3My0xNi40NzN2LTkuMDE1YzAtMTEuODUxLTExLjU5NS0yMC4yMy0yMi44NDctMTYuNTExLTMuMTA4IDEuMDI3LTYuMjQ3IDEuOTIzLTkuNDA3IDIuNzA3djg4Ljk3MmMtLjQzOCAyOC45NDgtMTYuMyA1NC4xNDItMzkuNzI1IDY3Ljc1OCAyLjg2MS4zMTEgNS43NjMuNDg2IDguNzA2LjQ4NiA0Mi4zMyAwIDc2LjkzNy0zMi45ODYgNzkuNTY1LTc0LjY1NC4xMzctMi4xNjcgMS45MDQtMy44NjkgNC4wNzYtMy44NjkgNi44ODMgMCAxMi40NjQtNS41OCAxMi40NjQtMTIuNDY0di0yNi45MzhoLTE2LjM1OXoiIGZpbGw9IiNmZmNiYmUiLz48L2c+PGcgZmlsbD0iI2Y0ZmJmZiI+PHBhdGggZD0ibTIxMy4xOTQgMzE2LjA2LTMzLjU1OCAyNy4yNjcgMzUuMTkyIDQzLjUxM2M0LjI4MSA0LjE2OCAxMS4wMTkgNC40MjQgMTUuNjA1LjU5NGwyNi40NjUtMjIuMTA3eiIvPjxwYXRoIGQ9Im0yOTguNzkgMzE2LjA2LTQxLjg5MiA0OS4yNjcgMjQuODc0IDIxLjI2OGM0LjU1NyAzLjg5NiAxMS4zMjcgMy43IDE1LjY1MS0uNDUzbDM0Ljk0LTQyLjgxNXoiLz48L2c+PC9nPjxwYXRoIGQ9Im0yMTMuMTk0IDMxNi4wNi00OS4yNTYgMjQuMTk5Yy0zLjc1IDEuODQyLTUuMjU2IDYuNDA0LTMuMzQxIDEwLjExN2w5LjY1IDE4LjcxYzIuNTAxIDQuODQ4IDEuNTc4IDEwLjc1Ni0yLjI4MiAxNC42MS0xLjk4NyAxLjk4My00LjEzOSA0LjEzMS02LjAwNCA1Ljk5My0zLjMzOCAzLjMzMi00LjUzNyA4LjI1NS0zLjA2NyAxMi43MzcgMTEuNjUxIDM1LjUxNyA2Ny43MjUgODkuODI4IDg4Ljk0NiAxMDkuNDc4IDEuNDI3LjAzOCAyLjg1Ny4wNjQgNC4yOS4wOC0xNS4zODktMjkuOTMzLTY5LjkyMi0xNDMuNjU1LTM4LjkzNi0xOTUuOTI0eiIgZmlsbD0iIzM2NWU3ZCIvPjxwYXRoIGQ9Im0zNDQuMDE5IDM4My42OTVjLTMuODYxLTMuODU0LTQuNzgzLTkuNzYyLTIuMjgyLTE0LjYxbDkuNjUtMTguNzFjMS45MTUtMy43MTMuNDA5LTguMjc1LTMuMzQxLTEwLjExN2wtNDkuMjU2LTI0LjE5OGMzMC45NzggNTIuMjU1LTIzLjUxNyAxNjUuOTI5LTM4LjkyMyAxOTUuOSAxLjQ0OC0uMDI1IDIuODkzLS4wNjEgNC4zMzUtLjEwOSAyMS4yNjUtMTkuNjk1IDc3LjI0OC03My45NCA4OC44ODgtMTA5LjQyNCAxLjQ3LTQuNDgyLjI3MS05LjQwNS0zLjA2Ny0xMi43MzctMS44NjUtMS44NjMtNC4wMTctNC4wMTItNi4wMDQtNS45OTV6IiBmaWxsPSIjMzY1ZTdkIi8+PHBhdGggZD0ibTI1Ni44OTggMzY1LjMyNy0yNi4wNiAyMS43NjQgMTMuMjc4IDE2Ljc4MWgyMy43NjdsMTMuMjc5LTE3Ljc3MXoiIGZpbGw9IiNkZDYzNmUiLz48L2c+PC9nPjwvZz48L2c+PC9zdmc+">
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
                                <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                                    <img class = "icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ5OC4xOTUzMTIgMjIyLjY5NTMxMmMtLjAxMTcxOC0uMDExNzE4LS4wMjM0MzctLjAyMzQzNy0uMDM1MTU2LS4wMzUxNTZsLTIwOC44NTU0NjgtMjA4Ljg0NzY1NmMtOC45MDIzNDQtOC45MDYyNS0yMC43MzgyODItMTMuODEyNS0zMy4zMjgxMjYtMTMuODEyNS0xMi41ODk4NDMgMC0yNC40MjU3ODEgNC45MDIzNDQtMzMuMzMyMDMxIDEzLjgwODU5NGwtMjA4Ljc0NjA5MyAyMDguNzQyMTg3Yy0uMDcwMzEzLjA3MDMxMy0uMTQwNjI2LjE0NDUzMS0uMjEwOTM4LjIxNDg0NC0xOC4yODEyNSAxOC4zODY3MTktMTguMjUgNDguMjE4NzUuMDg5ODQ0IDY2LjU1ODU5NCA4LjM3ODkwNiA4LjM4MjgxMiAxOS40NDUzMTIgMTMuMjM4MjgxIDMxLjI3NzM0NCAxMy43NDYwOTMuNDgwNDY4LjA0Njg3Ni45NjQ4NDMuMDcwMzEzIDEuNDUzMTI0LjA3MDMxM2g4LjMyNDIxOXYxNTMuNjk5MjE5YzAgMzAuNDE0MDYyIDI0Ljc0NjA5NCA1NS4xNjAxNTYgNTUuMTY3OTY5IDU1LjE2MDE1Nmg4MS43MTA5MzhjOC4yODEyNSAwIDE1LTYuNzE0ODQ0IDE1LTE1di0xMjAuNWMwLTEzLjg3ODkwNiAxMS4yODkwNjItMjUuMTY3OTY5IDI1LjE2Nzk2OC0yNS4xNjc5NjloNDguMTk1MzEzYzEzLjg3ODkwNiAwIDI1LjE2Nzk2OSAxMS4yODkwNjMgMjUuMTY3OTY5IDI1LjE2Nzk2OXYxMjAuNWMwIDguMjg1MTU2IDYuNzE0ODQzIDE1IDE1IDE1aDgxLjcxMDkzN2MzMC40MjE4NzUgMCA1NS4xNjc5NjktMjQuNzQ2MDk0IDU1LjE2Nzk2OS01NS4xNjAxNTZ2LTE1My42OTkyMTloNy43MTg3NWMxMi41ODU5MzcgMCAyNC40MjE4NzUtNC45MDIzNDQgMzMuMzMyMDMxLTEzLjgwODU5NCAxOC4zNTkzNzUtMTguMzcxMDkzIDE4LjM2NzE4Ny00OC4yNTM5MDYuMDIzNDM3LTY2LjYzNjcxOXptMCAwIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
                                    <p>Inicio</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('administrador.index') }}"
                                    class="{{ Request::path() === 'administrador.index' ? 'nav-link active' : 'nav-link' }}">
                                    <img class= "icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDMxLjg3MiAzMS44NzIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPGNpcmNsZSBjeD0iNC45NDMiIGN5PSI0LjMzOSIgcj0iMy40MjEiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvY2lyY2xlPgoJCTxjaXJjbGUgY3g9IjE2LjQ0MyIgY3k9IjQuMTc3IiByPSIzLjQyMSIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9jaXJjbGU+CgkJPGNpcmNsZSBjeD0iMjcuNjMxIiBjeT0iNC4xNzciIHI9IjMuNDIxIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L2NpcmNsZT4KCQk8cGF0aCBkPSJNMzEuNTMxLDE0LjI4VjguNjY2bC0yLjU4LTAuNTUzbC0xLjI2NCwxLjUxMmwtMS4zMDEtMS41MTJsLTMuMDIxLDAuNTUzdjUuNjE1aC0zLjAyM1Y4LjY2NmwtMi41NzktMC41NTNMMTYuNSw5LjYyNSAgICBsLTEuMy0xLjUxMmwtMy4wMjEsMC41NTN2NS42MTVIOC44NDNWOC44MjdsLTIuNTgtMC41NTNMNSw5Ljc4N0wzLjcsOC4yNzVMMC42NzksOC44Mjd2NS40NTNIMHYxNi44MzVoMC41MDl2LTQuNDE0bDMuMDIxLTAuNTUzICAgIGwxLjMwMSwxLjUxM2wxLjI2My0xLjUxM2wyLjU4LDAuNTUzdjQuNDE0aDMuMzM2di00LjU3NWwzLjAyMS0wLjU1NGwxLjMwMSwxLjUxM2wxLjI2NC0xLjUxM2wyLjU3OSwwLjU1NHY0LjU3NWgzLjAyM3YtNC41NzUgICAgbDMuMDIxLTAuNTU0TDI3LjUyLDI3LjVsMS4yNjQtMS41MTNsMi41OCwwLjU1NHY0LjU3NWgwLjUwOVYxNC4yOEgzMS41MzF6IE00Ljc3MywyNS42MzVjLTEuODksMC0zLjQyMS0xLjUzMS0zLjQyMS0zLjQyMSAgICBzMS41MzItMy40MjEsMy40MjEtMy40MjFzMy40MjIsMS41MzEsMy40MjIsMy40MjFTNi42NjMsMjUuNjM1LDQuNzczLDI1LjYzNXogTTE2LjI3MywyNS40NzNjLTEuODkxLDAtMy40MjEtMS41MzEtMy40MjEtMy40MjEgICAgczEuNTMyLTMuNDIxLDMuNDIxLTMuNDIxYzEuODg5LDAsMy40MjIsMS41MzEsMy40MjIsMy40MjFTMTguMTYzLDI1LjQ3MywxNi4yNzMsMjUuNDczeiBNMjcuNDYxLDI1LjQ3MyAgICBjLTEuODkxLDAtMy40MjEtMS41MzEtMy40MjEtMy40MjFzMS41MzItMy40MjEsMy40MjEtMy40MjFzMy40MjIsMS41MzEsMy40MjIsMy40MjFTMjkuMzUsMjUuNDczLDI3LjQ2MSwyNS40NzN6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPC9nPjwvc3ZnPg==" />
                                    <p>
                                        Alumnos
                                        <?php use App\Models\User; $users_count = User::all()->count(); ?>
                                        <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('register') }}"
                                    class="{{ Request::path() === 'register' ? 'nav-link active' : 'nav-link' }}">
                                    <img class= "icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIyNiAyMzJjLTYzLjk2MyAwLTExNi01Mi4wMzctMTE2LTExNnM1Mi4wMzctMTE2IDExNi0xMTYgMTE2IDUyLjAzNyAxMTYgMTE2LTUyLjAzNyAxMTYtMTE2IDExNnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48Zz48Zz48cGF0aCBkPSJtMjcxIDMxN2MwLTI1LjY4IDcuMjEtNDkuNzA3IDE5LjcwOC03MC4xNjctMTkuNTE1IDkuNjkzLTQxLjQ4IDE1LjE2Ny02NC43MDggMTUuMTY3LTMwLjEyOCAwLTU4LjE1Mi05LjE3NC04MS40MjktMjQuODc0LTI4Ljc4MiAxMS4xNTctNTUuMTg2IDI4LjI5MS03Ny42NjkgNTAuNzc0LTQyLjQ5OCA0Mi40OTctNjUuOTAyIDk4Ljk5OS02NS45MDIgMTU5LjA5OXY1MC4wMDFjMCA4LjI4NCA2LjcxNiAxNSAxNSAxNWg0MjBjOC4yODQgMCAxNS02LjcxNiAxNS0xNXYtNTAuMDAxYzAtLjkwMS0uMDI1LTEuODA1LS4wMzYtMi43MDgtMTQuMDcyIDQuOTg2LTI5LjIwNSA3LjcwOS00NC45NjQgNy43MDktNzQuNDM5IDAtMTM1LTYwLjU2MS0xMzUtMTM1eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48cGF0aCBkPSJtNDA2IDIxMmMtNTcuODk3IDAtMTA1IDQ3LjEwMy0xMDUgMTA1czQ3LjEwMyAxMDUgMTA1IDEwNSAxMDUtNDcuMTAzIDEwNS0xMDUtNDcuMTAzLTEwNS0xMDUtMTA1em0zMCAxMjBoLTE1djE1YzAgOC4yODQtNi43MTYgMTUtMTUgMTVzLTE1LTYuNzE2LTE1LTE1di0xNWgtMTVjLTguMjg0IDAtMTUtNi43MTYtMTUtMTVzNi43MTYtMTUgMTUtMTVoMTV2LTE1YzAtOC4yODQgNi43MTYtMTUgMTUtMTVzMTUgNi43MTYgMTUgMTV2MTVoMTVjOC4yODQgMCAxNSA2LjcxNiAxNSAxNXMtNi43MTYgMTUtMTUgMTV6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvZz48L2c+PC9zdmc+" />
                                     <p>
                                        Administradores
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
                <footer class="main-footer">

                </footer>

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