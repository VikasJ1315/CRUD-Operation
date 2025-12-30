<?php

use Illuminate\Support\Facades\Route;


Route::resource('Detail', DetailsController::class);

Route::get('/', function () {
    return view('welcome');
});