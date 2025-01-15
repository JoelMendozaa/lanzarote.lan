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


/* 1. Crear una ruta:
    - Defina una nueva ruta en el archivo routes/web.php.
    - La ruta debe aceptar una solicitud POST y apuntar a un método en un controlador.
    - El punto final de la ruta será /procesar-datos.

*/

Route::get('/formulario', function () { 

    return view('formulario');

});




Route::post('/procesar-datos', [DatosController::class, 'procesar']);

Route::get('/procesar-datos' , [DatosController::class, 'form_procesar']);

/* 2. Crear un controlador:
    - Genera un controlador llamado DatosControllerusando el comando Artisan.
    - Defina un método llamado procesardentro del controlador.
    - Asegúrese de enlazar la ruta /procesar-datoscon este método.
*/





/* TAREA 2 */

Route::get('/alta-libro-tolkien' , [LibroController::class, 'alta_libro']);
Route::get('/mostrar-libro-tolkien/{id}' , [LibroController::class, 'mostrar_libro']);


