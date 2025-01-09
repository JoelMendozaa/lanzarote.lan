<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Playas;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba/', function () {
    return view('prueba');
});


// ----------------------------------------

/*Route::get('/playas/', function () {
    return view('playa', compact('id', 'playa'));
});*/


Route::get('/playas', [Playas::class, 'playas_de_arena']);


Route::get('/login/', function () {
    return view('login');
})->name('login');



// -----------------------------------------

// Ejercicio 1 Ruta Basica:
Route::get('/' , function () { 
    return 'welcome';
});

// Ejercicio 1 Rutas con parámetros:
Route::get('/usuario/{id}', function ($id) {
    return 'ID de Usuario: ' . $id;
});

// Ejercicio 2 
Route::get('/contacto/', function () {

    $urlContacto = route('contacto');

    return view('contacto', compact('urlContacto'));

})->name('contacto');

// Ejercicio 3 Agrupación de rutas:

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/usuarios', function () {
        return view('usuario');
    });
    Route::get('/admin/configuracion', function () {
        return view('configuracion');
    });
});