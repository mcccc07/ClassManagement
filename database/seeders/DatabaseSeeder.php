<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin stored in admins table
        Admin::firstOrCreate(
            ['email' => 'admin@laverdad.edu.ph'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('admin123'),
            ]
        );

        User::create([
            'name' => 'Mac Robert',
            'email' => 'macrobert@student.laverdad.edu.ph',
            'email_verified_at' => now(),
            'password' => Hash::make('student123'),
            'role' => 'student',
            'course' => 'BSIS',
            'yearlvl' => '2nd Year',
            'remember_token' => Str::random(10),
        ]);

        // Students stored in students table
        User::factory(50)->create();
    }
}
