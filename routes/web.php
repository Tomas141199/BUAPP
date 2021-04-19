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

//Ignorar Pere no borrar ni comentar
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'getUser']);

//Routes para el alumno
Route::get('/alumno', 'AlumnoController@index')->name('alumno.index');
Route::get('/alumno/{alumno}', 'AlumnoController@show')->name('alumno.show');
Route::get('/alumno/{alumno}/edit', 'AlumnoController@edit')->name('alumno.edit');
Route::put('/alumno/{alumno}', 'AlumnoController@update')->name('alumno.update');

//Routes para el admin
Route::get('/administrador', 'AdministradorController@index')->name('administrador.index');

Auth::routes();