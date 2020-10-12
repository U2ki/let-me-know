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


Auth::routes(['verify' => true]);

Route::get('/home', 'QuestionController@index')->middleware('verified');
Route::get('/home/create', 'QuestionController@create');
Route::post('/home/create', 'QuestionController@store');
Route::get('/home/edit/{id}', 'QuestionController@edit');
Route::post('/home/edit/{id}', 'QuestionController@update');
Route::delete('/home/delete/{id}', 'QuestionController@destroy');

Route::get('/home/{url}', 'AnswerController@index')->middleware('verified');
Route::delete('/home/{url}/delete/{id}', 'AnswerController@destroy');

Route::get('/home/ans/{url}', 'AnswerController@create');
Route::post('/home/ans/{url}', 'AnswerController@store');
