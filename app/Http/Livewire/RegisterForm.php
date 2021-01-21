<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class RegisterForm extends Component
{
    public $name;
    public $password;
    public $passwordRepeat;
    public $email;
    protected $rules = [
        'name' => 'required|min:3|unique:users,name',
        'password' => 'required|min:6|max:20',
        'passwordRepeat' => 'required|min:6|max:20|required_with:password|same:password',
        'email' => 'required|email|unique:users,email',
    ];
    public function render()
    {
        return view('livewire.register-form');
    }
    public function submit(){
        $this->validate();

        $user = new User();
        $user->username = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->repositorio = Hash::make($this->name . $this->email . $this->password);
        $user->save();

        $path = 'users/' . $user->repositorio;
        File::makeDirectory($path, 0777, true, true);

        Auth::login($user);
        return redirect()->intended('/dashboard');
    }
}
