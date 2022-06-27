<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TestController;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'post']);

Route::post('/todo/create', [TodoController::class, 'add']);

Route::post('/todo/update', [TodoController::class, 'update']);

Route::post('/todo/delete', [TodoController::class, 'remove']);



/*Route::post('/todo/create', [TodoController::class, 'create']);

Route::post('/todo/update', [ApplicationController::class, 'update']);

Route::post('/todo/delete', [ApplicationController::class, 'remove']);*/
