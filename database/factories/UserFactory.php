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
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),

            'phone_number' => fake()->unique()->phoneNumber(),
            'account_number' => fake()->unique()->bankAccountNumber(),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'dob' => fake()->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d'),
            'role' => fake()->randomElement(['user', 'admin']),

            'balance' => fake()->randomFloat(2, 0, 1000000),
            'account_type' => fake()->randomElement(['savings', 'current']),
            'registered_at' => fake()->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
