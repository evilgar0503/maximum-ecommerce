<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // 'fecha' => $this->faker->date(),
            // 'cod_seguimiento'=> Str::random(15),
            // 'user_id' => $this->faker->numberBetween(0, 11),
            // 'nota_cliente' => null,
            // 'nota_empresa' => null,
            // 'metodo_pago_id' => $this->faker->numberBetween(0, 5),
            // 'precio_total' => $this->faker->randomFloat(0, 500),
            // 'env_nombre' => $this->faker->name(),

        ];
    }
}
