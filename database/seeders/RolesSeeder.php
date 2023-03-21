<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->guard_name = 'administrator';
        $role->save();
        //===================
        $role = new Role();
        $role->name = 'user';
        $role->guard_name = 'usuario';
        $role->save();
    }

}
