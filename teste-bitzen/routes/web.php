<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MotoristaController;

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
    Route::get('/dashboard/{message?}', [ViewsController::class, 'dashboard'])->name('dashboard');

    Route::get('/motorista/{message?}', [MotoristaController::class, 'index'])->name('motorista.index');
    Route::get('/create-motorista', [MotoristaController::class, 'create'])->name('motorista.create');
    Route::post('/create-motorista', [MotoristaController::class, 'store'])->name('motorista.store');
    Route::get('/edit-motorista/{id}', [MotoristaController::class, 'edit'])->name('motorista.edit');
    Route::put('/update-motorista/{id}', [MotoristaController::class, 'update'])->name('motorista.update');
    Route::get('/delete-motorista/{id}', [MotoristaController::class, 'destroy'])->name('motorista.destroy');

    Route::get('/veiculo/{message?}', [VeiculoController::class, 'index'])->name('veiculo.index');
    Route::get('/create-veiculo', [VeiculoController::class, 'create'])->name('veiculo.create');
    Route::get('/create-veiculo', [VeiculoController::class, 'store'])->name('veiculo.store');
    Route::get('/edit-veiculo/{id}', [VeiculoController::class, 'edit'])->name('veiculo.edit');
    Route::put('/update-veiculo/{id}', [VeiculoController::class, 'update'])->name('veiculo.update');
    Route::get('/delete-veiculo/{id}', [VeiculoController::class, 'destroy'])->name('veiculo.destroy');

    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});
