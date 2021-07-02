<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TurnosSeeder::class);
        $this->call(HorasSeeder::class);
        $this->call(DiasSeeder::class);
        $this->call(AmbientesSeeder::class);
        $this->call(SemestreSeeder::class);
        $this->call(CursosSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
