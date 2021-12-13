<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_Tracao extends Model
{
    protected $table = "tb_tração";

    protected $primaryKey = 'tra_codigo';

    protected $fillable = [
        'tra_tração'
    ];

    public function carros(){
        return $this->hasMany(Carros::class);
     }

}
