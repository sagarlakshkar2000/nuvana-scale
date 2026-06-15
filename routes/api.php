<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');



Route::post('/run-command', function (Request $request) {
  // 🚫 Block in production
  // if (!app()->environment('local')) {
  //   return response()->json(['error' => 'Not allowed'], 403);
  // }

  $command = $request->input('command');

  // Optional: allow ALL in local (or keep whitelist)
  $allowedCommands = [
    'migrate',
    'migrate:fresh',
    'db:seed',
    'storage:link',
    'optimize:clear',
    'cache:clear',
    'config:clear',
    'route:clear',
  ];

  if (!in_array($command, $allowedCommands)) {
    return response()->json(['error' => 'Command not allowed'], 400);
  }

  Artisan::call($command);

  return response()->json([
    'status' => 'success',
    'command' => $command,
    'output' => Artisan::output()
  ]);

});
