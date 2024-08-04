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

        $user = new User();
        $user->name = 'test_user2025';
        $user->email = 'test_2025@gmail.com';
        $user->password = bcrypt('test123');

        $user->save();

    }
}
