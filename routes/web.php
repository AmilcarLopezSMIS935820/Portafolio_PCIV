<?php

use Illuminate\Routing\Route as RoutingRoute;
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
    return view('index');
});

Route::get('jornalizacion', function(){
    return view('jornalizacion');
});

Route::get('calendarizacion', function(){
    return view('calendarizacion');
});

Route::get('presentacion', function(){
    return view('presentacion');
});

Route::get('bitacora', function(){
    return view('bitacora');
});

Route::get('conclusiones', function(){
    return view('conclusiones');
});