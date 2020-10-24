<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProviderFactory extends Factory
{
    protected $model = Provider::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'cpf' => $this->faker->cpf,
            'cnpj' => $this->faker->cnpj,
            'street' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'number' => $this->faker->buildingNumber,
            'zipcode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'state' => $this->faker->regionAbbr,
            'phone1' => $this->faker->phone,
            'phone2' => $this->faker->phone,
            'email' => $this->faker->unique()->safeEmail,
            'notes' => $this->faker->text($maxNbChars = 200),
            // 'unity_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
