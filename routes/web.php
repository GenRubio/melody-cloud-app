<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Home\RegistroController;
use Illuminate\Support\Facades\Route;


//Home Routs
Route::get('/', function () {
    return view('home');
});
Route::get('/singup', [RegistroController::class, 'index'])
->name('registro');
Route::get('/login', [LoginController::class, 'index'])
->name('login');


///Dashboard Routs

Route::get('/dashboard', [DashboardController:: class, 'index'])
->name('dasboard');
