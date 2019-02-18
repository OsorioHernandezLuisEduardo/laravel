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
    return view('pw/inicio');
});
Route::post('insertar','pw_controller\micontrolador@insertar');
Route::get('formulario','pw_controller\micontrolador@verform');
Route::get('hola','pw_controller\micontrolador@index');//teniendo la palabra hola, entra a controller y ejecuta el metodo index
Route::get('login','pw_controller\micontrolador@login');
Route::get('consulta','pw_controller\micontrolador@ver_datos');
Route::get('verblade','pw_controller\micontrolador@verblade');
Route::get('veralumno','pw_controller\micontrolador@veralmno');

//insertar en modelo_tienda
Route::post('insertartienda2','pw_controller\micontrolador@insertartienda2');
Route::get('tienda','pw_controller\micontrolador@vertienda');
