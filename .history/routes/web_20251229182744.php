<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;


Route::resource('Details', DetailsController::class);

Route::get('/', function () {
    return view('welcome');
});
