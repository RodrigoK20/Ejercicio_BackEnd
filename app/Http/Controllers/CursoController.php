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
        $curso->create($request->all());



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
