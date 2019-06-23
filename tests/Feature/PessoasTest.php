<?php

namespace Tests\Feature;

use App\Pessoa;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PessoasTest extends TestCase
{
    public function testInserirProtocolo()
    {
        $pessoaArray = array(
            'nome' => 'Teste PHPUNIT',
            'cpf' => '',
            'nascimento' => '1111-11-11',
            'sexo' => 0,
            'telefone' => '',
            'email' => '',
            'cidade' => 999,
            'endereco' => '',
            'numero' => '',
            'bairro' => '',
            'cep' => '',
            'complemento' => '',
        );
        $pessoa = Pessoa::create($pessoaArray);
        $this->assertDatabaseHas('pessoas', $pessoaArray);
        $pessoa->delete();
        $this->assertDatabaseMissing('pessoas', $pessoaArray);
    }
}
