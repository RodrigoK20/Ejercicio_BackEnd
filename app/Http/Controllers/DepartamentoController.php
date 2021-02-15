<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Departamento\StoreRequest;
use App\Http\Requests\Departamento\UpdateRequest;

class DepartamentoController extends Controller
{

    public function index()
    {
        return Departamento::get();
    }


    public function create()
    {
        //
    }

 
    public function store(StoreRequest $request)
    {
        
        
        $departamento = new Departamento();
        $departamento->create($request->all());
        return response()->json(['success' => 'success'], 200) ->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);;

    }

 
    public function show(Departamento $departamento)
    {
        return $departamento;
    }


    public function edit($id)
    {
        $departamento = Departamento::find($id);
        return response()->json($departamento);
    }

 
    public function update(UpdateRequest $request, $id)
    {
        $departamento = Departamento::find($id);   
        $departamento->update($request->all());

        return response()->json('Departamento actualizado');
    }

  
    public function destroy($id)
    {
        $departamento = Departamento::find($id);
        $departamento->delete();

        return response()->json('Departamento eliminado');
 
    }

    //Cambiar estado
    public function change_status(Departamento $departamento){
        if($departamento->estado('ACTIVO')){
            $departamento->update(['estado'=>'D']);
            return redirect()->back();
        }
        else{
            $departamento->update(['estado'=>'ACTIVO']);
            return redirect()->back();
        }
    }
}
