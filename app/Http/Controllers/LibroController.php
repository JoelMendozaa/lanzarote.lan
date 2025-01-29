<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{

    public function index()
    {
        // Obtenemos los libros paginados, 5 por página
        $libros = Libro::paginate(5); // 5 libros por página
    
        // Pasamos los generos y editoriales a la vista
        $GENEROS = Libro::GENEROS;
        $EDITORIALES = Libro::EDITORIALES;
    
        // Retornamos la vista con los libros, generos y editoriales
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

    public function alta_libro(Request $request){
        // Crear una nueva instancia del modelo Libro
        $libro = new Libro();
    
        // Asignar los valores del formulario a las propiedades del modelo
        $libro->nombre = $request->input('nombre');         // Asignar el nombre del libro
        $libro->autor = $request->input('autor');           // Asignar el autor del libro
        $libro->editorial = $request->input('editorial');   // Asignar la editorial del libro
        $libro->anioPublicacion = $request->input('anioPublicacion');  // Asignar el año de publicación
        $libro->genero = $request->input('genero');         // Asignar el género del libro (sigla)
        $libro->descripcion = $request->input('descripcion');  // Asignar la descripción del libro
    
        // Guardar el libro en la base de datos
        $libro->save();
    
        // Redirigir al listado de libros con un mensaje de éxito
        return redirect()->route('libros.index')->with('success', 'Libro creado con éxito');
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




// Actualizar libro (recibe el formulario de edición y lo actualiza)
    public function actualizar_libro(Request $request, $id)
    {
        $libro = Libro::find($id);
    
        if (!$libro) {
            return redirect()->route('libros.index')->with('error', 'El libro no fue encontrado');
        }
    
        // Validar los datos antes de actualizar (opcional)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'anioPublicacion' => 'required|integer|min:1000|max:9999',
            'genero' => 'required|string|max:2',
            'descripcion' => 'required|string'
        ]);
    
        // Actualizar los campos del libro
        $libro->nombre = $request->input('nombre');
        $libro->autor = $request->input('autor');
        $libro->editorial = $request->input('editorial');
        $libro->anioPublicacion = $request->input('anioPublicacion');
        $libro->genero = $request->input('genero');
        $libro->descripcion = $request->input('descripcion');
    
        // Guardar los cambios
        $libro->save();
    
        // Redirigir con mensaje de éxito
        return redirect()->route('libros.index')->with('success', 'Libro actualizado con éxito');
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



  // Editar libro (cargar el formulario con los datos actuales del libro)
public function editar_libro($id)
{
    // Buscar el libro por ID
    $libro = Libro::find($id);

    // Si el libro no existe, redirigir con error
    if (!$libro) {
        return redirect()->route('libros.index')->with('error', 'El libro no fue encontrado');
    }

    // Pasar los datos del libro y las listas de generos/editoriales a la vista
    $GENEROS = Libro::GENEROS;
    $EDITORIALES = Libro::EDITORIALES;

    return view('libros.edit', [
        'libro' => $libro,
        'EDITORIALES' => $EDITORIALES,
        'GENEROS' => $GENEROS
    ]);
}


// Visualizar un libro por ID
public function visualizar_libro($id)
{
    $libro = Libro::find($id);

    if (!$libro) {
        return redirect()->route('libros.index')->with('error', 'El libro no fue encontrado');
    }

    $GENEROS = Libro::GENEROS;
    $EDITORIALES = Libro::EDITORIALES;

    return view('libros.visualizar', [
        'libro' => $libro,
        'EDITORIALES' => $EDITORIALES,
        'GENEROS' => $GENEROS
    ]);
}

}
