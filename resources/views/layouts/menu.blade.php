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
                            <img class=icono  src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjM4NHB0IiB2aWV3Qm94PSIwIC0yMSAzODQgMzg0IiB3aWR0aD0iMzg0cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iIzYwN2Q4YiI+PHBhdGggZD0ibTM1MiAwaC0zMjBjLTE3LjY2NDA2MiAwLTMyIDE0LjMzNTkzOC0zMiAzMnYyMS4zMzIwMzFjMCAxNy42NjQwNjMgMTQuMzM1OTM4IDMyIDMyIDMyaDMyMGMxNy42NjQwNjIgMCAzMi0xNC4zMzU5MzcgMzItMzJ2LTIxLjMzMjAzMWMwLTE3LjY2NDA2Mi0xNC4zMzU5MzgtMzItMzItMzJ6bTAgMCIvPjxwYXRoIGQ9Im0zNTIgMTI4aC0zMjBjLTE3LjY2NDA2MiAwLTMyIDE0LjMzNTkzOC0zMiAzMnYyMS4zMzIwMzFjMCAxNy42NjQwNjMgMTQuMzM1OTM4IDMyIDMyIDMyaDMyMGMxNy42NjQwNjIgMCAzMi0xNC4zMzU5MzcgMzItMzJ2LTIxLjMzMjAzMWMwLTE3LjY2NDA2Mi0xNC4zMzU5MzgtMzItMzItMzJ6bTAgMCIvPjxwYXRoIGQ9Im0zNTIgMjU2aC0zMjBjLTE3LjY2NDA2MiAwLTMyIDE0LjMzNTkzOC0zMiAzMnYyMS4zMzIwMzFjMCAxNy42NjQwNjMgMTQuMzM1OTM4IDMyIDMyIDMyaDMyMGMxNy42NjQwNjIgMCAzMi0xNC4zMzU5MzcgMzItMzJ2LTIxLjMzMjAzMWMwLTE3LjY2NDA2Mi0xNC4zMzU5MzgtMzItMzItMzJ6bTAgMCIvPjwvZz48L3N2Zz4=" />
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
                                    <img class = "icono"  src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDAyMSA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ4Ny4xMDE1NjIgMTQ2LjYxNzE4OC0yMzEuMDkzNzUtMTQ2LjYxNzE4OC0yMzEuMTA5Mzc0IDE0Ni42MjVjLTIzLjYwOTM3NiAxMy45MTQwNjItMzEuODk4NDM4IDQ0LjU2NjQwNi0xOC40NjA5MzggNjguNDkyMTg4IDYuNjk5MjE5IDExLjkyMTg3NCAxNy42NTIzNDQgMjAuNDcyNjU2IDMwLjg0NzY1NiAyNC4wNzQyMTggNC40NDUzMTMgMS4yMTA5MzggOC45NTMxMjUgMS44MTI1IDEzLjQzMzU5NCAxLjgxMjUgOC4wMjczNDQgMCAxNS45NDkyMTktMS45NDkyMTggMjMuMjE4NzUtNS43MjY1NjJ2MjEyLjM5MDYyNWgzNjQuMTIxMDk0di0yMTIuMzc4OTA3YzExLjMyODEyNSA1Ljg4MjgxMyAyNC4yNDIxODcgNy4yNzM0MzggMzYuNjQwNjI1IDMuODk0NTMyIDEzLjE5MTQwNi0zLjU5Mzc1IDI0LjE0NDUzMS0xMi4xMzY3MTkgMzAuODQ3NjU2LTI0LjA1NDY4OCAxMy40NjA5MzctMjMuOTI5Njg3IDUuMTc5Njg3LTU0LjU4OTg0NC0xOC40NDUzMTMtNjguNTExNzE4em0tMTkxLjE3OTY4NyAyNzEuMDQ2ODc0aC03OS44NDM3NXYtMTI5LjgwODU5M2g3OS44NDM3NXptMzAuMDA3ODEzIDB2LTE1OS44MTY0MDZoLTEzOS44NTkzNzZ2MTU5LjgxMjVoLTgyLjEyNXYtMjAxLjQ4MDQ2OGwxNTIuMDYyNS05OC4wMzUxNTcgMTUyLjA0Njg3NiA5OC4wMjczNDR2MjAxLjQ5MjE4N3ptMTUzLjQ2MDkzNy0yMTcuMjQyMTg3Yy0yLjczMDQ2OSA0Ljg1OTM3NS03LjIwMzEyNSA4LjM0Mzc1LTEyLjU4MjAzMSA5LjgxMjUtNS4yODUxNTYgMS40NDE0MDYtMTAuNzk2ODc1Ljc1NzgxMy0xNS41NjI1LTEuOTE3OTY5bC0xOTUuMjM4MjgyLTEyNS44NzEwOTQtMTk1LjI1NzgxMiAxMjUuODc4OTA3Yy00Ljc2NTYyNSAyLjY3OTY4Ny0xMC4yNzczNDQgMy4zNTkzNzUtMTUuNTY2NDA2IDEuOTE3OTY5LTUuMzgyODEzLTEuNDY4NzUtOS44NTE1NjMtNC45NTcwMzItMTIuNTgyMDMyLTkuODIwMzEzLTUuNTAzOTA2LTkuODAwNzgxLTIuMDc4MTI0LTIyLjM2NzE4NyA3LjY0NDUzMi0yOC4wMTE3MTlsLjI1MzkwNi0uMTQ0NTMxIDIxNS41MDc4MTItMTM2LjczMDQ2OSAyMTUuMjQyMTg4IDEzNi41NjI1LjUwMzkwNi4zMDQ2ODhjOS43MjY1NjMgNS42NDg0MzcgMTMuMTUyMzQ0IDE4LjIxNDg0NCA3LjYzNjcxOSAyOC4wMTk1MzF6bTAgMCIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjwvZz48L3N2Zz4=" />
                                    <p>Inicio</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('administrador.index') }}"
                                    class="{{ Request::path() === 'administrador.index' ? 'nav-link active' : 'nav-link' }}">
                                    <img class = "icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDA0OSA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTUxMiAyMTBjMCAzNi40Njg3NS05LjUgNzIuMzk4NDM4LTI3LjQ3MjY1NiAxMDMuOTEwMTU2LTUuNDcyNjU2IDkuNTkzNzUtMTcuNjg3NSAxMi45MzM1OTQtMjcuMjgxMjUgNy40NjA5MzhzLTEyLjkzNzUtMTcuNjg3NS03LjQ2MDkzOC0yNy4yODEyNWMxNC41MzEyNS0yNS40ODA0NjkgMjIuMjE0ODQ0LTU0LjU1ODU5NCAyMi4yMTQ4NDQtODQuMDg5ODQ0IDAtOTMuNzM4MjgxLTc2LjI2MTcxOS0xNzAtMTcwLTE3MHMtMTcwIDc2LjI2MTcxOS0xNzAgMTcwIDc2LjI2MTcxOSAxNzAgMTcwIDE3MGMyOS4xNzE4NzUgMCA1Ny45NDE0MDYtNy41MDc4MTIgODMuMTk1MzEyLTIxLjcxMDkzOCA5LjYyODkwNy01LjQxNDA2MiAyMS44MjQyMTktMS45OTYwOTMgMjcuMjM4MjgyIDcuNjI4OTA3IDUuNDE0MDYyIDkuNjI4OTA2IDIgMjEuODI0MjE5LTcuNjI4OTA2IDI3LjIzNDM3NS0zMS4yMjY1NjMgMTcuNTY2NDA2LTY2Ljc3NzM0NCAyNi44NDc2NTYtMTAyLjgwNDY4OCAyNi44NDc2NTYtNTAuNDc2NTYyIDAtOTYuODQ3NjU2LTE3LjkwNjI1LTEzMy4xMDU0NjktNDcuNjk1MzEybC0xMzQuODAwNzgxIDEzMy44ODY3MThjLTMuODk4NDM4IDMuODcxMDk0LTguOTk2MDk0IDUuODA4NTk0LTE0LjA5Mzc1IDUuODA4NTk0LTUuMTQwNjI1IDAtMTAuMjgxMjUtMS45Njg3NS0xNC4xOTE0MDYtNS45MDYyNS03Ljc4MTI1LTcuODM1OTM4LTcuNzM4MjgyLTIwLjUuMDk3NjU2LTI4LjI4NTE1NmwxMzQuNjIxMDk0LTEzMy43MDMxMjVjLTMwLjI4NTE1Ni0zNi40MDIzNDQtNDguNTI3MzQ0LTgzLjE2MDE1Ny00OC41MjczNDQtMTM0LjEwNTQ2OSAwLTExNS43OTI5NjkgOTQuMjA3MDMxLTIxMCAyMTAtMjEwczIxMCA5NC4yMDcwMzEgMjEwIDIxMHptLTI1OS44NzEwOTQtNy44OTg0MzhjLTcuNjE3MTg3LTEwLjQxNzk2OC0xMi4xMjg5MDYtMjMuMjM4MjgxLTEyLjEyODkwNi0zNy4xMDE1NjIgMC0zNC43MzgyODEgMjguMjYxNzE5LTYzIDYzLTYzczYzIDI4LjI2MTcxOSA2MyA2M2MwIDEzLjg2MzI4MS00LjUwNzgxMiAyNi42ODM1OTQtMTIuMTI1IDM3LjEwMTU2MiAyMi43NDYwOTQgMTMuNzQyMTg4IDM5Ljc0NjA5NCAzNi41MTk1MzIgNDUuNDIxODc1IDYzLjg1MTU2MyAyLjA1MDc4MSA5Ljg2NzE4Ny0uNDE3OTY5IDIwLjAwNzgxMy02Ljc2OTUzMSAyNy44MTI1LTYuMzIwMzEzIDcuNzc3MzQ0LTE1LjY5NTMxMyAxMi4yMzQzNzUtMjUuNzE0ODQ0IDEyLjIzNDM3NWgtMTI3LjYyNWMtMTAuMDE5NTMxIDAtMTkuMzkwNjI1LTQuNDU3MDMxLTI1LjcxNDg0NC0xMi4yMzA0NjktNi4zNTE1NjItNy44MDg1OTMtOC44MjAzMTItMTcuOTQ5MjE5LTYuNzY5NTMxLTI3LjgxNjQwNiA1LjY3NTc4MS0yNy4zMzIwMzEgMjIuNjc1NzgxLTUwLjEwOTM3NSA0NS40MjU3ODEtNjMuODUxNTYzem0yNy44NzEwOTQtMzcuMTAxNTYyYzAgMTIuNjgzNTk0IDEwLjMyMDMxMiAyMyAyMyAyMyAxMi42ODM1OTQgMCAyMy0xMC4zMTY0MDYgMjMtMjNzLTEwLjMxNjQwNi0yMy0yMy0yM2MtMTIuNjc5Njg4IDAtMjMgMTAuMzE2NDA2LTIzIDIzem0tMzEuODI0MjE5IDEwMWgxMDkuNjQ4NDM4Yy04LjIzMDQ2OS0yMi40NDE0MDYtMjkuODgyODEzLTM4LTU0LjMwMDc4MS0zOGgtMS4wNDY4NzZjLTI0LjQxNzk2OCAwLTQ2LjA2NjQwNiAxNS41NTg1OTQtNTQuMzAwNzgxIDM4em0wIDAiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48L2c+PC9zdmc+" />
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
                                    <img class = "icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMS45OTk4MSA1MTEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTI5Ni40NjQ4NDQgMzM2LjA5NzY1NmMtMTIuNTE5NTMyLTguNzM0Mzc1LTI1Ljg5ODQzOC0xNS44NTE1NjItMzkuODkwNjI1LTIxLjI4OTA2MiAxOC42MTMyODEtMTYuOTE3OTY5IDMwLjk2MDkzNy00MC42MTcxODggMzMuMTA5Mzc1LTY3LjE0ODQzOCAyOC4yMjY1NjItMjcuNTAzOTA2IDY1LjIyNjU2Mi00Mi41ODIwMzEgMTA0Ljg5MDYyNS00Mi41ODIwMzEgMzAuOTY0ODQzIDAgNjAuNjk1MzEyIDkuMzI0MjE5IDg1Ljk4NDM3NSAyNi45NjA5MzcgOS4wNjI1IDYuMzIwMzEzIDIxLjUyMzQzNyA0LjEwMTU2MyAyNy44NDM3NS00Ljk2MDkzNyA2LjMxNjQwNi05LjA1ODU5NCA0LjA5NzY1Ni0yMS41MjM0MzctNC45NjA5MzgtMjcuODM5ODQ0LTEyLjUxOTUzMS04LjczNDM3NS0yNS45MDIzNDQtMTUuODQ3NjU2LTM5Ljg5NDUzMS0yMS4yODkwNjIgMjAuNTM5MDYzLTE4LjY2Nzk2OSAzMy40NTMxMjUtNDUuNTg1OTM4IDMzLjQ1MzEyNS03NS40NjA5MzggMC01Ni4yMzgyODEtNDUuNzUtMTAxLjk4ODI4MS0xMDEuOTg4MjgxLTEwMS45ODgyODEtNTYuMjM0Mzc1IDAtMTAxLjk4NDM3NSA0NS43NS0xMDEuOTg0Mzc1IDEwMS45ODgyODEgMCAyOS43NTM5MDcgMTIuODA4NTk0IDU2LjU3NDIxOSAzMy4yMDcwMzEgNzUuMjM0Mzc1LTIuNzkyOTY5IDEuMDc0MjE5LTUuNTcwMzEzIDIuMjEwOTM4LTguMzIwMzEzIDMuNDIxODc1LTEyLjUxNTYyNCA1LjUwNzgxMy0yNC4yODEyNSAxMi4yODEyNS0zNS4yMjI2NTYgMjAuMjM0Mzc1LTE1LjA4OTg0NC0zNy40ODgyODEtNTEuODI4MTI1LTY0LjAxOTUzMS05NC42NTIzNDQtNjQuMDE5NTMxLTU2LjIzNDM3NCAwLTEwMS45ODgyODEgNDUuNzUtMTAxLjk4ODI4MSAxMDEuOTg0Mzc1IDAgMjkuNjcxODc1IDEyLjczODI4MSA1Ni40MTc5NjkgMzMuMDI3MzQ0IDc1LjA3MDMxMi01NC4yNDYwOTQgMjAuMzI0MjE5LTk4LjIzMDQ2OSA2My45NzY1NjMtMTE2LjEzNjcxOSAxMTkuNjQ4NDM4LTUuOTM3NSAxOC40NjA5MzgtMi43OTI5NjggMzguMDM5MDYyIDguNjI4OTA2IDUzLjcxNDg0NCAxMS40MjE4NzYgMTUuNjcxODc1IDI5LjA5Mzc1IDI0LjY2MDE1NiA0OC40ODQzNzYgMjQuNjYwMTU2aDE3My45ODA0NjhjMTEuMDQyOTY5IDAgMTkuOTk2MDk0LTguOTUzMTI1IDE5Ljk5NjA5NC0yMCAwLTExLjA0Mjk2OS04Ljk1MzEyNS0xOS45OTYwOTQtMTkuOTk2MDk0LTE5Ljk5NjA5NGgtMTczLjk4MDQ2OGMtNi40NjQ4NDQgMC0xMi4zNTU0NjktMi45OTYwOTQtMTYuMTY0MDYzLTguMjIyNjU2cy00Ljg1NTQ2OS0xMS43NTM5MDYtMi44Nzg5MDYtMTcuOTEwMTU2YzE5Ljc2NTYyNS02MS40NTMxMjUgODAuMDQ2ODc1LTEwNC4zNzEwOTQgMTQ2LjU4OTg0My0xMDQuMzcxMDk0IDMwLjk2MDkzOCAwIDYwLjY5NTMxMyA5LjMyNDIxOSA4NS45ODQzNzYgMjYuOTYwOTM4IDkuMDU4NTkzIDYuMzIwMzEyIDIxLjUyMzQzNyA0LjA5NzY1NiAyNy44NDM3NS00Ljk2MDkzOCA2LjMxNjQwNi05LjA1ODU5NCA0LjA5NzY1Ni0yMS41MjM0MzgtNC45NjQ4NDQtMjcuODM5ODQ0em05OC41NDY4NzUtMjk1LjYwMTU2MmMzNC4xODM1OTMgMCA2MS45OTIxODcgMjcuODA4NTk0IDYxLjk5MjE4NyA2MS45OTIxODcgMCAzNC4xNzk2ODgtMjcuODA4NTk0IDYxLjk5MjE4OC02MS45OTIxODcgNjEuOTkyMTg4LTM0LjE3OTY4OCAwLTYxLjk5MjE4OC0yNy44MTI1LTYxLjk5MjE4OC02MS45OTIxODggMC0zNC4xODM1OTMgMjcuODEyNS02MS45OTIxODcgNjEuOTkyMTg4LTYxLjk5MjE4N3ptLTIwNi45NzI2NTcgMTM2Ljg1NTQ2OGMzNC4xODM1OTQgMCA2MS45OTIxODggMjcuODEyNSA2MS45OTIxODggNjEuOTkyMTg4IDAgMzQuMTgzNTk0LTI3LjgwODU5NCA2MS45OTIxODgtNjEuOTkyMTg4IDYxLjk5MjE4OC0zNC4xODM1OTMgMC02MS45OTIxODctMjcuODA4NTk0LTYxLjk5MjE4Ny02MS45OTIxODggMC0zNC4xNzk2ODggMjcuODA4NTk0LTYxLjk5MjE4OCA2MS45OTIxODctNjEuOTkyMTg4em0zMjMuOTYwOTM4IDI0MC4wOTc2NTdjMCAxMS4wNDI5NjktOC45NTMxMjUgMTkuOTk2MDkzLTIwIDE5Ljk5NjA5M2gtNTQuOTkyMTg4djU0Ljk5MjE4OGMwIDExLjA0Njg3NS04Ljk1MzEyNCAyMC0xOS45OTYwOTMgMjAtMTEuMDQ2ODc1IDAtMjAtOC45NTMxMjUtMjAtMjB2LTU0Ljk5MjE4OGgtNTQuOTkyMTg4Yy0xMS4wNDI5NjkgMC0xOS45OTYwOTMtOC45NTMxMjQtMTkuOTk2MDkzLTE5Ljk5NjA5MyAwLTExLjA0Njg3NSA4Ljk1MzEyNC0yMCAxOS45OTYwOTMtMjBoNTQuOTkyMTg4di01NC45OTIxODhjMC0xMS4wNDI5NjkgOC45NTMxMjUtMTkuOTk2MDkzIDIwLTE5Ljk5NjA5MyAxMS4wNDI5NjkgMCAxOS45OTYwOTMgOC45NTMxMjQgMTkuOTk2MDkzIDE5Ljk5NjA5M3Y1NC45OTIxODhoNTQuOTkyMTg4YzExLjA0Njg3NSAwIDIwIDguOTUzMTI1IDIwIDIwem0wIDAiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9zdmc+" />
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