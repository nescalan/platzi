<?php

use Illuminate\Support\Facades\Route;

/*
 *Route::get     | Consultar
 *Route::post    | Guardar
 *Route::delete  | Eliminar
 *Route::put     | Consultar
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('blog', function () {
    // Consulta a BBDD
    $posts = [
        ["id" => 1, "title" => "PHP", "slug" => "php"],
        ["id" => 2, "title" => "Laravel", "slug" => "laravel"],
    ];
    return view("blog", ["post" => $posts]);
});