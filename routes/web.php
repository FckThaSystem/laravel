<?php

use App\Http\Controllers\TasksController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//home page
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

// user controllers
Route::prefix('/user')->group(function (){
    Route::get('/{id}', [\App\Http\Controllers\UsersController::class, 'getUser'])
        ->where('id', '\d+')
        ->name('user.get');
    Route::delete('/{id}', [\App\Http\Controllers\UsersController::class, 'userDelete'])
        ->where('id', '\d+')
        ->name('user.delete');
    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register'])
        ->name('user.register');
    Route::post('/auth', [\App\Http\Controllers\AuthController::class, 'auth'])
        ->name('user.auth');
});

// resource controller
Route::resource('tasks', TasksController::class);
