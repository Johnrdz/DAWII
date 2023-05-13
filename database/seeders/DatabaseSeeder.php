<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            ClienteSeeder::class,
            PedidoSeeder::class,
            ArticuloSeeder::class,
            Detalle_PedidoSeeder::class,
        ]);
    }
}
