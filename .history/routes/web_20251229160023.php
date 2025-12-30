<?php

use Illuminate\Support\Facades\Route;


Route::resource('Detail', DetailsController::);

Route::get('/', function () {
    return view('welcome');
});
