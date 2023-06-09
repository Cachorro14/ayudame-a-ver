<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name,$email,$password,$confirmPass;

    protected $rules=[
        'name' => 'required|min:4|max:255',
        'email' => 'required|unique:users|email',
        'password' => 'required|min:6',
        'confirmPass' => 'required|same:password',
    ];
    protected $validationAttributes = [
        'name' => 'nombre',
        'email' => 'correo electronico',
        'password' => 'contraseña',
        'confirmPass' => 'contraseña confimar',
    ];
    public function render()
    {
        return view('livewire.register');
    }
    public function saveUser()
    {
        $validatedData = $this->validate();
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
