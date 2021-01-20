<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(){
        if (auth()->check()){
            return redirect('dashboard');
        }
        else{
            return view('registro');
        }
    }
}
