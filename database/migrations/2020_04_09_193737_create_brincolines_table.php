<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrincolinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brincolines', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('brincolin');
            $table->string('detalles');
            $table->unsignedFloat('ancho');
            $table->unsignedFloat('alto');
            $table->unsignedFloat('largo');

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
        Schema::dropIfExists('brincolines');
    }
}
