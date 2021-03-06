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

Route::get('/clients', function () {
    return view('clients.index');
});

Route::get('/grafico', function () {
    return view('grafico.index');
});

Route::get('/mqtt/mqtt', function () {
    return view('mqtt.mqtt');
});

