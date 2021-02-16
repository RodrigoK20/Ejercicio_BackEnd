<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nombre','descripcion','ubicacion','fecha_inicio_date','fecha_fin_date','horas_curso',
        'costo', 'numero_participantes', 'cantidad_evaluaciones','contrato_numero', 'orden_compra',
        'compra_bolsa','item','programa', 'municipio_id','tipo_costo_id','modalidad_id' ,'instructor_id',
    ];


    //Configuracion relaciones (ONE TO MANY INVERSE - SINGULAR)
    public function tipo_costo(){
        return $this->belongsTo(TipoCosto::class);
    }

    //Configuracion relaciones (ONE TO MANY INVERSE - SINGULAR)
    public function modalidad(){
        return $this->belongsTo(Modalidad::class);
    }

    //Configuracion relaciones (ONE TO MANY INVERSE - SINGULAR)
    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }

   //Config relaciones (ONE TO MANY - Plural)
      public function detalle_cursos(){
        return $this->hasMany(DetalleCurso::class);
    }

}
