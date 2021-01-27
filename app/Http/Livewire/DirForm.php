<?php

namespace App\Http\Livewire;

use App\Models\DirectoriContent;
use App\Models\UserDirectory;
use Livewire\Component;
use Livewire\WithFileUploads;

class DirForm extends Component
{
    use WithFileUploads;

    public $dir;
    public $sound;
    public function render()
    {
        return view('livewire.dir-form');
    }
    public function save()
    {
       
        $filename = $this->sound->store('users/' . auth()->user()->repositorio . '/' . $this->dir . '', 'public');
        //$this->sound = "";

        $directorio = UserDirectory::where('user_id', auth()->user()->id)
        ->where('name', $this->dir)
        ->first();
        
        if ($directorio != null){
            $file = new DirectoriContent();
            $file->user_id = auth()->user()->id;
            $file->sound = $filename;
            $file->dir_id = $directorio->id;
            $file->save();
        }
    }
}
