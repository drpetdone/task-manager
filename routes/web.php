<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return "Hello from Laravel";
});

Route::get('/home',[PageController::class, 'home']);

Route::get('/about',[PageController::class, 'about']);

Route::get('/contact',[PageController::class, 'contact']);

//Task list  
Route::get('/tasks', [TaskController::class, 'index']);
//to save record posted
Route::post('/tasks', [TaskController::class, 'store']);
//delete task
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
//for editing task
Route::get('/tasks/{id}/edit',[TaskController::class, 'edit']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);