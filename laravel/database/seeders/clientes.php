<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de datos de clientes
        $clientes = [
            [
                'correo' => 'oiher@ikasle.egibide.org',
                'estado' => 'activo',
                'contrasena' => bcrypt('12345'),
                'nombre' => 'Oiher',
                'apellido' => 'Oleaga'
            ],
            [
                'correo' => 'david@ikasle.egibide.org',
                'estado' => 'activo',
                'contrasena' => bcrypt('12345'),
                'nombre' => 'david',
                'apellido' => 'Moreno'
            ],
            [
                'correo' => 'anartz@ikasle.egibide.org',
                'estado' => 'activo',
                'contrasena' => bcrypt('12345'),
                'nombre' => 'anartz',
                'apellido' => 'pato'
            ],
            [
                'correo' => 'markel@ikasle.egibide.org',
                'estado' => 'activo',
                'contrasena' => bcrypt('12345'),
                'nombre' => 'Markel',
                'apellido' => 'trans'
            ],
            [
                'correo' => 'cliente5@example.com',
                'estado' => 'inactivo',
                'contrasena' => bcrypt('contrasena5'),
                'nombre' => 'Pedro',
                'apellido' => 'López'
            ],
        ];

        // Insertar los clientes en la base de datos
        foreach ($clientes as $cliente) {
            Cliente::create($cliente);
        }
    }
}
