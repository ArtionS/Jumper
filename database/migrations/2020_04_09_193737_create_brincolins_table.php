<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrincolinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brincolins', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('brincolin');
            $table->string('detalles');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedFloat('ancho');
            $table->unsignedFloat('alto');
            $table->unsignedFloat('largo');
            $table->unsignedFloat('precio');
            $table->boolean('disponibilidad');

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
        Schema::dropIfExists('brincolins');
    }
}
