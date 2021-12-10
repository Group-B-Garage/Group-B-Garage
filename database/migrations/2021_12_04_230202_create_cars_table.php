<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_marcas', function (Blueprint $table) {
            $table->increments('mar_codigo');
            $table->string('mar_marca', 255);
        });

        Schema::create('tb_cores', function (Blueprint $table) {
            $table->increments('cor_codigo');
            $table->string('cor_cor', 255);
        });

        Schema::create('tb_categorias', function (Blueprint $table) {
            $table->increments('cat_codigo');
            $table->string('cat_categoria', 255);
        });

        Schema::create('tb_carros', function (Blueprint $table) {
            $table->increments('car_codigo');
            $table->string('car_modelo', 255);
            $table->unsignedInteger('car_ano');
            $table->unsignedInteger('car_cilindrada');
            $table->unsignedInteger('car_kmrodados');
            $table->unsignedInteger('car_potencia');
            $table->unsignedInteger('car_mar_codigo');
            $table->foreign('car_mar_codigo')->references('mar_codigo')->on('tb_marcas');
            $table->unsignedInteger('car_cor_codigo');
            $table->foreign('car_cor_codigo')->references('cor_codigo')->on('tb_cores');
            $table->unsignedInteger('car_cat_codigo');
            $table->foreign('car_cat_codigo')->references('cat_codigo')->on('tb_categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_marcas');
        Schema::dropIfExists('tb_cores');
        Schema::dropIfExists('tb_categorias');
        Schema::dropIfExists('tb_carros');

    }
}
