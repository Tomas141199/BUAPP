<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route para la pagina principal/inicio
Route::get('/', 'InicioController@index')->name('inicio.index');

Auth::routes();

//Ignorar
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'getUser']);

//Routes para el alumno

Route::get('/alumno', 'AlumnoController@index')->name('alumno.index');
Route::get('/alumno/{alumno}/edit', 'AlumnoController@index')->name('alumno.edit');

//Routes para el admin
Route::get('/administrador', 'AdministradorController@index')->name('administrador.index');