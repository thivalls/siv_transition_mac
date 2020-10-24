<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        $defaultArray = [1, 2, 3, 4, 5];
        $processOptions = [1, 2, 3, 4, 5, 6, 7];
        return [
            'client_id' => $this->faker->randomElement($defaultArray),
            'user_id' => $this->faker->randomElement($defaultArray),
            'unity_id' => $this->faker->randomElement($defaultArray),
            'carrier_id' => $this->faker->numberBetween(1, 50),
            'shipping' => $this->faker->randomElement($defaultArray),
            'discount_type' => $this->faker->randomElement(['v', 'f']),
            'discount' => $this->faker->randomFloat(2, 10, 50),
            'nf' => $this->faker->rg(false),
            'total' => $this->faker->randomFloat(2, 10, 100),
            'type' => $this->faker->boolean(),
            'status' => $this->faker->boolean(),
            'step_process' => $this->faker->randomElement($processOptions),
            'payment_status' => $this->faker->boolean(),
            'delivery_status' => $this->faker->boolean(),
            'note' => $this->faker->sentence(10, true)
        ];
    }
}
