<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\DetalleCurso;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CursoController extends Controller
{
  
    public function index()
    {
        return Curso::get();
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {

        $curso = new Curso();
        //dd($request);
        $curso->create($request->all())->id;;
        //Ultimo id 
        $curso_last_id = Curso::orderBy('id', 'desc')->take(1)->first();
        $lastId = $curso_last_id->id;
        
        //Detalle Curso 
        $curso_id = $lastId;
        //dd($lastId);
        $fecha = $request->fecha;
        $hora_inicio = $request->hora_inicio;
        $hora_fin = $request->hora_fin;

//       dd($lastId);
        $details = new DetalleCurso();
        $details->curso_id = $curso_id;
        $details->fecha = $fecha;
        $details->hora_inicio = $hora_inicio;
        $details->hora_fin = $hora_fin;
        $details->save();
      

        return response()->json(['success' => 'success'], 200) ->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);;

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
