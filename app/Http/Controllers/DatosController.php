<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function procesar(Request $request){
        
        $validated = $request->validate([
            'nombre' => 'required|string',
            'edad' => 'required|integer',
        ]);

        return response()->json([
            'mensaje' => "Hola, {$validated['nombre']}. Tienes {$validated['edad']} años."
        ]);
        

    }
}*/


/* HECHO POR EL PROFE */ 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DatosController extends Controller
{
    function procesar(Request $request)
    {

        $data = [
            'name' => $request->name,
            'edad' => $request->edad,
        ];

        $rules = [
            'name' => 'required|string|max:255',
            'edad' => 'required|int',
        ];

        $validator = Validator::make($data, $rules);


        if ($validator->fails()) {
            // La validación ha fallado
            return response()->json([
                'message' => 'Los datos no son válidos',
                'errors' => $validator->errors()
            ], 400);
        }


        
        

        return "Hola, {$request->name}. Tienes {$request->edad} años.";
    }


    function form_procesar()
    {


        return view('formulario_playas');
    }
}