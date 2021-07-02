<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
        	'name' => 'Erick Guevara rojas',
        	'email' => 'eguevara@gmail.com',
        	'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        User::create([
        	'name' => 'Cristofer Guevara rojas',
        	'email' => 'ercrguro@gmail.com',
        	'password' => bcrypt('12345678')
        ])->assignRole('operador');
    }
}
