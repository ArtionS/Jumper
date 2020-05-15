<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['nombre' => 'Niño']);
        Categoria::create(['nombre' => 'Niña']);
        Categoria::create(['nombre' => 'Fantasia']);
        Categoria::create(['nombre' => 'Pirata']);

        factory(Categoria::class , 6)->create();
    }
}
