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
    return view('pages.menu');
});

Route::get('/proiectulMeu', function () {
    return view('primaPagina');
});

Route::resource('patients','PatientsController');
Route::resource('physician','PhysicianController');

