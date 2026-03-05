<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@laverdad.edu.ph',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'Student User',
            'email' => 'macrobert@student.laverdad.edu.ph',
            'password' => Hash::make('student123'),
        ]);
        User::factory()->count(50)->create();
    }
}
