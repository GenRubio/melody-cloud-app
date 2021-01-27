<?php

namespace App\Http\Livewire;

use App\Models\DirectoriContent;
use App\Models\UserDirectory;
use Livewire\Component;

class DirContent extends Component
{
    public $dir;
    public $content;
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
}
