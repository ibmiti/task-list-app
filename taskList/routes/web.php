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


Route::get('/', [TasksController::class, 'index'])->name('index');
Route::get('/tasks/create', [TasksController::class, 'create'])->name('create');
Route::post('/tasks/create', [TasksController::class, 'store'])->name('store');


Route::get('/tasks/edit/{id}', [TasksController::class, 'edit'])->name('edit');

// via edit.blade.php this method will fire
Route::post('/tasks/update/{id}', [TasksController::class, 'update'])->name('update');


Route::get('/tasks/delete', [TasksController::class, 'delete']);
