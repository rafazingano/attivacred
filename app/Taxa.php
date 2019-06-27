<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxa extends Model
{
    protected $fillable = [
        'carro', 'imovel', 'pessoal'
    ];
}
