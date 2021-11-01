<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index(Request $request){
        return view ('formBootstrap');
    }
    public function guardar (Request $request){
        $request->validate([//validamos los campos
            'titulo' => 'required',
            'fecha' => 'required | date',
            'codigo' => 'required',
            'semestre' => 'required',

        ]);
        $formConvocatoria = new Form;
        $formConvocatoria->nombre = $request->nombre;
        $formConvocatoria->fecha = $request->fecha;
        $formConvocatoria->codigo = $request->codigo;
        $formConvocatoria->semestre = $request->semestre;

        $formBootstrap->save();//guardar los datos en la base de datos
       // return back()->('success', 'formulario validado exitosamente');
    }
}
