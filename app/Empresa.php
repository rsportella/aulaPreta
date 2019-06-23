<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $fillable = [
        'cod_crva', 'endereco', 'telefone', 'email', 'seq_protocolo', 'seq_nota', 'cidade', 'titular', 'coordenador'
    ];
}
