<?php

namespace App\Http\Livewire;

use App\Models\UserDirectory;
use Livewire\Component;

class UserDirectorys extends Component
{
    public $dirs;

    protected $listeners = ['render'];
    public function render()
    {
        $this->dirs = UserDirectory::where('user_id', auth()->user()->id)->get();
        return view('livewire.user-directorys');
    }
}
