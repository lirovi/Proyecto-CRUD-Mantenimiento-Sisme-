<?php

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

Route::get('/navbar', function () {
    return view('navbar');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect','SocialController@redirect');
Route::get('/callback','SocialController@callback');

Route::resource('tipoequipos','Miscontrollers\TipoequipoController');
Route::resource('equipos','Miscontrollers\EquipoController');
Route::resource('profesions','Miscontrollers\ProfesionController');
Route::resource('funcionarios','Miscontrollers\FuncionarioController');
Route::resource('cargos','Miscontrollers\CargoController');
Route::resource('dptos','Miscontrollers\DptoController');
Route::resource('unidads','Miscontrollers\UnidadController');
Route::resource('diagnosticos','Miscontrollers\DiagnosticoController');
Route::resource('solucions','Miscontrollers\SolucionController');
Route::resource('tipomants','Miscontrollers\TipomantController');
Route::resource('designacions','Miscontrollers\DesignacionController');
Route::resource('mantenimientos','Miscontrollers\MantenimientoController');
