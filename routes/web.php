<?php

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

Route::get('/', function () {
    return view('welcome');
});


//ANIO_ESCOLAR
Route::get('/anio-escolar', 'AnioEscolarController@index')->name('anio-escolar.index');
Route::get('/anio-escolar/create', 'AnioEscolarController@create')->name('anio-escolar.create');
Route::get('/anio-escolar/edit/{id}', 'AnioEscolarController@edit')->name('anio-escolar.edit');
Route::post('/anio-escolar', 'AnioEscolarController@store');
Route::put('/anio-escolar/{id}', 'AnioEscolarController@update')->name('anio-escolar.update');
Route::get('/anio-escolar/{id}', 'AnioEscolarController@show');
Route::delete('/anio-escolar/', 'AnioEscolarController@destroy');

//GRADO
Route::get('/grados', 'GradoController@index')->name('grado.index');
Route::get('/grados/create', 'GradoController@create')->name('grado.create');
Route::get('/grados/edit/{id}', 'GradoController@edit')->name('grado.edit');
Route::post('/grados', 'GradoController@store');
Route::put('/grados/{id}', 'GradoController@update')->name('grado.update');
Route::get('/grados/{id}', 'GradoController@show');
Route::delete('/grados/', 'GradoController@destroy')->name('grado.delete');

//ALUMNOS
Route::get('/alumnos', 'AlumnoController@index')->name('alumnos.index');
Route::get('/alumnos/create', 'AlumnoController@create')->name('alumnos.create');
Route::get('/alumnos/edit/{id}', 'AlumnoController@edit')->name('alumnos.edit');
Route::post('/alumnos', 'AlumnoController@store');
Route::put('/alumnos/{id}', 'AlumnoController@update')->name('alumnos.update');
Route::get('/alumnos/{id}', 'AlumnoController@show');
Route::delete('/alumnos/', 'AlumnoController@destroy')->name('alumnos.delete');

//PROFESOR
Route::get('/profesores', 'ProfesorController@index');
Route::post('/profesores', 'ProfesorController@store');
Route::put('/profesores/{id}', 'ProfesorController@update');
Route::get('/profesores/{id}', 'ProfesorController@show');
Route::delete('/profesores/{id}', 'ProfesorController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
