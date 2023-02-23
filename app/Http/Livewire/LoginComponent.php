<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginComponent extends Component
{
    public $email,$password;

    
    public function render()
    {
        return view('livewire.login-component');
    }

     public function login()
    {
        $validatedDate = $this->validate(
            [
            'email' => 'required|email',
            'password' => 'required',
            ],
            [
                'email.required' => 'El correo es necesario para iniciar sesion',
                'email.email' => 'El formato del correo es incorrecto',

                'password.required' => 'La contraseña es necesaria para iniciar sesion'
            ]
    );

        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                session()->flash('message', "You are Login successful.");
                redirect('inicio');
        }else{
            session()->flash('error', 'email and password are wrong.');
        }

        // redirect('inicio');
    }

}
