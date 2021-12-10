<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cores extends Model
{
    protected $table = "tb_cores";

    public $primaryKey = 'cor_codigo';

    protected $fillable = [
        'cor_cor'
    ];

    public function carros(){
        return $this->hasMany(Carros::class);
     }
}
