<?php

namespace Database\Seeders;

use App\Models\Prerequisito;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PrerequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('prerequisitos')->delete();
        $json = File::get(__DIR__ . './export/prerequisitos.json');
        $data = json_decode($json);
        foreach ($data as $item) {
            Prerequisito::create(array(
                "materia_id" => $item->idmaterias,
                "prerequisito" => $item->preRequisito,
            ));
        }
    }
}