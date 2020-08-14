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

//Route::get('/fortune/{id}', 'FortuneController@create');
//Route::post('/fortune/{id}', 'FortuneController@store');
//Route::get('/fortune/{id}/peeked', 'FortuneController@peeked');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Route::get('/home/create', 'HomeController@create');
Route::delete('/home/delete/{id}', 'HomeController@destroy');

