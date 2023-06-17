<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('alojamientos', function () {
    return "probando la pag de alojamientos";
});

Route::get('alojamientos/crear', function () {
    return "probando la pag de crear alojamientos";
});

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso , de la categoria $categoria";
    } else {
        return "Bienvenido al curso $curso";
    }
});
