<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Creating a new admin user...');

        $name = $this->ask('Name');
        $email = $this->ask('Email');
        $phone = $this->ask('Phone (optional)');
        $username = $this->ask('Username');
        $password = $this->secret('Password');
        $passwordConfirm = $this->secret('Confirm Password');

        if ($password !== $passwordConfirm) {
            $this->error('Passwords do not match.');
            return;
        }

        // Basic validation
        $errors = [];
        if (empty($name)) $errors[] = 'Name is required.';
        if (empty($email)) $errors[] = 'Email is required.';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email format.';
        if (empty($username)) $errors[] = 'Username is required.';
        if (empty($password)) $errors[] = 'Password is required.';

        if (!empty($errors)) {
            foreach ($errors as $error) {
                $this->error($error);
            }
            return;
        }

        // Check for uniqueness
        if (User::where('email', $email)->exists()) {
            $this->error('Email already exists.');
            return;
        }

        if (User::where('username', $username)->exists()) {
            $this->error('Username already exists.');
            return;
        }

        if (!empty($phone) && User::where('phone', $phone)->exists()) {
            $this->error('Phone already exists.');
            return;
        }

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'phone' => empty($phone) ? null : $phone,
            'username' => $username,
            'password' => Hash::make($password),
            'role' => 'admin',
        ]);

        $this->info("Admin user {$user->username} created successfully!");
    }
}
