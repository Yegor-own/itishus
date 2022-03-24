<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseVideoController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game', function () {
    return view('game');
});

Route::resource('courses.videos', CourseVideoController::class)
    ->scoped(['video'=>'slug'])
    ->middleware('auth');

Route::resource('/courses', CourseController::class)
    ->only(['index', 'create', 'store', 'edit', 'update',  'destroy'])
    ->middleware('auth');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'dashboard')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/game', 'GameController@store');

