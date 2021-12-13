<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = "tb_categorias";

    protected $primaryKey = 'cat_codigo';

    protected $fillable = [
        'cat_categoria'
    ];

    public function carros(){
        return $this->hasMany(Carros::class);
     }
}
