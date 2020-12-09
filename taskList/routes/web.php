<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// index view displaying all saved task ?? no task with create button
Route::get('/', [TasksController::class, 'index'])->name('index');
// route to create view 
Route::get('/tasks/create', [TasksController::class, 'create'])->name('create');
// send data to store method which will validaet against rules and then finally save to database : 
// ::: important note : in order for this route to work you must have a valid .env file with a database connected, make sure to then run migration for the create_task_... 
Route::post('/tasks/create', [TasksController::class, 'store'])->name('store');

// send id of task to edit view in order for updating to take place
Route::get('/tasks/edit/{id}', [TasksController::class, 'edit'])->name('edit');
// update task via form on edit view 
Route::post('/tasks/update/{id}', [TasksController::class, 'update'])->name('update');
// Delete task
Route::get('/tasks/delete/{id}', [TasksController::class, 'destroy'])->name('delete');
