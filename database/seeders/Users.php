<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creación de usuarios de prueba
        $user = new User();
        $user->name = 'test_user2024';
        $user->email = 'test_2024@gmail.com';
        $user->password = bcrypt('test123');

        $user->save();

        //usuario real

        $user = new User();
        $user->name = 'Juan carlos';
        $user->email = 'juanCarlos@guards.com';
        $user->password = bcrypt('test123');

        $user->save();

         //fabrica de registros de usuarios (genera 5 registros de prueba)
         User::factory(5)->create();

    }
}
