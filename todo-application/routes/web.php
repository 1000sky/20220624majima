<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\LoginMiddleware;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', [TodoController::class, 'index']);
/*Route::post('/', [TodoController::class, 'post']);*/

Route::post('/todo/create', [TodoController::class, 'add']);

Route::post('/todo/update', [TodoController::class, 'update']);


Route::post('/todo/delete', [TodoController::class, 'remove']);




/*Route::get('/login', [LoginController::class, 'index'])->middleware(LoginMiddleware::class);*/

/*Route::get('/', [UserController::class, 'create']);*/
/*Route::get('/login', [UserController::class, 'login']);*/

