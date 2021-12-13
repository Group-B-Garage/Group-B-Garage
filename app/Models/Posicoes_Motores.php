<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posicoes_Motores extends Model
{
    protected $table = "tb_posicao_motor";

    protected $primaryKey = 'pos_codigo';

    protected $fillable = [
        'pos_posicao_motor'
    ];

    public function carros(){
        return $this->hasMany(Carros::class);
     }

}
