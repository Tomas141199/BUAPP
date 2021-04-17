<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function __construct()
    {
        $this->primaryKey = 'materia_id';
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'control_materias', 'materia_id', 'alumno_id');
    }
}