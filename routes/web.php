<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index'])->name('todo.index');
// Route::get('/test', [TodoController::class, 'test'])->name('todo.test');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todos', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/{todo}', [TodoController::class, 'delete'])->name('todo.delete');
Route::get('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');
// Route::get('/todos/{id}', [TodoController::class, 'show'])->name('todo.show'); //روش قدیمی
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todo.show'); //Route model binding