<?php

namespace Database\Factories;

use App\Models\enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => OrderStatusEnum::Active,
            'national_code' => fake()->countryCode(),
            'amount' => rand(1000,999999)
        ];
    }
}
