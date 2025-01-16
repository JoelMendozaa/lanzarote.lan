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

        public function alta_libro(Request $request)
        {
            $libro = new Libro();
            $libro->nombre = $request->nombre;
            $libro->autor = $request->autor;
            $libro->editorial = $request->editorial;
            $libro->anioPublicacion = $request->anioPublicacion;  
            $libro->genero = $request->genero;                  
            $libro->descripcion = $request->descripcion;
            $libro->save();
        
            return redirect('/');  // Redirige al listado
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
