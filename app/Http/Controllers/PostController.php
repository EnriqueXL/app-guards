<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    // llamando a la vista home
    public function getGuards(){
        return "Lista de guardias activos";
    }   
}
