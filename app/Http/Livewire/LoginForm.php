<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $name;
    public $password;
    protected $rules = [
        'name' => 'required',
        'password' => 'required',
    ];
    public function render()
    {
        return view('livewire.login-form');
    }
    public function login()
    {
        $this->validate();

        $credentials = ['username' => $this->name, 'password' => $this->password];

        if (Auth::attempt($credentials, true)){
            return redirect()->intended('/dashboard');
        }
        else{
            session()->flash('error', 'Username or password incorrect.');
        }

        $this->name = "";
        $this->password = "";
    }
}
