<?php

namespace Database\Factories;

use App\Models\ProductInput;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductInputFactory extends Factory
{
    protected $model = ProductInput::class;

    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(30, 100),
            'nf' => $this->faker->numberBetween(1000,3999),
            // 'unity_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
