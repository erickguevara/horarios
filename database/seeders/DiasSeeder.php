<?php

namespace Database\Seeders;
use App\Models\Dias;
use Illuminate\Database\Seeder;

class DiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dias::create([
            'name' => 'Lunes'
        ]);
        Dias::create([
            'name' => 'Marte'
        ]);
        Dias::create([
            'name' => 'Miercoles'
        ]);
        Dias::create([
            'name' => 'Jueves'
        ]);
        Dias::create([
            'name' => 'Viernes'
        ]);
        Dias::create([
            'name' => 'Sabado'
        ]);
    }
}
