<?php

namespace Database\Seeders;
use App\Models\Turnos;
use Illuminate\Database\Seeder;

class TurnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        Turnos::create([
            'name' => 'Mañana'
        ]);
        Turnos::create([
            'name' => 'Tarde'
        ]);
    }
}
