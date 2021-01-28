<?php

namespace App\Http\Livewire;

use App\Models\DirectoriContent;
use App\Models\UserDirectory;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class DirContent extends Component
{
    public $dir;
    public $content;

    protected $listeners = ['render'];
    public function render()
    {
        $userDirectory = UserDirectory::where('user_id', auth()->user()->id)
        ->where('name', $this->dir)
        ->first();
        if ($userDirectory != null){
            $this->content = DirectoriContent::where('user_id', auth()->user()->id)
            ->where('dir_id', $userDirectory->id)
            ->get();
        }        
        return view('livewire.dir-content');
    }
    public function delete($soundId){
        $sound = DirectoriContent::where('user_id', auth()->user()->id)
        ->where('id', $soundId)
        ->first();
        $soundPatch = substr($sound->sound, 1, strlen($sound));

        if ($sound != null){
            if(File::exists(public_path($soundPatch))){
                File::delete(public_path($soundPatch));
            }

            DirectoriContent::where('user_id', auth()->user()->id)
            ->where('id', $soundId)
            ->delete();
        }
    }
}
