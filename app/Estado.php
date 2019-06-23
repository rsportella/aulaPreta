<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $fillable = [
        'pais', 'nome', 'uf',
    ];
}
