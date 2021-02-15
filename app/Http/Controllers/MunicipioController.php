<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Departamento;
use Illuminate\Http\Request;

use App\Http\Requests\Municipio\StoreRequest;
use App\Http\Requests\Municipio\UpdateRequest;
use Illuminate\Http\Response;

class MunicipioController extends Controller
{
   
    public function index()
    {
        //$municipios = Municipio::get();
        //Obteniendo relacion con departamento
        $municipio= Municipio::with('departamento')->whereRaw("municipios.estado = 'ACTIVO'")->get();
        return response()->json(['municipios' => $municipio]);
     
    }

    
    public function create()
    {
        //
    }

    //Select departamentos
    public function cargar_departamentos(){

        $departamentos = Departamento::get();
        return response()->json(['departamentos'=>$departamentos]);

    }


    public function store(StoreRequest $request)
    {
        $municipio = new Municipio();

        $municipio->create($request->all());
        return response()->json(['success' => 'success'], 200) ->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);;
    }

   
    public function show(Municipio $municipio)
    {
        return $municipio;
    }

 
    public function edit($id)
    {
        $municipio = Municipio::find($id);
        return response()->json($municipio);
    }

 
    public function update(UpdateRequest $request, $id)
    {
        $municipio = Municipio::find($id);

        
        $municipio->update($request->all());

        return response()->json('Municipio actualizado');
    }

 
    public function desactivar($id)
    {
        $municipio = Municipio::find($id);
      
        if ($municipio->estado =='ACTIVO') {
            $municipio->update(['estado'=>'DESACTIVADO']);
            return response()->json('Municipio actualizado');
        }

        else{
            $municipio->update(['estado'=>'ACTIVO']);
            return response()->json('Municipio actualizado');
        }
    }
}
