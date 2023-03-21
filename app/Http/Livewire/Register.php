<?php

namespace App\Http\Livewire;

use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name,$email,$password,$confirmPass,$name_rest,$address;
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
                'name_rest' => 'required',
                'address' => 'required|min:5|max:255',
                'password' => 'required|min:6',
                'confirmPass' => 'same:password',
            ],
            [
                'name.required' => 'Necesita agregar el nombre para poder registrase',
                'name.min' => 'El nombre debe contener al menos 4 letras',
                'name.max' => 'El nombre solo puede contener 255 letras',
                
                'name_rest.required' => 'Necesita agregar el nombre del establecimiento para poder registrase',
                
                'address.required' => 'Necesita agregar la dirección del establecimiento para poder registrase',
                'address.min' => 'La dirección es demasiado pequeña',
                'address.max' => 'La dirección es demasiado grande',
                
                'email.required' => 'Necesita agregar el correo electronico para poder registrase',
                'email.unique' => 'Ya se registrado ese correo actualmente',
                'email.email' => 'El formato de correo electronico no es válido ',

                'password.required' => 'Necesita agregar la contraseña para poder registrase',
                'passwordConfirm.same' => 'Las contraseñas no coinciden',

            ]
        );
        $user = new User();
        $rest = new Restaurant();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();
        $user->roles()->sync(2);
        $user->restaurant()->create([
            'nombre_lugar' => $validatedData['name_rest'],
            'domicilio' => $validatedData['address'],
        ]);
        redirect('login');


        
        // session()->flash('error', 'email and password are wrong.');

        // redirect('inicio');
    }
    
}
