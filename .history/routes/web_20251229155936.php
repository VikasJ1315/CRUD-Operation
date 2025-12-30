<?php

use Illuminate\Support\Facades\Route;


Route::resource('category', UserController::class);

Route::get('/', function () {
    return view('welcome');
});