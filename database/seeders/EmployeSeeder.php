<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employe;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // $Employe = new Employe();
        // $Employe->nombre = 'Juan carlos';
        // $Employe->apellido_paterno = 'Perez';
        // $Employe->apellido_materno = 'Gomez';
        // $Employe->activo = true;
        // $Employe->email = 'test@test.com';
        // $Employe->save();

        //fabrica de registros de empleados (50 registros), comentado ya que solo es una linea, se maneja en el seeder principal
        // Employe::factory(20)->create();
    }
}
