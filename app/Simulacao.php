<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simulacao extends Model
{
    protected $fillable = [
        'options'
    ];
    protected $casts = [
        'options' => 'collection',
    ];
}
