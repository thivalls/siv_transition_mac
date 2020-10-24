<?php

namespace Database\Factories;

use App\Models\Carrier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarrierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carrier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'cnpj' => $this->faker->cnpj,
            'street' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'number' => $this->faker->buildingNumber,
            'zipcode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'state' => $this->faker->regionAbbr,
            'phone1' => $this->faker->phone,
            'phone2' => $this->faker->phone,
            'email' => $this->faker->unique()->safeEmail,
            'notes' => $this->faker->text($maxNbChars = 200)
        ];
    }
}
