<?php

namespace Database\Seeders;
use App\Models\Cursos;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Cursos::create([
            'name' => 'Fisica 1'
        ]);
       Cursos::create([
            'name' => 'Bioliga General'
        ]);
       Cursos::create([
            'name' => 'Base de datos'
        ]);
    }
}
