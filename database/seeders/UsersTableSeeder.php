<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $users = [
      [
        'name' => 'John Doe',
        'email' => 'john@mail.com',
        'password' => Hash::make('Admin@12345'),
        'remember_token' => null,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      ],
      [
        'name' => 'Jane Doe',
        'email' => 'jane@mail.com',
        'password' => Hash::make('Admin@12345'),
        'remember_token' => null,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      ],
    ];

    User::insert($users);
  }
}
