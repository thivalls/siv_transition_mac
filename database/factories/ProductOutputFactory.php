<?php

namespace Database\Factories;

use App\Models\ProductOutput;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductOutputFactory extends Factory
{
    protected $model = ProductOutput::class;

    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(5, 20),
            'nf' => $this->faker->numberBetween(1000,3999),
            // 'unity_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
