<?php

namespace App\Console\Commands;

use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create user with all permissions.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('What is the user\'s name?');
        $email = $this->ask('What is the user\'s email?');
        $password = $this->secret('What is the user\'s password?');

        $validator = Validator::make([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ], [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            $this->info('User creation failed. See error messages below:');
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return 1;
        }

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        // Get the admin role
        $adminRole = Role::where('name', 'admin')->first();

        if (!$adminRole) {
            $this->error('Admin role does not exist. Please create it and assign all permissions to it.');
            return 1;
        }

        // Attach the admin role to the user
        $user->roles()->attach($adminRole);

        $this->info('User created successfully with admin role.');

        return 0;
    }
}
