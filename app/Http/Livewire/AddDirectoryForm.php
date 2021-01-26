<?php

namespace App\Http\Livewire;

use App\Models\UserDirectory;
use Livewire\Component;
use Illuminate\Support\Facades\File;

class AddDirectoryForm extends Component
{
    public $nombre;

    public function render()
    {
        $this->emitTo('user-directorys', 'render');
        return view('livewire.add-directory-form');
    }
    public function create(){
        $dir = new UserDirectory();
        $dir->user_id = auth()->user()->id;
        $dir->name = $this->nombre;
        $dir->save();

        $path = 'users/' . auth()->user()->repositorio . '/' . $this->nombre;
        File::makeDirectory($path, 0777, true, true);

        session()->flash('message', 'Se ha creado nuevo directorio.');

    }
}
