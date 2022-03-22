<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/game', function () {
    return view('game');
});

//Route::resource('courses.videos', 'VideoController',
//    ['only' => ['index', 'show']]);
Route::get('/courses', 'CourseController@index');
Route::get('/courses/{course_id}/video/', 'VideoController@index');
Route::get('/courses/{course_id}/video/{video_id}/', 'VideoController@show')->name('video');


Route::get('/admin', 'AdminController@imdex')->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/game', 'GameController@store');

