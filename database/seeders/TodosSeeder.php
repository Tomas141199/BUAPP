<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $userAdmin = User::create([
            'name' => 'admin',
            'email' => 'correo3@correo.com',
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            'matricula' => '12345678',
        ]);
        $user1 = User::create([
            'name' => 'tomas',
            'email' => 'correo4@correo.com',
            'password' => Hash::make('tomas'),
            'fullacces' => 'no',
            'matricula' => '1233123',
        ]);
    }
}