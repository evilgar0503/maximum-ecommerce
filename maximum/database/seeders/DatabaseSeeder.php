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
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'nombre' => 'Admin',
                'apellidos' => 'Demo',
                'email' => 'admin@example.com',
                'password' => Hash::make(env('SEED_ADMIN_PASSWORD', 'password')),
                'rol' => 'admin',
                'ruta_imagen' => 'img/users/defaultProfile.png'
            ]
        ];
        foreach ($users as $userData) {
            // forceCreate: 'rol' no es fillable a propósito, para evitar escalada de privilegios por asignación masiva.
            User::forceCreate($userData);
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
