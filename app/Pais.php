<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    public $fillable = [
        'nome', 'sigla',
    ];
}
