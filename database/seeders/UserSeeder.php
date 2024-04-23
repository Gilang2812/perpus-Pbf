<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\userModel;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        userModel::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'nama' => 'Admin123',
            'isAdmin' => 1,
        ]);
        User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'nama' => 'Admin123',
            'isAdmin' => 1,
        ]);
    }
}
