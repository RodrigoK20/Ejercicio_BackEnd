<?php

namespace App\Http\Controllers;

use App\Models\TipoCosto;
use Illuminate\Http\Request;

class TipoCostoController extends Controller
{
 
    public function index()
    {
        return TipoCosto::get();
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }


    public function show(TipoCosto $tipoCosto)
    {
        //
    }

   
    public function edit(TipoCosto $tipoCosto)
    {
        //
    }

  
    public function update(Request $request, TipoCosto $tipoCosto)
    {
        //
    }

   
    public function destroy(TipoCosto $tipoCosto)
    {
        //
    }
}
