<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'nombres' => "Carlos Alberto",
            'apellidos' => "Fiallos Bejarano",
            'direccion' => "Alamos 3",
            'telefono' => "0983231499",
            'email' => "c@mail.com",
            'password' => bcrypt("fibeca0596"),
        ])->assignRole('Admin');
    }
}
