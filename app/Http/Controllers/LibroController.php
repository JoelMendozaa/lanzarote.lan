<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{

    public function index()
    {
        $libros = Libro::all(); // Obtén todos los libros
        return view('libros.index', compact('libros')); // Cambiado para apuntar a 'libros/index.blade.php'
    }
    

    public function create(){
        return view('libros.create'); // Cambiado para apuntar a 'libros/create.blade.php'
        }



    // Alta de un libro con datos predefinidos
    public function alta_libro(){
        $libro = new Libro();

        $libro->nombre = 'El señor de los anillos';
        $libro->autor = 'Tolkien';
        $libro->editorial = 'Anaya';
        $libro->anioPublicacion = '26 marzo 1998';
        $libro->genero = 'fantasia y ficción';
        $libro->descripcion = 'Enanos y orcos';

        $libro->save();

        return response()->json(['message' => 'Libro creado exitosamente', 'libro' => $libro]);
    }




    // Mostrar un libro por ID
    public function mostrar_libro($id){
        $libro = Libro::find($id);

        if ($libro) {
            return "{$libro->nombre} - {$libro->autor}";
        } else {
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }
    }





    // Listar todos los libros
    public function mostrar_todos(){
        $libros = Libro::all();
        return response()->json($libros);
    }





    // Actualizar un libro
    public function actualizar_libro(Request $request, $id){
        $libro = Libro::find($id);

        if ($libro) {
            $libro->nombre = $request->input('nombre', $libro->nombre);
            $libro->autor = $request->input('autor', $libro->autor);
            $libro->editorial = $request->input('editorial', $libro->editorial);
            $libro->anioPublicacion = $request->input('anioPublicacion', $libro->anioPublicacion);
            $libro->genero = $request->input('genero', $libro->genero);
            $libro->descripcion = $request->input('descripcion', $libro->descripcion);

            $libro->save();

            return response()->json(['message' => 'Libro actualizado exitosamente', 'libro' => $libro]);
        } else {
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }
    }




    // Eliminar un libro
    public function eliminar_libro($id){
        $libro = Libro::find($id);

        if ($libro) {
            $libro->delete();
            return response()->json(['message' => 'Libro eliminado exitosamente']);
        } else {
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }
    }
}
