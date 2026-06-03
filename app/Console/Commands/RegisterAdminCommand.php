<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:register';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register a new admin user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Enter admin name');
        $username = $this->ask('Enter admin username');
        $email = $this->ask('Enter admin email');

        if (User::where('email', $email)->orWhere('username', $username)->exists()) {
            $this->error('A user with this email or username already exists.');
            return;
        }

        $password = $this->secret('Enter Password');
        $passwordConfirm = $this->secret('Confirm Password');

        if (empty($password)) {
            $this->error('Password cannot be empty.');
            return;
        }

        if ($password !== $passwordConfirm) {
            $this->error('Passwords do not match.');
            return;
        }

        $admin = new User();
        $admin->name = $name;
        $admin->username = $username;
        $admin->email = $email;
        $admin->password = Hash::make($password);
        $admin->role = 'admin';
        $admin->save();

        $this->info("Admin user '{$admin->username}' registered successfully!");
    }
}
