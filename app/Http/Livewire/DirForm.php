<?php

namespace App\Http\Livewire;

use App\Models\DirectoriContent;
use App\Models\UserDirectory;
use Livewire\Component;

class DirForm extends Component
{
    public $dir;

    protected $listeners = ['render'];
    public function render()
    {
        $this->emitTo('dir-content', 'render');
        return view('livewire.dir-form');
    }
}
