<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\DetalleCurso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
  
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        $curso = Curso::create($request->all());

        //Detalle Curso 
        $curso_id = $request->curso_id;
        $fecha = $request->fecha;
        $hora_inicio = $request->hora_inicio;
        $hora_fin = $request->hora_fin;

        $count = 0;
        while($count < count($curso_id)){
            $details = new DetalleCurso();
            $details->curso_id = $curso->id;
            $details->fecha = $fecha[$count];
            $details->hora_inicio = $hora_inicio[$count];
            $details->hora_fin = $hora_fin[$count];
            $details->save();
            $count = $count+1;
        } 


        return response()->json("Agregado");
    }

    
    public function show(Curso $curso)
    {
        //
    }

  
    public function edit(Curso $curso)
    {
        //
    }

    
    public function update(Request $request, Curso $curso)
    {
        //
    }

  
    public function destroy(Curso $curso)
    {
        //
    }
}
