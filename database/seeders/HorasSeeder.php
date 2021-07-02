<?php

namespace Database\Seeders;
use App\Models\HorasModel;
use Illuminate\Database\Seeder;

class HorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HorasModel::create([
            'name' => '7:00 - 8:00',
            'id_turno'=>1
        ]);
        HorasModel::create([
            'name' => '8:00 - 9:00',
            'id_turno'=>1
        ]);
        HorasModel::create([
            'name' => '9:00 - 10:00',
            'id_turno'=>1
        ]);
        HorasModel::create([
            'name' => '10:00 - 11:00',
            'id_turno'=>1
        ]);
        HorasModel::create([
            'name' => '11:00 - 12:00',
            'id_turno'=>1
        ]);
        HorasModel::create([
            'name' => '12:00 - 13:00',
            'id_turno'=>2
        ]);
        HorasModel::create([
            'name' => '13:00 - 14:00',
            'id_turno'=>2
        ]);
        HorasModel::create([
            'name' => '14:00 - 15:00',
            'id_turno'=>2
        ]);
        HorasModel::create([
            'name' => '15:00 - 16:00',
            'id_turno'=>2
        ]);
        HorasModel::create([
            'name' => '16:00 - 17:00',
            'id_turno'=>2
        ]);
        HorasModel::create([
            'name' => '17:00 - 18:00',
            'id_turno'=>2
        ]);   
   
    }
}
