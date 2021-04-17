<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Materia;
use App\Models\ControlMateria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //No borrar: posible emergencia
        // $userAdmin = User::create([
        //     'name' => 'admin',
        //     'email' => 'correo3@correo.com',
        //     'password' => Hash::make('admin'),
        //     'fullacces' => 'yes',
        //     'matricula' => '12345678',
        // ]);
        // $user1 = User::create([
        //     'name' => 'tomas',
        //     'email' => 'correo4@correo.com',
        //     'password' => Hash::make('tomas'),
        //     'fullacces' => 'no',
        //     'matricula' => '1233123',
        // ]);


        // $user2 = User::create([
        //     'name' => 'Gustavo',
        //     'email' => 'correo5@correo.com',
        //     'password' => Hash::make('gustavo'),
        //     'fullacces' => 'no',
        //     'matricula' => '1278965',
        // ]);

        // $user3 = User::create([
        //     'name' => 'Alejandra',
        //     'email' => 'correo6@correo.com',
        //     'password' => Hash::make('alejandra'),
        //     'fullacces' => 'no',
        //     'matricula' => '1233394',
        // ]);

        // $user4 = User::create([
        //     'name' => 'Ricardo',
        //     'email' => 'correo7@correo.com',
        //     'password' => Hash::make('ricardo'),
        //     'fullacces' => 'no',
        //     'matricula' => '1233120',
        // ]);

        // $user5 = User::create([
        //     'name' => 'Alejandro',
        //     'email' => 'correo8@correo.com',
        //     'password' => Hash::make('alejandro'),
        //     'fullacces' => 'no',
        //     'matricula' => '1233149',
        // ]);

        // $user6 = User::create([
        //     'name' => 'Monica',
        //     'email' => 'correo9@correo.com',
        //     'password' => Hash::make('monica'),
        //     'fullacces' => 'no',
        //     'matricula' => '1234963',
        // ]);

        // $user7 = User::create([
        //     'name' => 'Arturo',
        //     'email' => 'correo10@correo.com',
        //     'password' => Hash::make('arturo'),
        //     'fullacces' => 'no',
        //     'matricula' => '1230365',
        // ]);

        // $user8 = User::create([
        //     'name' => 'Meredith',
        //     'email' => 'correo11@correo.com',
        //     'password' => Hash::make('meredith'),
        //     'fullacces' => 'no',
        //     'matricula' => '1236987',
        // ]);

        // $user9 = User::create([
        //     'name' => 'Katia',
        //     'email' => 'correo12@correo.com',
        //     'password' => Hash::make('katia'),
        //     'fullacces' => 'no',
        //     'matricula' => '1233127',
        // ]);

        // $user10 = User::create([
        //     'name' => 'Paola',
        //     'email' => 'correo13@correo.com',
        //     'password' => Hash::make('paola'),
        //     'fullacces' => 'no',
        //     'matricula' => '1233365',
        // ]);

        // $user11 = User::create([
        //     'name' => 'Ramon',
        //     'email' => 'correo14@correo.com',
        //     'password' => Hash::make('ramon'),
        //     'fullacces' => 'no',
        //     'matricula' => '1233165',
        // ]);

        // $materia = Materia::create([
        //     'idmateria' => 'FGUS001',
        //     'nombre' => 'Formación Humana y Social',
        //     'semestre' => 1,
        //     'creditos' => 4,
        //     'area' => 'Tronco comun',
        // ]);


        // $materia = Materia::create([
        //     'idmateria' => 'ITIS001',
        //     'nombre' => 'Introducción a las Matemáticas',
        //     'semestre' => 1,
        //     'creditos' => 6,
        //     'area' => 'Tronco comun',
        // ]);

        // $materia = Materia::create([
        //     'idmateria' => 'ITIS002',
        //     'nombre' => 'Introducción a la Programación',
        //     'semestre' => 1,
        //     'creditos' => 6,
        //     'area' => 'Tronco comun',
        // ]);

        // $materia = Materia::create([
        //     'idmateria' => 'ITIS003',
        //     'nombre' => 'Teoría General de Sistemas y Sistemas de la Información',
        //     'semestre' => 1,
        //     'creditos' => 4,
        //     'area' => 'Tronco comun',
        // ]);

        // $materia = Materia::create([
        //     'idmateria' => 'FGUS004',
        //     'nombre' => 'Lengua ExtranjeraI',
        //     'semestre' => 1,
        //     'creditos' => 4,
        //     'area' => 'Tronco comun',
        // ]);

        // $registro = ControlMateria::create([
        //     'estado' => 'en curso',
        //     'idmateria' => 'FGUS004',
        //     'alumno_id' => 2,
        // ]);

        // $registro = ControlMateria::create([
        //     'estado' => 'en curso',
        //     'idmateria' => 'ITIS003',
        //     'alumno_id' => 2,
        // ]);

        // $registro = ControlMateria::create([
        //     'estado' => 'en curso',
        //     'idmateria' => 'ITIS002',
        //     'alumno_id' => 2,
        // ]);

        // $registro = ControlMateria::create([
        //     'estado' => 'en curso',
        //     'idmateria' => 'ITIS001',
        //     'alumno_id' => 2,
        // ]);

        // $registro = ControlMateria::create([
        //     'estado' => 'en curso',
        //     'idmateria' => 'FGUS001',
        //     'alumno_id' => 2,
        // ]);

        // $table->id();
        // $table->string('name');
        // $table->string('email')->unique();
        // $table->string('matricula')->unique();
        // $table->enum('fullacces', [['yes', 'no']])->nullable();
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');



        DB::table('users')->delete();
        $json = File::get(__DIR__ . './export/alumno.json');
        $data = json_decode($json);

        foreach ($data as $item) {
            $correo = 'correo' . $item->idAlumno . '@correo.com';
            User::create(array(
                'name' => $item->Nombre,
                'email' => $correo,
                'password' => Hash::make('hola'),
                'fullacces' => "no",
                'matricula' => $item->Matricula,
            ));
        }

        $userAdmin = User::create([
            'name' => 'admin',
            'email' => 'correoadmin@correo.com',
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            'matricula' => '12345678',
        ]);
    }
}