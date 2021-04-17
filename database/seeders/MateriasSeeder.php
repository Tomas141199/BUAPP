<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->delete();
        $json = File::get(__DIR__ . './export/materias.json');
        $data = json_decode($json);
        foreach ($data as $item) {

            Materia::create(array(
                "materia_id" => $item->idmaterias,
                "nombre" => $item->Nombre,
                "semestre" => $item->Semestre,
                "creditos" => $item->Creditos,
                "area" => $item->Area,
            ));
        }
    }
}