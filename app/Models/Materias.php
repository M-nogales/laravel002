<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
$alumnos = Alumnos::find(1);
foreach ($alumnos->materias as $materias) {
echo $materias->pivot->created_at;
}
class Materias extends Model
{
    use HasFactory;
    public function Alumnos(){
        return $this->belongsToMany(Alumnos::class,'alumno_id','materias_id','alumno_materia_id');
    }
}
