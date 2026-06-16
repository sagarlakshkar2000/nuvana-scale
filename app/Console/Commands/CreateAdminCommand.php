<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateAdminCommand extends Command
{
  protected $signature = 'make:admin';
  protected $description = 'Create a new admin user';

  public function handle()
  {
    $this->info('Creating a new admin user...');

    // Collect input
    $data = [
      'name' => $this->ask('Name'),
      'email' => $this->ask('Email'),
      'username' => $this->ask('Username'),
      'password' => $this->secret('Password'),
      'password_confirmation' => $this->secret('Confirm Password'),
    ];

    // Validate input
    $validator = Validator::make($data, [
      'name' => 'required|string|max:255',
      'email' => 'required|email|max:255|unique:users,email',
      'username' => 'required|string|max:255|unique:users,username',
      'password' => 'required|min:6|confirmed',
    ]);

    if ($validator->fails()) {
      foreach ($validator->errors()->all() as $error) {
        $this->error($error);
      }
      return Command::FAILURE;
    }

    try {
      // Create admin user
      $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'username' => $data['username'],
        'password' => Hash::make($data['password']),
        'role' => 'admin',
      ]);

      $this->info("✅ Admin '{$user->username}' created successfully!");
      return Command::SUCCESS;

    } catch (\Exception $e) {
      $this->error('❌ Failed to create admin user.');
      $this->error($e->getMessage());
      return Command::FAILURE;
    }
  }
}
