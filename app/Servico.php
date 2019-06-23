<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    public $fillable = [
        'empresa', 'titulo', 'valor',
    ];
}
