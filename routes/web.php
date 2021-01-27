<?php

use App\Http\Controllers\Home\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DirsController;
use App\Http\Controllers\Home\RegistroController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
        ->name('dasboard');

    Route::get('/dasboard/salir', [DashboardController::class, 'salir'])
        ->name('dashboard.go-out');

    Route::get('/dashboard/{directory}', [DirsController::class, 'index'])
    ->name('directorio');
});
