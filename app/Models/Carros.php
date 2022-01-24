<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Marcas;
use App\Models\Cores;
use App\Models\Categorias;
use App\Models\Motores;
use App\Models\Posicoes_Motores;
use App\Models\Tipos_Tracao;

class Carros extends Model
{
    protected $table = "tb_carros";

    protected $primaryKey = 'car_codigo';

    public $timestamps = false;

    protected $guarded = [];

    public function marca()
    {
        return $this->hasOne(Marcas::class, "mar_codigo","car_mar_codigo");
    }

    public function cor()
    {
        return $this->hasOne(Cores::class, "cor_codigo","car_cor_codigo");
    }

    public function categoria()
    {
        return $this->hasOne(Categorias::class, "cat_codigo","car_cat_codigo");
    }

    public function motor()
    {
        return $this->hasOne(Motores::class, "tip_codigo","car_tip_codigo");
    }

    public function posicao_motor()
    {
        return $this->hasOne(Posicoes_Motores::class, "pos_codigo","car_pos_codigo");
    }

    public function tracao()
    {
        return $this->hasOne(Tipos_Tracao::class, "tra_codigo","car_tra_codigo");
    }
}
