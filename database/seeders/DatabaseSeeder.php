<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employe;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //llamada a los seeders
        $this->call([

            // EmployeSeeder::class,
            // EmployeRolSeeder::class,
            // Users::class,

        ]);

        //fabrica de registros de empleados
        //se removio del seeder de EmployeSeeder ya que solo es una linea
        // Employe::factory(12)->create();

        //fabrica de registros de usuarios (10  registros)
        // User::factory(5)->create();
    }
}
