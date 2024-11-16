<?php

namespace Database\Factories;

use App\Models\CarSell;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarSell>
 */
class CarSellFactory extends Factory
{
    protected $model = CarSell::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'color' => $this->faker->word,
            'stock' => $this->faker->numberBetween(1,10),
            'price' => $this->faker->randomFloat(2,2,10),
            'id_user_1' => $this->faker->numberBetween(0,100),
        ];
    }
}
