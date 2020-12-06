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

Route::resource('task', TasksController::class);

// alternative to the above : 
// Route:get('/task/create', [TaskController::class, 'create']);
// Route:get('/task/edit', [TaskController::class, 'edit']);    
// Route:get('/task/update', [TaskController::class, 'update']);
// etc ...


Route::get('/', function () {
    return redirect()->route('task.index');
});
