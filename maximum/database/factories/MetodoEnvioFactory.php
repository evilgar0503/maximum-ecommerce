<?php

namespace Database\Factories;

use App\Models\MetodoEnvio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MetodoEnvio>
 */
class MetodoEnvioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MetodoEnvio::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->name(),
            'cargo' => $this->faker->randomFloat(2, 1.00, 25.00)
        ];
    }
}
