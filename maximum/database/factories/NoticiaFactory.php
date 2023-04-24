<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
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
            'titulo' => $this->faker->sentence(),
            'ruta_imagen'=> 'img/noticiaPrueba.jpg',
            'cuerpo' => $this->faker->text(7000)
        ];
    }
}
