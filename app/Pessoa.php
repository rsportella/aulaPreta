<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome','cpf','nascimento','sexo','telefone','email','cidade','endereco','numero','bairro','cep','complemento'
    ];
}
