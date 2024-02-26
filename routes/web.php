<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [TodosController::class, 'getHome'])->name('home');
Route::get('/todo/add', [TodosController::class,'addTodo'])->name('addTodo');

Route::post('/todo/add/db', [TodosController::class,'addTodoToDB'])->name('addTodoDB');
Route::get('/todo/done{id}', [TodosController::class,'markDone'])->name('done');
Route::get('/todo/edit/{id}', [TodosController::class,'editTodo'])->name('edit');
Route::put('/todo/update/{id}', [TodosController::class,'updateTodo'])->name('update.todo');
Route::get('/todo/delete/{id}', [TodosController::class,'deleteTodo'])->name('delete');