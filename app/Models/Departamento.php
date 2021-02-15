<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = [
        'nombre','estado',
    ];

      //Config relaciones (ONE TO MANY - Plural)
      public function municipios(){
        return $this->hasMany(Municipio::class);
    }
}
