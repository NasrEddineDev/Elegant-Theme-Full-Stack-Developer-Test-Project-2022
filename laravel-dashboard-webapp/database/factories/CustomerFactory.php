<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->numerify('###-##-##-##'),
            'email' => $this->faker->unique()->safeEmail(),
            'budget' => $this->faker->randomDigit(),
            'message' => $this->faker->text(),
        ];
    }
}
