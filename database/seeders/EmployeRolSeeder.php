<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployeRole;

class EmployeRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creaciión de roles para empleados
        $role = new EmployeRole();
        $role->nombre = 'guardia';
        // $role->description = 'Guardia de seguridad';
        $role->save();

    }
}
