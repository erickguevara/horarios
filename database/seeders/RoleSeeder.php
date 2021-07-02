<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role1 = Role::create(['name'=>'Admin']);
		$role2 = Role::create(['name'=>'operador']);

		Permission::create(['name'=>'admin.home'])->syncRoles([$role1,$role2]);
		Permission::create(['name'=>'admin.change'])->syncRoles([$role1,$role2]);
		Permission::create(['name'=>'admin.change.create'])->assignRole($role1);
		Permission::create(['name'=>'admin.change.edit'])->assignRole($role1);
		Permission::create(['name'=>'admin.change.destroy'])->assignRole($role1);
	}
}
