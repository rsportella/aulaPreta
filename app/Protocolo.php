<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    public $fillable = [
        'empresa', 'titulo', 'descricao',
    ];
}
