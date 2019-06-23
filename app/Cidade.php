<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public $fillable = [
        'estado', 'nome',
    ];
}
