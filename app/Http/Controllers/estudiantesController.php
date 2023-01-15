<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;

use Illuminate\Http\Request;

class estudiantesController extends Controller
{
//listar la lista de estudiantes
    public function index()
    {
        $estudinates = Estudiante::all();
        return response()->json([
            'estudiantes' => $estudinates,
        ]);
    }

    //Permite validar el formato por input e insertar el registro 
    public function store(Request $request)
    {
        $validacion = [
            'nombre' => 'required|string',
            'apellidoPaterno' => 'required|string',
            'apellidoMaterno' => 'required|string',
            'edad' => 'required|integer',
            'fechaDeNacimiento' => 'required|date',
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'estado' => 'required|string',
            'codigoPostal' => 'required|integer',
            'genero' => 'required|string',
            'numeroTelefonico' => 'required|string',
            'correo' => 'required|string',
        ];

        $this->validate($request, $validacion);

        $estudinates = Estudiante::create($request->all());

        
        return response()->json([
            'mensaje'=> ['Estudiante ingresado correctamente']
        ]);
    }
    
    //Actualizar el registro mediante el id
    public function update(Request $request, $id)
    {
      


        try {
            $estudiantes = Estudiante::findOrFail($id)
            ->update($request->all());

            $mensaje = "Actualizado correctamente";
           
        } catch (\Throwable $th) {
            $mensaje = "No se encontro el estudiante";
        }
       
        return response()->json([
            'mensaje'=> [$mensaje]
        ]);
       
    }

     //Eliminare el registro mediante el id
    public function destroy($id)
    {

        try {
            $estudiantes = Estudiante::findOrFail($id);
            if ($estudiantes) {
                $estudiantes = Estudiante::destroy($id);

                $mensaje = "Eliminado correctamente";
            }
           
        } catch (\Throwable $th) {
            $mensaje = "No se encontro el estudiante";
        }
       
        return response()->json([
            'mensaje'=> [$mensaje]
        ]);
    }
}
