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
    return view('auth.login');
});

Route::get('agenda', 'Controller@agenda');
Route::get('clinica', 'Controller@clinica');
Route::get('relatorios', 'Controller@relatorios');
Route::get('configuracoes', 'Controller@configuracoes');
Route::get('corpo-clinico', 'Controller@corpoClinico');
