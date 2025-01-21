<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Playas;

use App\Http\Controllers\DatosController;

use App\Http\Controllers\LibroController;

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


// -----------------------------------------

// Manejo de Rutas, Controladores y Objeto Request en Laravel


Route::get('/formulario', function () { 

    return view('formulario');

});




Route::post('/procesar-datos', [DatosController::class, 'procesar']);

Route::get('/procesar-datos' , [DatosController::class, 'form_procesar']);






/* TAREA 2 */

// Rutas para CRUD de libros
Route::get('/libros', [LibroController::class, 'index'])->name('libros.index'); // Para mostrar el listado
Route::get('/libros/create', [LibroController::class, 'create']); // Para mostrar el formulario de creación
Route::post('/libros', [LibroController::class, 'alta_libro']); // Crear libro
Route::get('/mostrar-libro/{id}', [LibroController::class, 'mostrar_libro']); // Mostrar libro por ID
Route::get('/mostrar-todos', [LibroController::class, 'mostrar_todos']); // Listar todos los libros
Route::put('/actualizar-libro/{id}', [LibroController::class, 'actualizar_libro']); // Actualizar libro
Route::delete('/libros/{libro}', [LibroController::class, 'eliminar_libro'])->name('libros.delete'); // Eliminar libro

