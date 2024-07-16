<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/home/createGuard', function () {
    return view('createGuard');
});


//Formularios con parametros variables
Route::get('/formulario/{post}', function ($post) {
    return "form post: $post";
});

//Formularios con parametros variables
Route::get('/formulario/{id}/{category}', function ($id, $guard) {
    return "form id: $id, category: $guard";
});


// Route::get('/formulario/{id}/{category}/{coments?}', function ($id, $category, $coments = null) {
 
//     if ($coments) {

//         return "form id: $id, category: $category, comments: $coments";
//     }
//     return "form id: $id, category: $category";
   
// });
