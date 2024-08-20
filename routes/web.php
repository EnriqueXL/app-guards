<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EmployeController;

use App\Models\Employe;
use App\Models\EmployeRole;

//Solo tiene una funcion, por lo que se puede llamar directamente en la ruta
Route::get('/home', HomeController::class);
Route::get('/', HomeController::class);

//Controlador de empleados
Route::get('/employe', [EmployeController::class, 'index'])->name('employe.index');

//Nuevo empleado 
Route::get('/employe/create', [EmployeController::class, 'create'])->name('employe.create');

//Mostrar empleado
Route::get('/employe/get/{id}', [EmployeController::class, 'show'])->name('employe.show');

//Editar empleado
Route::get('/employe/edit/{id}/{area}', [EmployeController::class, 'edit']);

//Eliminar empleado
Route::get('/employe/delete/{id}', [EmployeController::class, 'delete']);


//Post Controller for petition
Route::get('/post', [PostController::class, 'index']);


//pruebas
Route::get('/test', function () {
    $employes = Employe::all();

    // dd($employes->activo);
    return $employes;
    // $employes = new Employe();
    // $employes->nombre = 'jose de jsus';
    // $employes->apellido_paterno = 'perEz';
    // $employes->apellido_materno = 'lop3z';
    // $employes->email = '';
    // $employes->telefono = '1234567890';
    // $employes->direccion = 'Calle 123';
    // $employes->id_rol = 1;
    // $employes->fecha_contratacion = date('Y-m-d H:i:s');

    // $employes->save();
    // return 'Guardado';


});
