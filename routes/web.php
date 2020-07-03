<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('list', [\App\Http\Controllers\TaskController::class, 'list'])->name('list');
Route::get('create-new-task', [\App\Http\Controllers\TaskController::class, 'showCreateForm'])->name('show-create-form');

Route::post('create-task', [\App\Http\Controllers\TaskController::class, 'createTask'])->name('create-task');
Route::delete('delete-task/{task}', [\App\Http\Controllers\TaskController::class, 'deleteTask'])
    ->name('delete-task')
    ->middleware('canDeleteTask');
