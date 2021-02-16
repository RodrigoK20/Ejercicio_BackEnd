<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'nombre', 'telefono',
    ];

//Config relaciones (ONE TO MANY - Plural)
     public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
