<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrivetrainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tipo_motor', function (Blueprint $table) {
            $table->increments('tip_codigo');
            $table->string('tip_tipo_motor', 255);
        });

        Schema::create('tb_posicao_motor', function (Blueprint $table) {
            $table->increments('pos_codigo');
            $table->string('pos_posicao_motor', 255);
        });

        Schema::create('tb_tração', function (Blueprint $table) {
            $table->increments('tra_codigo');
            $table->string('tra_tração', 255);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
