<?php

use  \App\Http\Controllers\ControllerMachine;
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

Route::get('/help', function () {
    return view('help');
});

Route::get('/listar-maquinas', [
   ControllerMachine::class, 'index'
]);

Route::get('/visualizar-maquina/{id}', [
    ControllerMachine::class, 'show'
 ]);