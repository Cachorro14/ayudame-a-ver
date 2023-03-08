<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name,$email,$password,$confirmPass;
    public function render()
    {
        return view('livewire.register');
    }
    public function saveUser()
    {
        $validatedData = $this->validate(
            [
                'name' => 'required|min:4|max:255',
                'email' => 'required|unique:users|email',
                'password' => 'required|min:6',
                'confirmPass' => 'same:password',
            ],
            [
                'name.required' => 'Necesita agregar el nombre para poder crear el usuario',
                'name.min' => 'El nombre debe contener al menos 4 letras',
                'name.max' => 'El nombre solo puede contener 255 letras',

                'email.required' => 'Necesita agregar el correo electronico para poder crear el usuario',
                'email.unique' => 'Ya se registrado ese correo actualmente',
                'email.email' => 'El formato de correo electronico no es válido ',

                'password.required' => 'Necesita agregar la contraseña para poder crear el usuario',
                'passwordConfirm.same' => 'Las contraseñas no coinciden',

            ]
        );
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();
        $user->roles()->sync(2);
        redirect('login');


        
        // session()->flash('error', 'email and password are wrong.');

        // redirect('inicio');
    }
    
}
