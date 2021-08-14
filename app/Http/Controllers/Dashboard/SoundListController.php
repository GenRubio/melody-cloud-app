<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\UsersListSound;
use App\Models\UserSound;
use App\Models\UserSoundList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SoundListController extends Controller
{
    public function index(Request $request)
    {
        $soundList = UserSoundList::where('slug', $request->slug)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($soundList) {
            return view('pages.dashboard.sound-list', [
                'sounds' => $soundList->sounds,
                'list' => $soundList->id,
            ]);
        } else {
            return back();
        }
    }

    public function copy(Request $request)
    {
        $userSound = $this->checkUserSound($request->sound);

        if ($userSound) {
            $userList = $this->checkUserListByName($request->list);

            if ($userList) {
                $listSoundCheck = UsersListSound::where('user_sound_list_id', $userList->id)
                    ->where('sound_id', $userSound->sound_id)
                    ->first();
                if ($listSoundCheck) {
                    $success = false;
                    $message = "Este audio ya se encuntra en carpeta " . $userList->name;
                } else {
                    $listSound = new UsersListSound();
                    $listSound->user_sound_list_id = $userList->id;
                    $listSound->sound_id = $userSound->sound_id;
                    $listSound->save();

                    $success = true;
                    $message = "Cancion se ha copiado correctamente.";
                }
            } else {
                $success = false;
                $message = "Ha ocurido un error";
            }
        } else {
            $success = false;
            $message = "Ha ocurido un error";
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
        ], Response::HTTP_CREATED);
    }

    public function create(Request $request)
    {
        $soundList = $this->checkUserListByName($request->list);

        $content = null;

        if ($soundList) {
            $success = false;
            $message = "Hy una lista con el mismo nombre.";
        } else {
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
            'sound_list' => view(
                'components.select-copy-list',
                [
                    'soundLists' => auth()->user()->soundLists
                ]
            )->render(),
        ], Response::HTTP_CREATED);
    }

    public function deleteSound(Request $request)
    {
        $href = "";
        $sound = $this->checkUserSound($request->sound);
        if ($sound) {
            if (isset($request->list)) {
                $userList = $this->checkUserListById($request->list);
                if ($userList) {
                    UsersListSound::where('user_sound_list_id', $request->list)
                        ->where('sound_id', $request->sound)
                        ->delete();

                    $success = true;
                    $message = "";

                    $href = route('list.view', ['slug' => $userList->slug]);
                } else {
                    $success = false;
                    $message = "Ha ocurrido un error";
                }
            } else {
                $sound->delete();

                $success = true;
                $message = "";
                $href = route('dashboard');
            }
        } else {
            $success = false;
            $message = "Ha ocurrido un error";
        }
        return response()->json([
            'success' => $success,
            'message' => $message,
            'href' => $href,
        ], Response::HTTP_CREATED);
    }

    private function checkUserSound($sound)
    {
        return UserSound::where('sound_id', $sound)
            ->where('user_id', auth()->user()->id)
            ->first();
    }

    private function checkUserListByName($list)
    {
        return UserSoundList::where('name', $list)
            ->where('user_id', auth()->user()->id)
            ->first();
    }

    private function checkUserListById($list)
    {
        return UserSoundList::where('id', $list)
            ->where('user_id', auth()->user()->id)
            ->first();
    }
}
