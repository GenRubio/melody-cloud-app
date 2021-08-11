<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\UserSoundList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SoundListController extends Controller
{
    public function create(Request $request){
        $soundList = UserSoundList::where('name', $request->list)->first();
        $content = null;

        if ($soundList){
            $success = false;
            $message = "Hy una lista con el mismo nombre.";
        }
        else{
            $userList = new UserSoundList();
            $userList->name = $request->list;
            $userList->user_id = auth()->user()->id;
            $userList->slug = str_slug(mb_strtolower($request->list));
            $userList->save();

            $success = true;
            $message = "Nueva lista se ha creado correctamente.";
            $content = view('components.sound-traks-list', [
                'soundList' => auth()->user()->soundLists
            ])->render();
        }
        return response()->json([
            'success' => $success,
            'message' => $message,
            'content' => $content,
        ], Response::HTTP_CREATED);
    }
}
