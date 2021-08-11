<?php

use App\Http\Controllers\Home\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DirUserController;
use App\Http\Controllers\Dashboard\SoundListController;
use App\Http\Controllers\Dashboard\VideoController;
use App\Http\Controllers\DirsController;
use App\Http\Controllers\Home\RegistroController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;

//Home Routs
Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/singup', [RegistroController::class, 'index'])
    ->name('registro');
Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

///Dashboard Routs
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::post('/dasboard/salir', [DashboardController::class, 'salir'])
        ->name('dashboard.go-out');

    Route::post('/get-video', [VideoController::class, 'getVideo'])->name('get.video');

    Route::prefix('list')->group(function () {
        Route::post('/create', [SoundListController::class, 'create'])->name('list.create');
    });
});
