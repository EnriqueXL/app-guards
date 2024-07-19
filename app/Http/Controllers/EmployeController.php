<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    //Obtener lista de empleados
    public function index()
    {
        return 'Inicio de empleados';
    }

    public function show($id)
    {
        return 'Mostrar empleado con id: ' . $id;
    }

    //Crear un nuevo empleado
    public function create()
    {
        return 'Crear un nuevo empleado';
    }

    //Editar un empleado
    public function edit($id)
    {
        return 'Editar un empleado con id: ' . $id;
    }

    //Eliminar un empleado
    public function delete($id)
    {
        return 'Eliminar un empleado con id: ' . $id;
    }
}
