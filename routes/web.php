<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


//Home Routs
Route::get('/', function () {
    return view('home');
});
Route::get('/singup', function(){
    return view('home');
});


///Dashboard Routs

Route::get('/dashboard', [DashboardController:: class, 'index'])
->name('dasboard');
