<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrincolinCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brincolin_categoria', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("brincolin_id");
            $table->unsignedBigInteger("categoria_id");

            $table->foreign("brincolin_id")->references("id")->on("brincolins");
            $table->foreign("categoria_id")->references("id")->on("categorias");

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brincolin_categoria');
    }
}
