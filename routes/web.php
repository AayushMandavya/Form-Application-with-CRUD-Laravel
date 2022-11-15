<?php
use App\Http\Controllers\TodolistController;
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

Route::get('/',[TodolistController::class,'index']); 
Route::post('/save-todo', [TodolistController::class,'saveTodo'])->name('saveTodo');
Route::get('/delete/{id}', [TodolistController::class, "deleteItem"]);
Route::get('/edit/{id}', [TodolistController::class, "editItem"]);
Route::post('/edit/{id}', [TodolistController::class,'updateTodo']);

