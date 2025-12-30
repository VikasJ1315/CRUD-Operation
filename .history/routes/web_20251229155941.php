<?php

use Illuminate\Support\Facades\Route;


Route::resource('', UserController::class);

Route::get('/', function () {
    return view('welcome');
});
