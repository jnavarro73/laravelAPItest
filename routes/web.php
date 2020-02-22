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
    return view('welcome');
});

//addmovie/{title}/{releaseYear}
//removemovie/{title}


Route::match(['get', 'post','put'], "/addmovie/{title}/{releaseYear}",'MovieController@store');
Route::match(['get', 'post','put','delete'], "/removemovie/{title}",'MovieController@destroy');
