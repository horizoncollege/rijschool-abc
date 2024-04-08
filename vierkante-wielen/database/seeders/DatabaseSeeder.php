<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Rijinstructeur']);
        $role3 = Role::create(['name' => 'Leerling']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role1->syncPermissions($permissions);

        $user1->assignRole([$role1->id]);
        $user2->assignRole([$role1->id]);
        $user3->assignRole([$role1->id]);
    }
}