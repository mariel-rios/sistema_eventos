<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertamos dos usuarios
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin.eventos@mre.gob.bo',
            'password' => Hash::make('admin')
        ]);
        //al usuario $admin asignamos el rol admin
        $admin->assignRole('admin');

        $admin = User::create([
            'name' => 'registrador',
            'email' => 'registrador.eventos@mre.gob.bo',
            'password' => Hash::make('admin')
        ]);
        $admin->assignRole('registrador');
    }
}
