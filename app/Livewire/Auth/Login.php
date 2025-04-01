<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'email obrigatorio',
        'email.email' => 'formato de email inválido',
        'password.required' => 'senha obrigatoria',
        'password.min' => 'senha deve conter no minimo 6 caracteres'
    ];


public function login(){
    $this->validate();
    if(Auth::attempt(['email'=>$this->email, 'password'=>$this->password])){
        session()->regenerate();
        return redirect()->route(Auth::user()->role === 'admin' ? 'admin.dashboard': 'user.dashboard' );
    }
    session()->flash('error', 'Email ou senha incorretos');
}


    public function render()
    {
        return view('livewire.auth.login');
    }
}
