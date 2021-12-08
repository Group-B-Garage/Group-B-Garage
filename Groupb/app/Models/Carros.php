<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Marcas;

class Carros extends Model
{
    protected $table = "tb_carros";

    public $primaryKey = 'car_codigo';

    public function marca()
    {
        return $this->hasOne(Marcas::class, "mar_codigo","car_mar_codigo");
    }
}
