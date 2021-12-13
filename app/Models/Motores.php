<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motores extends Model
{
    protected $table = "tb_tipo_motor";

    public $primaryKey = 'tip_codigo';

    protected $fillable = [
        'tip_tipo_motor'
    ];

    public function carros(){
        return $this->hasMany(Carros::class);
     }

}
