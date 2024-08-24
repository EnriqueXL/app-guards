<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EmployeController;

use App\Models\Employe;
use App\Models\EmployeRole;

//Solo tiene una funcion, por lo que se puede llamar directamente en la ruta
Route::get('/home', HomeController::class)->name('home');
Route::get('/', HomeController::class);

//Controlador de empleados
Route::get('/employe', [EmployeController::class, 'index'])->name('employe.index');

//Formulario para crear un empleado 
Route::get('/employe/create', [EmployeController::class, 'create'])->name('employe.create');

//Guardar empleado
Route::post('/employe/store', [EmployeController::class, 'store'])->name('employe.store');

//Mostrar empleado
Route::get('/employe/get/{id}', [EmployeController::class, 'show'])->name('employe.show');

//Formulario para editar empleado
Route::get('/employe/edit/{id}', [EmployeController::class, 'edit'])->name('employe.edit');

//Actualizar empleado
Route::post('/employe/update/{id}', [EmployeController::class, 'update'])->name('employe.update');

//Eliminar empleado
Route::delete('/employe/destroy/{id}', [EmployeController::class, 'destroy'])->name('employe.destroy');


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
