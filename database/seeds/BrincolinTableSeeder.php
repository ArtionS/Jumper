<?php

use App\Brincolin;
use Illuminate\Database\Seeder;

class BrincolinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brincolin::create([
            'brincolin' => 'Pirata',
            'detalles' => 'Diseño de Barco Pirata',
            'categoria_id' => '4',
            'ancho' => '3',
            'alto' => '2',
            'largo' => '4',
            'precio' => '399.99',
            'disponibilidad' => '1'
        ]);

        Brincolin::create([
            'brincolin' => 'Final Fantasy',
            'detalles' => 'Diseño de un videojuego de fantasia',
            'categoria_id' => '3',
            'ancho' => '4',
            'alto' => '2',
            'largo' => '3',
            'precio' => '499.99',
            'disponibilidad' => '1'
        ]);

        Brincolin::create([
            'brincolin' => 'Princesas',
            'detalles' => 'Diseño de las princesas de disney',
            'categoria_id' => '2',
            'ancho' => '2',
            'alto' => '2',
            'largo' => '2',
            'precio' => '349.99',
            'disponibilidad' => '2'
        ]);

        Brincolin::create([
            'brincolin' => 'Super Heroes',
            'detalles' => 'Diseño de los heroes de Marvel los Vengadores',
            'categoria_id' => '1',
            'ancho' => '2',
            'alto' => '2',
            'largo' => '3',
            'precio' => '399.99',
            'disponibilidad' => '1'
        ]);

        Brincolin::create([
            'brincolin' => 'Gusanitos',
            'detalles' => 'Diseño de gusanitos para interuactar',
            'categoria_id' => '1',
            'ancho' => '3',
            'alto' => '3',
            'largo' => '5',
            'precio' => '699.99',
            'disponibilidad' => '1'
        ]);

    }
}
