<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $table = "tb_marcas";

    public $primaryKey = 'mar_codigo';

    protected $fillable = [
        'mar_marca'
    ];

    public function carros(){
        return $this->hasMany(Carros::class);
     }

}
