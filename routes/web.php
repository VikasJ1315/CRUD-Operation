<?php


use App\Http\Controllers\DetailsController;
use App\Http\Controllers\imageController;
use App\Http\Controllers\ProjectController;
use App\Models\{Details, Project,userr,task};
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;


Route::resource('Details', DetailsController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project',function() {
    $project = project::create([
        'title'=> 'First Project',
    ]);

    $user1 = userr::create([
        'project_id' => $project->id, 'name'=>'First User', 'email'=> 'User1@gmail.com', 'password'=>'123456789'
    ]);

    $user2 = userr::create([
        'project_id' => $project->id, 'name'=>'Second User', 'email'=> 'User2@gmail.com', 'password'=>'123456789'
    ]);

    $task1 = task::create([
        'user_id'=> $user1->id, 'title'=>'task 1 by User 1',
    ]);

    $task2 = task::create([
        'user_id'=> $user1->id, 'title'=>'task 2 by User 1',
    ]);

    $task3 = task::create([
        'user_id'=> $user2->id, 'title'=>'task 1 by User 2',
    ]);

    $task4 = task::create([
        'user_id'=> $user2->id, 'title'=>'task 2 by User 2',
    ]);

    return back()->with('success','');

    });


Route::get('/insert', [ProjectController::class, 'create'])->name('project.create');
Route::post('/insert', [ProjectController::class, 'store'])->name('project.store');

Route::get('upload',[imageController::class,'create'])->name('detail.image');
Route::post('/upload/file', [imageController::class,'upload'])->name('detail.store');

Route::get('/test', [ProjectController::class, 'testing'])->name('exceptionLog');