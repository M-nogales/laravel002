<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    public function Materia(){
        return $this->belongsToMany(Materias::class,'materias_id','alumno_id','alumno_materia_id');
    }
}
