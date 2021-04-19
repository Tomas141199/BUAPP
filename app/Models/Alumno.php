<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;


    // Relacion 1:1 de Alumno con usuario

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'control_materias', 'alumno_id', 'materia_id');
    }
}