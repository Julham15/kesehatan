<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => Hash::make('admin'),
        'role' => 'admin',
       ]);

        User::create([
        'name' => 'User',
        'email' => 'user@user.com',
        'password' => Hash::make('user'),
        'role' => 'user',
       ]);
    }
}
