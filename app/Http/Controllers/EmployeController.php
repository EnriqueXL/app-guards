<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    //Obtener lista de empleados
    public function index()
    {
        return 'Inicio para los guardias';
    }

    public function show($id)
    {
        return 'Mostrar empleado con id: ' . $id;
    }

    //Crear un nuevo empleado
    public function create()
    {
        return view('emplye.create-employe');
    }

    //Editar un empleado
    public function edit($id, $area)
    {
        // return view('employe.edit-employe', [
        //     'id' => $id
        // ]);  
        return view('employe.edit-employe', compact('id', 'area')); 
    }

    //Eliminar un empleado
    public function delete($id)
    {
        return 'Eliminar un empleado con id: ' . $id;
    }
}
