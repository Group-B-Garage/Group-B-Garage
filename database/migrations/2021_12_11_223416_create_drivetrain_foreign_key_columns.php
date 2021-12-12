<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrivetrainForeignKeyColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_carros', function (Blueprint $table) {
            $table->unsignedInteger('car_tip_codigo');
            $table->foreign('car_tip_codigo')->references('tip_codigo')->on('tb_tipo_motor');
            $table->unsignedInteger('car_pos_codigo');
            $table->foreign('car_pos_codigo')->references('pos_codigo')->on('tb_posicao_motor');
            $table->unsignedInteger('car_tra_codigo');
            $table->foreign('car_tra_codigo')->references('tra_codigo')->on('tb_tração');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivetrain_foreign_key_columns');
    }
}
