<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostMessageController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index']);

Route::post('/', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [AuthenticationController::class, 'showLogin']);
Route::post('/login', [AuthenticationController::class, 'store']);
Route::post('/logout', [AuthenticationController::class, 'destroy']);

Route::get('/{user:username}', [PostMessageController::class, 'show'])
    ->name('user');
Route::post('/{user:username}', [PostMessageController::class, 'store']);
