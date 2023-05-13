<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(

            [
                'Nombre'=>'Camiseta',
                'Descripcion'=>'Blanco',
                'CantInventario'=>11,
                'Precio'=>20.50,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Short',
                'Descripcion'=>'Azul',
                'CantInventario'=>22,
                'Precio'=>15.31,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Gorra',
                'Descripcion'=>'Blanca',
                'CantInventario'=>8,
                'Precio'=>07.50,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Pantalon',
                'Descripcion'=>'Negro',
                'CantInventario'=>15,
                'Precio'=>19.99,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Calcetines',
                'Descripcion'=>'Blanco',
                'CantInventario'=>16,
                'Precio'=>06.50,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Gorro',
                'Descripcion'=>'Negro',
                'CantInventario'=>11,
                'Precio'=>10.99,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Billetera',
                'Descripcion'=>'Cafe',
                'CantInventario'=>10,
                'Precio'=>21.60,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Cartera',
                'Descripcion'=>'Roja',
                'CantInventario'=>25,
                'Precio'=>30.00,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Zapato',
                'Descripcion'=>'Negro',
                'CantInventario'=>07,
                'Precio'=>27.99,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Falda',
                'Descripcion'=>'Verde',
                'CantInventario'=>30,
                'Precio'=>20.00,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Lente',
                'Descripcion'=>'Oscuro',
                'CantInventario'=>10,
                'Precio'=>12.00,
                'created_at'=>Carbon::now(),
            ],
            [
                'Nombre'=>'Bufanda',
                'Descripcion'=>'Rayada',
                'CantInventario'=>15,
                'Precio'=>07.00,
                'created_at'=>Carbon::now(),
            ]
        );

        //Insert data into table
        DB::table('articulo')->insert($data);
    }
}
