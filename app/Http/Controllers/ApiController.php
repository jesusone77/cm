<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;


class ApiController extends Controller
{
    //
    function addAutor(Request $request) {
        $data = json_decode($request->getContent(), true);

        $autor = new Autor();
        $autor->name = $data['nombre'];
        $autor->email = $data['vertical'];
        if (!$autor->save()) 
        {
            return response()->json([
                'codigo' => '503 Service Unavailable',
                'descripcion' => 'fallo',
            ]);
        }        

        return response()->json([
            'codigo' => '200 OK',
            'descripcion' => 'Exito',
        ]);
        
    }

}
