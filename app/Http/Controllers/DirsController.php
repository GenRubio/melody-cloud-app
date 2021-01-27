<?php

namespace App\Http\Controllers;

use App\Models\UserDirectory;
use Illuminate\Http\Request;

class DirsController extends Controller
{
    public function index(Request $request){
        $dir = UserDirectory::where('user_id', auth()->user()->id)
        ->where('name', $request->directory)
        ->first();

        if ($dir != null){
            $dirName = $dir->name;
            return view('components.directoris', compact('dirName'));
        }
        else{
            return redirect()->route('dasboard');
        }  
    }
}
