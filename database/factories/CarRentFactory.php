<?php

namespace Database\Factories;

use App\Models\CarRent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarRent>
 */
class CarRentFactory extends Factory
{
    protected $model = CarRent::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'license_plate' => $this->faker->word,
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'color' => $this->faker->word,
            'status' => $this->faker->word,
            'price' => $this->faker->randomFloat(2,2,10),
            'id_user_1' => $this->faker->numberBetween(0,100),
        ];
    }
}
