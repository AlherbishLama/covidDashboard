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

Route::get('/','App\Http\Controllers\CovidStatisticController@index');

Route::get('/api/fill_data','App\Http\Controllers\apiController@index');

// Auth::routes();


Route::post('/create', 'App\Http\Controllers\CovidStatisticController@store');

Route::put('/update', 'App\Http\Controllers\CovidStatisticController@update');


