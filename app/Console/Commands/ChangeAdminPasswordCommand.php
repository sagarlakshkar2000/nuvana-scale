<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangeAdminPasswordCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:password {identifier?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change an admin password using email or username';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $identifier = $this->argument('identifier');

        if (!$identifier) {
            $identifier = $this->ask('Enter admin email or username');
        }

        $admin = User::where('role', 'admin')
            ->where(function ($query) use ($identifier) {
                $query->where('email', $identifier)
                      ->orWhere('username', $identifier);
            })->first();

        if (!$admin) {
            $this->error('Admin user not found.');
            return;
        }

        $this->info("Found admin: {$admin->name} ({$admin->email})");

        $password = $this->secret('New Password');
        $passwordConfirm = $this->secret('Confirm New Password');

        if (empty($password)) {
            $this->error('Password cannot be empty.');
            return;
        }

        if ($password !== $passwordConfirm) {
            $this->error('Passwords do not match.');
            return;
        }

        $admin->password = Hash::make($password);
        $admin->save();

        $this->info("Password for admin {$admin->username} updated successfully!");
    }
}
