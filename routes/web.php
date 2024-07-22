<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EmployeController;

//Solo tiene una funcion, por lo que se puede llamar directamente en la ruta
Route::get('/home', HomeController::class);
Route::get('/', HomeController::class);

//Controlador de empleados
Route::get('/employe', [EmployeController::class, 'index']);

//Mostrar empleado
Route::get('/employe/get/{id}', [EmployeController::class, 'show']);

//Nuevo empleado
Route::get('/employe/create', [EmployeController::class, 'create']);

//Editar empleado
Route::get('/employe/edit/{id}/{area}', [EmployeController::class, 'edit']);

//Eliminar empleado
Route::get('/employe/delete/{id}', [EmployeController::class, 'delete']);


//Post Controller for petition
Route::get('/post', [PostController::class, 'index']);

