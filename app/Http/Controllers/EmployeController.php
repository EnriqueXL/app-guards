<?php

namespace App\Http\Controllers;

//Modelos
use App\Models\Employe;

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

    //Llamada a la vista para crear un empleado
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

    //Solicitudes POST para crear un empleado
    public function store(Request $request)
    {
        $fecha = date('Y-m-d H:i:s');

        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido_paterno' => 'required|string|max:50',
            'apellido_materno' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'telefono' => 'required|string|max:10',
            'direccion' => 'required|string|max:255',
            'id_rol' => 'required|integer',
           
        ]);

        $employe = new Employe();
        $employe->nombre = $request->input('nombre');
        $employe->apellido_paterno = $request->input('apellido_paterno');
        $employe->apellido_materno = $request->input('apellido_materno');
        $employe->email = $request->input('email');
        $employe->telefono = $request->input('telefono');
        $employe->direccion = $request->input('direccion');
        $employe->id_rol = $request->input('id_rol');
        $employe->fecha_contratacion = $request->input($fecha);

        $employe->save();

        return response()->json($employe, 201);
    }
}
