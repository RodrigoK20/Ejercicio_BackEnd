<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = [
        'nombre','estado','departamento_id',
    ];

     //Configuracion relaciones (ONE TO MANY INVERSE - SINGULAR)
     public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
}
