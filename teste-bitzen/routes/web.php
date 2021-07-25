<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\UserController;

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

Route::get('/', [ViewsController::class, 'index'])->name('home');
Route::get('/login/{message?}', [ViewsController::class, 'signin'])->name('home.signin');
Route::post('/auth', [UserController::class, 'auth'])->name('user.auth');
Route::get('/create', [UserController::class, 'create'])->name('home.create');
Route::post('/store', [UserController::class, 'store'])->name('user.store');

Route::group(['middleware'=>'auth'],function() {
    Route::get('/dashboard/{message?}', [ViewsController::class, 'index'])->name('dashboard');


    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});
