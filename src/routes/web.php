<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todocontroller;
use App\Http\Controllers\CategoryController;

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

Route::get('/',[Todocontroller::class, 'index']);
Route::post('/todos', [Todocontroller::class, 'store']);
Route::patch('/todos/update',[Todocontroller::class, 'update']);
Route::delete('/todos/delete', [Todocontroller::class, 'destroy']);
Route::get('/todos/search',[Todocontroller::class,'search']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories',[CategoryController::class,'store']);
Route::patch('/categories/update',[CategoryController::class,'update']);
Route::delete('/categories/delete',[CategoryController::class, 'destroy']);