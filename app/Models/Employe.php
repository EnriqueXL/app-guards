<?php

namespace App\Models;

// Mutador
Use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected function nombre(): Attribute
    {
        //Mutador
        // Capitaliza la primera letra de cada palabra y convierte el resto en minúsculas
        return Attribute::make(
            set: fn($value) => ucwords(strtolower($value)),
            //Accesor (Recupera el valor de la base de datos y lo modifica antes de devolverlo).
            // get: fn($value) => ucwords(strtolower($value))
            
        );
    }

    public function getFullName()
    {
        return $this->nombre . ' ' . $this->apellido_paterno . ' ' . $this->apellido_materno;
    }

    public function getStatus()
    {
        return $this->activo == 1 ? 'Activo' : 'Inactivo';
    }

    public function roleEmploye()
    {
        return $this->belongsTo(EmployeRole::class, 'id_rol');
    }

    //casteo de atributos, para que se muestre en el formato deseado y no por defecto de eloquent (string).
    protected $casts = [
        'fecha_contratacion' => 'datetime:Y-m-d',
    ];

    protected $table = 'empleados';


}
