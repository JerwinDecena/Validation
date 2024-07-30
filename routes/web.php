<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserTaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user_task', UserTaskController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
