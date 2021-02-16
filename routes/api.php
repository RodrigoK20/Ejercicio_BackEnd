<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route::apiResource('/departamentos', DepartamentoController::class)->names('departamentos');
Route::apiResource('/municipios', MunicipioController::class)->names('municipios'); */

//RUTAS DEPARTAMENTOS
Route::get('departamentos', 'DepartamentoController@index');
Route::group(['prefix' => 'departamento'], function () {
    Route::post('add', 'DepartamentoController@store');
    Route::get('edit/{id}', 'DepartamentoController@edit');
    Route::post('update/{id}', 'DepartamentoController@update');
    Route::post('change_status/{id}', 'DepartamentoController@change_status');
    Route::delete('delete/{id}', 'DepartamentoController@destroy');
});

//RUTAS MUNICIPIOS
Route::get('municipios', 'MunicipioController@index');
Route::group(['prefix' => 'municipio'], function () {
    Route::post('add', 'MunicipioController@store');
    Route::get('edit/{id}', 'MunicipioController@edit');
    Route::get('cargar_departamentos', 'MunicipioController@cargar_departamentos');
    Route::post('update/{id}', 'MunicipioController@update');
    Route::post('desactivar/{id}', 'MunicipioController@desactivar');
});

//Ruta Tipo Costo
Route::get('tipo_costos', 'TipoCostoController@index');

//Ruta Instructor
Route::get('instructores', 'InstructorController@index');

//Ruta Modalidad
Route::get('modalidades', 'ModalidadController@index');


//RUTAS CURSOS
Route::get('cursos', 'CursoController@index');
Route::group(['prefix' => 'curso'], function () {
    Route::post('add', 'CursoController@store');

});
