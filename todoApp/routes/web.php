<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

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

Route::get('/todos',[todoController::class,'index']);
Route::get('/todos/{todo}',[todoController::class,'show']);
Route::get('/todo-create',[todoController::class,'create']);
Route::post('/todo-store',[todoController::class,'store']);
Route::get('/todos/{todo}/edit',[todoController::class,'edit']);
Route::post('/todo-update',[todoController::class,'update']);
Route::get('/todos/{todo}/delete',[todoController::class,'delete']);
Route::get('/todos/{todo}/complete',[todoController::class,'complete']);
