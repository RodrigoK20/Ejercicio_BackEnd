<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $fillable = [
        'nombre',
    ];

       //Config relaciones (ONE TO MANY - Plural)
       public function cursos(){
        return $this->hasMany(Curso::class);
    }
    
}
