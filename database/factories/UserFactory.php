<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->word,
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make("Hola123"),
            'name' => $this->faker->word,
            'surname' => $this->faker->word,
            'birthdate' => $this->faker->date,
            'telephone' => $this->faker->numberBetween(7000000000,7999999999),
            'license_number' => $this->faker->numberBetween(1000000,9999999),
        ];
    }
}
