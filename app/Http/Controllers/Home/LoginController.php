<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        if (auth()->check()){
            return redirect('dashboard');
        }
        else{
            return view('login');
        }
    }
}
