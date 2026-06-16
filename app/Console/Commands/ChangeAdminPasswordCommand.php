<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangeAdminPasswordCommand extends Command
{
  protected $signature = 'admin:password {identifier?}';
  protected $description = 'Change an admin password using email or username';

  public function handle()
  {
    $identifier = $this->argument('identifier');

    if (!$identifier) {
      $identifier = $this->ask('Enter admin email or username');
    }

    // Find admin
    $admin = User::where('role', 'admin')
      ->where(function ($query) use ($identifier) {
        $query->where('email', $identifier)
          ->orWhere('username', $identifier);
      })->first();

    if (!$admin) {
      $this->error('❌ Admin user not found.');
      return Command::FAILURE;
    }

    $this->info("✅ Found admin: {$admin->name} ({$admin->email})");

    // گرفتن password
    $data = [
      'password' => $this->secret('New Password'),
      'password_confirmation' => $this->secret('Confirm New Password'),
    ];

    // Validation (same as CreateAdminCommand)
    $validator = Validator::make($data, [
      'password' => 'required|min:6|confirmed',
    ]);

    if ($validator->fails()) {
      foreach ($validator->errors()->all() as $error) {
        $this->error($error);
      }
      return Command::FAILURE;
    }

    try {
      $admin->password = Hash::make($data['password']);
      $admin->save();

      $this->info("🔐 Password updated successfully for {$admin->username}");
      return Command::SUCCESS;

    } catch (\Exception $e) {
      $this->error('❌ Failed to update password.');
      $this->error($e->getMessage());
      return Command::FAILURE;
    }
  }
}
