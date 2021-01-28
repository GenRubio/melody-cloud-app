<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDirectory;
use App\Models\DirectoriContent;
use Illuminate\Http\Response;

class DirUserController extends Controller
{
    public function addSound(Request $request){
        $dir = $request->get('dir');
        $directorio = UserDirectory::where('user_id', auth()->user()->id)
        ->where('name', $dir)
        ->first();
        
        if ($directorio != null){
            $file = new DirectoriContent();
            $file->user_id = auth()->user()->id;
            if ($request->hasFile('sound')) {
                $sound = $request->file('sound');
                $new_name = rand() . '.' . $sound->getClientOriginalExtension();
                $sound->move(public_path('users/' . auth()->user()->repositorio . '/' . $dir ), $new_name);
                $file->sound = '/users/' . auth()->user()->repositorio . '/' . $dir . '/'. $new_name;
            } else {
                $file->sound = '';
            }
            $file->dir_id = $directorio->id;
            $file->save();
        }
        return response()->json([
            'result' => 'Se ha creado nueva melodia.',
        ], Response::HTTP_CREATED);   
    }
}
