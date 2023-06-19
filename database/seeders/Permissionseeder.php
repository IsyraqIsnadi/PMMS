<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class Permissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //reset catched roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //create default permissions
        Permission::create(['name' => 'list user']);
        Permission::create(['name' => 'view user profile']);
        Permission::create(['name' => 'create user profile']);
        Permission::create(['name' => 'update user profile']);
        Permission::create(['name' => 'delete user profile']);

        Permission::create(['name' => 'list inventory']);
        Permission::create(['name' => 'view inventory']);
        Permission::create(['name' => 'create inventory']);
        Permission::create(['name' => 'update inventory']);
        Permission::create(['name' => 'delete inventory']);

        Permission::create(['name' => 'list roster']);
        Permission::create(['name' => 'view roster']);
        Permission::create(['name' => 'create roster']);
        Permission::create(['name' => 'update roster']);
        Permission::create(['name' => 'delete roster']);

        $currentPermission = Permission::all();
        $userRole = Role::create(['name' => 'Cashier']);
        $userRole->givePermissionTo($currentPermission);

        Permission::create(['name' => 'list payment']);
        Permission::create(['name' => 'view payment']);
        Permission::create(['name' => 'create payment']);
        Permission::create(['name' => 'update payment']);
        Permission::create(['name' => 'delete payment']);

        Permission::create(['name' => 'list report']);
        Permission::create(['name' => 'view report']);
        Permission::create(['name' => 'create report']);
        Permission::create(['name' => 'update report']);
        Permission::create(['name' => 'delete report']);

        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole ->givePermissionTo($allPermissions);

        $PetakomCommitte = Role::create(['name' => 'Petakom Comitte']);
        $PetakomCommitte ->givePermissionTo($allPermissions);

        $users = User::get();

        foreach ($users as $user){
            if($user->email == 'admin@admin.com'){
                $user->assignRole($adminRole);
            }
            else{
                $user->assignRole($userRole);
            }
        }

    }
}
