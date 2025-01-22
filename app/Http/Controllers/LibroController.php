<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{

    public function index()
    {
        $libros = Libro::all(); // Obtén todos los libros
        $GENEROS = Libro:: GENEROS;
        $EDITORIALES = Libro::EDITORIALES;

        return view('libros.index', [
            'libros' => $libros,
            'EDITORIALES' => $EDITORIALES,
            'GENEROS' => $GENEROS,
            ]);
    }
    

    public function create(){

        $GENEROS = Libro:: GENEROS;
        $EDITORIALES = Libro::EDITORIALES;

        return view('libros.create', [
            'EDITORIALES' => $EDITORIALES,
            'GENEROS' => $GENEROS,
        ]); // Cambiado para apuntar a 'libros/create.blade.php'
    }

    public function alta_libro(){
        $libro = new Libro();
    
        $libro->nombre = 'El señor de los anillos';
        $libro->autor = 'Tolkien';
        $libro->editorial = 'Anaya';
        $libro->anioPublicacion = '1998';
        $libro->genero = 'Fantasía';
        $libro->descripcion = 'Enanos y orcos';
    
        $libro->save();
        return redirect('/libros.mostar_libro')->with('success', 'Libro creado con éxito');

    }

  



    // Mostrar un libro por ID
    public function mostrar_libro($id){
        $libro = Libro::find($id);

        $GENEROS = Libro:: GENEROS;
        $EDITORIALES = Libro::EDITORIALES;

        return view('libros.index', [
            'EDITORIALES' => $EDITORIALES,
            'GENEROS' => $GENEROS,
            ]);
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
        $libro->delete();

      return redirect()->route('libros.index')
        ->with('success','El libro se ha eliminado correctamente');
    }


    public function listado()
    {

        $libros = Libro::all();

        $GENEROS = Libro::GENEROS;
        $EDITORIALES = Libro::EDITORIALES;


        return view('libros.libro',compact('libros','GENEROS', 'EDITORIALES'));

    }
}
