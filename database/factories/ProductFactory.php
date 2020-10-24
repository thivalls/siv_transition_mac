<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name,
            'type_unit' => 'unidade',
            'price' => $this->faker->randomFloat(2, 500, 10000),
            'weight' => $this->faker->randomFloat(2, 1, 29),
            'notes' => $this->faker->text($maxNbChars = 200)
        ];
    }
}
