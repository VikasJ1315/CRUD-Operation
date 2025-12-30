<?php

use Illuminate\Support\Facades\Route;


Route::resource('Detail', UserController::class);

Route::get('/', function () {
    return view('welcome');
});