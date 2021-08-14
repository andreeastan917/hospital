<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
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
Route::resource('physicians','PhysiciansController');
Route::resource('products','ProductsController');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
