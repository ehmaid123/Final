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
 
Route::get('/contact','FinalController@index');

Route::get('/create','FinalController@create');

Route::post('/store','FinalController@store');

Route::get('/{contact}/edit','FinalController@edit');

Route::post('/update/{contact}','FinalController@update');

Route::delete('delete/{id}','FinalController@destroy');