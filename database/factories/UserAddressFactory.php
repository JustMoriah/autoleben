<?php

namespace Database\Factories;

use App\Models\UserAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAddress>
 */
class UserAddressFactory extends Factory
{
    protected $model = UserAddress::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country' => $this->faker->word,
            'state' => $this->faker->word,
            'city' => $this->faker->word,
            'street' => $this->faker->word,
            'int_num' => $this->faker->numberBetween(1,100),
            'ext_num' => $this->faker->numberBetween(1,100),
            'zip_code' => $this->faker->numberBetween(100000,999999),
            'id_user_1' => $this->faker->numberBetween(1,100),
        ];
    }
}
