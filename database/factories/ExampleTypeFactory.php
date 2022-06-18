<?php

namespace Database\Factories;

use App\Models\ExampleType\ExampleType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExampleTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExampleType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'is_active' => true
        ];
    }
}
