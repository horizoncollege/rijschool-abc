<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{

    /**
     * List of applications to add.
     */

    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'product-list',
        'product-create',
        'product-edit',
        'product-delete',
        'admin-dashboard-view',
        'admin-dashboard-create',
        'admin-dashboard-edit',
        'admin-dashboard-delete',
    ];


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create admin User and assign the role to him.
        $user1 = User::create([
            'name' => 'Rijschool_admin',
            'email' => 'vierkantewielen@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user2 = User::create([
            'name' => 'Tyrone',
            'email' => 'Tyrone@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user3 = User::create([
            'name' => 'Tim',
            'email' => 'Tim.Abbing@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        // Define different sets of permissions for each role
        $adminPermissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'admin-dashboard-view',
            'admin-dashboard-create',
            'admin-dashboard-edit',
            'admin-dashboard-delete',
        ];

        $instructorPermissions = [
            'product-list',
            'product-edit',
            'admin-dashboard-view',
        ];

        $studentPermissions = [
            'product-list',
            'admin-dashboard-view',
        ];

        // Create roles
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Rijinstructeur']);
        $role3 = Role::create(['name' => 'Leerling']);

        // Assign permissions to roles
        foreach ($adminPermissions as $permission) {
            $role1->givePermissionTo($permission);
        }

        foreach ($instructorPermissions as $permission) {
            $role2->givePermissionTo($permission);
        }

        foreach ($studentPermissions as $permission) {
            $role3->givePermissionTo($permission);
        }

        // Assign roles to users
        $user1->assignRole([$role1->id]);
        $user2->assignRole([$role2->id]);
        $user3->assignRole([$role3->id]);
    }
}
