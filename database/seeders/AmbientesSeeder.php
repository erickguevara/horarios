<?php

namespace Database\Seeders;
use App\Models\Ambientes;
use Illuminate\Database\Seeder;

class AmbientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Ambientes::create([
            'name' => 'Auditorio'
        ]);
         Ambientes::create([
            'name' => 'Aula 1'
        ]);
         Ambientes::create([
            'name' => 'Aula 2'
        ]);
    }
}
