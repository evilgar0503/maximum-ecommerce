<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comentario;
use App\Models\MetodoEnvio;
use App\Models\MetodoPago;
use App\Models\Noticia;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'nombre' => 'Eduardo',
                'apellidos' => 'Villar García',
                'dni' => '12345678Z',
                'email' => 'admin@example.com',
                'password' => 'REDACTED',
                'fecha_nacimiento' => '2000-01-01',
                'telefono' => '600000000',
                'cp' => '14001',
                'direccion' => 'Calle Mayor, 1',
                'ciudad' => 'Cabra',
                'provincia' => 'Córdoba',
                'pais' => 'España',
                'rol' => 'admin',
                'ruta_imagen' => 'img/users/defaultProfile.png'
            ]
        ];
        foreach ($users as $userData) {
            User::create($userData);
        }
        $metodosPago = [
            [
                'nombre' => 'Transferencia Bancaria'
            ],
            [
                'nombre' => 'Tarjeta de crédito'
            ],
            [
                'nombre' => 'Paypal'
            ],
            [
                'nombre' => 'Contrareembolso'
            ],

        ];
        foreach ($metodosPago as $metodoData) {
            MetodoPago::create($metodoData);
        }

        Noticia::factory(6)->create();
        \App\Models\User::factory(10)->create();
        Comentario::factory(30)->create();
        Producto::factory(10)->create();
        MetodoEnvio::factory(5)->create();

    }
}
