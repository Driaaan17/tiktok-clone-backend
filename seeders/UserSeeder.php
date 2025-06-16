<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create sample users
        User::create([
            'username' => 'admin',
            'email' => 'admin@tiktok.com',
            'password' => Hash::make('password'),
            'bio' => 'Administrator account',
            'is_verified' => true,
        ]);

        User::create([
            'username' => 'sebastian_nugie',
            'email' => 'sebastian@example.com',
            'password' => Hash::make('password'),
            'bio' => 'Content creator',
            'followers_count' => 1250,
        ]);

        User::create([
            'username' => 'avymakeup20',
            'email' => 'avy@example.com',
            'password' => Hash::make('password'),
            'bio' => 'Makeup artist & beauty content',
            'followers_count' => 980,
        ]);

        User::create([
            'username' => 'kopikisports_21',
            'email' => 'kopi@example.com',
            'password' => Hash::make('password'),
            'bio' => 'Sports enthusiast',
            'followers_count' => 2100,
        ]);

        User::create([
            'username' => 'zaky_81',
            'email' => 'zaky@example.com',
            'password' => Hash::make('password'),
            'bio' => 'Daily life content',
            'followers_count' => 567,
        ]);
    }
}