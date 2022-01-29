<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/game', function () {
    return view('game');
});


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
