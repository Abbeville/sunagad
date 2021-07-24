<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        // $permissions = \Spatie\Permission\Models\Permission::all();
        $adminRole = \Spatie\Permission\Models\Role::create(['name' => 'admin']);
        // $adminRole->syncPermissions($permissions);
        $userRole = \Spatie\Permission\Models\Role::create(['name' => 'user']);
        // $studentRole->givePermissionTo('view-company');
        // $excoRole->givePermissionTo('view-companies');
    }
}
