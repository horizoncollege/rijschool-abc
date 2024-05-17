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
     * List of permissions to add.
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
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleInstructor = Role::create(['name' => 'Rijinstructeur']);
        $roleStudent = Role::create(['name' => 'Leerling']);

        // Assign permissions to roles
        foreach ($adminPermissions as $permission) {
            $roleAdmin->givePermissionTo($permission);
        }

        foreach ($instructorPermissions as $permission) {
            $roleInstructor->givePermissionTo($permission);
        }

        foreach ($studentPermissions as $permission) {
            $roleStudent->givePermissionTo($permission);
        }

        // Create a user with the 'Admin' role
        $admins = [
            ['name' => 'Rijschoolhouder', 'email' => 'rijschoolhouder@gmail.com', 'phone' => '0612345678', 'date_of_birth' => '3000-05-09', 'gender' => 'Rijschool', 'zip_code' => '1234 AB', 'adres' => 'Westerweg 26', 'city' => 'Limmen', 'password' => Hash::make('12345678')],
        ];

        foreach ($admins as $admin) {
            $user = User::create($admin);
            $user->assignRole($roleAdmin);
        }

        // Create users with the 'Rijinstructeur' role
        $instructors = [
            ['name' => 'Rijinstructeur 1', 'email' => 'rijinstructeur1@gmail.com', 'phone' => '0612345678', 'date_of_birth' => '2001-05-09', 'gender' => 'Man', 'zip_code' => '1234 AB', 'adres' => 'Westerweg 24', 'city' => 'Limmen', 'password' => Hash::make('12345678')],
            ['name' => 'Rijinstructeur 2', 'email' => 'rijinstructeur2@gmail.com', 'phone' => '0612345678', 'date_of_birth' => '2000-05-08', 'gender' => 'Vrouw', 'zip_code' => '1234 AB', 'adres' => 'Lotharingenweg 6', 'city' => 'Alkmaar', 'password' => Hash::make('12345678')],
        ];

        foreach ($instructors as $instructor) {
            $user = User::create($instructor);
            $user->assignRole($roleInstructor);
        }

        // Create users with the 'Leerling' role
        $students = [
            ['name' => 'Leerling1', 'email' => 'leerling1@gmail.com', 'phone' => '0612345678', 'date_of_birth' => '2006-05-09', 'gender' => 'Man', 'zip_code' => '1234 AB', 'adres' => 'Westerweg 26', 'city' => 'Limmen', 'password' => Hash::make('12345678')],
            ['name' => 'Leerling2', 'email' => 'leerling2@gmail.com', 'phone' => '0612345678', 'date_of_birth' => '2005-05-09', 'gender' => 'Vrouw', 'zip_code' => '1234 AB', 'adres' => 'Westerweg 36', 'city' => 'Limmen', 'password' => Hash::make('12345678')],
        ];

        foreach ($students as $student) {
            $user = User::create($student);
            $user->assignRole($roleStudent);
        }
    }
}
