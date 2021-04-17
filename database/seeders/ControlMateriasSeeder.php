<?php

namespace Database\Seeders;

use App\Models\ControlMateria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ControlMateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('control_materias')->delete();
        $json = File::get(__DIR__ . './export/control_materias.json');
        $data = json_decode($json);
        foreach ($data as $item) {

            ControlMateria::create(array(
                "estado" => $item->estado,
                "materia_id" => $item->idmaterias,
                "alumno_id" => $item->idAlumno,
            ));
        }
    }
}