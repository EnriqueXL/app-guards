<?php

namespace App\Http\Controllers;

//Modelos
use App\Models\Employe;
use App\Models\EmployeRole;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    //Obtener lista de empleados
    public function index()
    {

        // $employes = Employe::all();
        $employes = Employe::orderBy('id', 'desc')->paginate(10);

        $headers = ['Folio', 'Nombre completo', 'Estatus', 'Acciones'];

        foreach ($employes as $employe) {
            $employesInfo[] = [
                'id' => $employe->id,
                'nombre' => $employe->getFullName(),
                'estatus' => $employe->getStatus(),
                'actions' => [
                    'show' => route('employe.show', $employe->id),
                    // 'edit' => route('employe.edit', $employe->id),
                    // 'delete' => route('employe.delete', $employe->id),
                ]
            ];
        }


        return view('employe.all-employe', compact('headers', 'employesInfo', 'employes'));
    }

    public function show($id)
    {
        $employe = Employe::with('roleEmploye')->find($id);

        //encabezados
        $headers = ['Folio, Nombre', 'email', 'telefono', 'direccion', 'Perfil', 'fecha_contratacion', 'estatus'];

        $employesInfo = [
            'id' => $employe->id,
            'nombre' => $employe->nombre,
            'apellido_paterno' => $employe->apellido_paterno,
            'apellido_materno' => $employe->apellido_materno,
            'email' => $employe->email,
            'telefono' => $employe->telefono,
            'direccion' => $employe->direccion,
            'perfil' => $employe->roleEmploye->nombre,
            'fecha_contratacion' => $employe->fecha_contratacion,
            'estatus' => $employe->getStatus(),
            'foto_perfil' => $employe->foto_perfil,
        ];


        return view('employe.show-employe', compact('headers', 'employesInfo'));
    }

    //Llamada a la vista para crear un empleado
    public function create()
    {
        return view('employe.create-employe');
    }

    //Formulario para editar un empleado
    public function edit($id)
    {
        $employe = Employe::find($id);

        return view('employe.edit-employe', compact('id', 'employe'));
    }

    //Editar empleado
    public function update(Request $request, $id)
    {
  
        $employe = Employe::find($id);
        //Asignacion masiva
        if($employe->update($request->all()))
        {
            return redirect()->route('employe.index')->with('success', 'Empleado actualizado correctamente.');
        }
        else
        {
            return redirect()->route('employe.index')->with('error', 'Hubo un error al actualizar el empleado.');
        }

       
    }

    //Solicitudes para crear un empleado
    public function store(Request $request)
    {

        $fecha = date('Y-m-d H:i:s');
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido_paterno' => 'required|string|max:50',
            'apellido_materno' => 'required|string|max:50',
            'email' => 'required|email|max:50|unique:empleados,email',
            'telefono' => 'required|digits:10',
            'direccion' => 'required|string|max:255',
            'id_rol' => 'required|integer',
            'fecha_nacimiento' => 'required|date',

        ], [
            'nombre.required' => 'El campo nombre es requerido',
            'apellido_paterno.required' => 'El campo apellido paterno es requerido',
            'apellido_materno.required' => 'El campo apellido materno es requerido',
            'email.required' => 'El campo email es requerido',
            'email.unique' => 'El email ya está registrado',
            'telefono.required' => 'El campo teléfono es requerido',
            'telefono.digits' => 'El campo teléfono debe tener exactamente 10 dígitos',
            'direccion.required' => 'El campo dirección es requerido',
            'id_rol.required' => 'El campo rol es requerido',
            'fecha_nacimiento.required' => 'El campo fecha de nacimiento es requerido',
        ]);

        //Descartado
        // $request->request->add(['fecha_contratacion' => $fecha]);
        // // Crear un nuevo empleado utilizando asignación masiva
        // $employe = Employe::create($request->all());


        // Crear un nuevo empleado utilizando asignación masiva
        $employe = Employe::create([
            'nombre' => $request->input('nombre'),
            'apellido_paterno' => $request->input('apellido_paterno'),
            'apellido_materno' => $request->input('apellido_materno'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'id_rol' => $request->input('id_rol'),
            'fecha_contratacion' => $fecha,
        ]);

        if ($employe) {
            // Redirigir con mensaje de éxito
            return redirect()->route('employe.index')->with('success', 'Empleado guardado correctamente.');
        } else {
            // Redirigir con mensaje de error
            return redirect()->route('employe.index')->with('error', 'Hubo un error al guardar el empleado.');
        }
    }

    //Eliminar empleado
    public function destroy($id)
    {
        $employe = Employe::find($id);
        $employe->delete();


        return redirect()->route('employe.index')->with('success', 'Empleado eliminado correctamente.');
    }
}
