<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/game', function () {
    return view('game');
});


Route::get('/admin', 'AdminController@imdex')->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/game', 'GameController@store');

