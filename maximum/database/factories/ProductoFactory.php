<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imgProductos = ['img/saco-1.jpeg', 'img/saco-2.jpeg', 'img/saco-3.jpeg', 'img/saco-4.jpeg', 'img/saco-5.jpeg'];
        return [
            //
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(700),
            'precio' => $this->faker->randomFloat(2, 2.00, 200.00),
            'precio_descuento' => $this->faker->randomFloat(2, 2.00, 200.00),
            'precio_empresa' => $this->faker->randomFloat(2, 2.00, 200.00),
            'stock' => $this->faker->randomNumber(2),
            'estado' => 'activo',
            'ruta_imagen'=> $this->faker->randomElement($imgProductos),
        ];
    }
}
