<?php

namespace App\Http\Controllers;

use App\Models\HomeReader;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $readers = HomeReader::get();
        $sections = HomeSection::get();
        return view('home', compact("readers", "sections"));
    }
}
