<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'vittorio',
            'email' => 'vittorio@vittorio.com',
            'password' => Hash::make('password')
        ]);

        Profile::create([
            'role' => 'admin',
            'nickname' => 'nick',
            'user_id' => 1
        ]);
    }
}