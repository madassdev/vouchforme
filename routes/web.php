<?php

use App\Http\Controllers\AppController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [AppController::class, 'index'])->name('index');
Route::get('/auth/register', [AppController::class, 'register'])->name('auth.register');
Route::get('/auth/login', [AppController::class, 'login'])->name('auth.login');
Route::post('/auth/login/password', [AppController::class, 'passwordAuth'])->name('auth.login.password');
Route::post('/auth/login/google', [AppController::class, 'googleAuth'])->name('auth.login.google');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [AppController::class, 'dashboard'])->name('dashboard.index');
});
