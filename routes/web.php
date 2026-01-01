<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProjectController;


Route::resource('Details', DetailsController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/insert', [ProjectController::class, 'create'])->name('project.create');
Route::post('/insert', [ProjectController::class, 'store'])->name('project.store');

Route::get('/test', [ProjectController::class, 'testing'])->name('exceptionLog');