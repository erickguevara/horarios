<?php

namespace Database\Seeders;
use App\Models\Semestre;
use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semestre::create([
            'name' => '2020 II'
        ]);
        Semestre::create([
            'name' => '2020 I'
        ]);    
    }
}
