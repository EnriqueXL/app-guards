<?php
// Control de empleados por API

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

//Obtener lista de empleados
Route::get('/employe', [EmployeController::class, 'index']);

//Mostrar empleado
Route::get('/employe/get/{id}', [EmployeController::class, 'show']);

//Crear un nuevo empleado
Route::post('/employe/create', [EmployeController::class, 'store']);

//Editar un empleado
Route::put('/employe/edit/{id}', [EmployeController::class, 'update']);

//Eliminar un empleado
Route::delete('/employe/delete/{id}', [EmployeController::class, 'delete']);

//Rutas para el controlador de empleados
Route::apiResource('employe', EmployeController::class);

//Rutas para el controlador de empleados
Route::apiResource('employe', EmployeController::class);
?>