<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Carlos Dueñas';
        $user->email = 'carlos@prueba.com'; 
        $user->email_verified_at = now();
        $user->password = Hash::make('qwerty');
        $user->save();
        $user->roles()->sync(1);
    }
}
