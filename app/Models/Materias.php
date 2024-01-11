<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use HasFactory;
    public function Alumno(){
        return $this->belongsToMany(Alumnos::class,'alumno_id','materias_id','alumno_materia_id');
    }
}
