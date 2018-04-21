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
    return view('home');
})->name('home');

Route::get('/ejercicio_1', function () {
    return view('formularios/ejercicio_1');
})->name('ejercicio_1');

Route::post('/ejercicio_1/consultar', 'ejercicio1Controller@Calcular');

Route::get('/ejercicio_2', function () {
    return view('formularios/ejercicio_2');
})->name('ejercicio_2');

Route::post('/ejercicio_2/consultar', 'ejercicio2Controller@Calcular');

Route::get('/ejercicio_3', function () {
    return view('formularios/ejercicio_3');
})->name('ejercicio_3');

Route::post('/ejercicio_3/consultar', 'ejercicio3Controller@Calcular');

Route::get('/ejercicio_4', function () {
    return view('formularios/ejercicio_4');
})->name('ejercicio_4');

Route::post('/ejercicio_4/consultar', 'ejercicio4Controller@Calcular');

Route::get('/ejercicio_5', function () {
    return view('formularios/ejercicio_5');
})->name('ejercicio_5');

Route::post('/ejercicio_5/consultar', 'ejercicio5Controller@Calcular');

Route::get('/ejercicio_6', function () {
    return view('formularios/ejercicio_6');
})->name('ejercicio_6');

Route::post('/ejercicio_6/consultar', 'ejercicio6Controller@Calcular');