<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstname = fake()->unique()->firstName();
        $lastname = fake()->unique()->lastName();

        // The unique() helper ensures this specific combination hasn't been used yet
        $email = fake()->unique()->lexify(
            strtolower($firstname) . '.' . strtolower($lastname)
        ) . '@student.laverdad.edu.ph';

        return [
            'name' => "$firstname $lastname",
            'email' => $email,
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'role' => 'student',
            'remember_token' => Str::random(10),
            'course' => fake()->randomElement(['BSIT', 'BSCS', 'BSN']),
            'yearlvl' => fake()->randomElement(['1st Year', '2nd Year', '3rd Year', '4th Year']),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
