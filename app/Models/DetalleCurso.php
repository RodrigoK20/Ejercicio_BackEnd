<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCurso extends Model
{
    protected $fillable = [
        'fecha','hora_inicio','fecha_fin','curso_id'
    ];

    //Configuracion relaciones (ONE TO MANY INVERSE - SINGULAR)
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
