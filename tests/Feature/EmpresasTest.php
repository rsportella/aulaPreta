<?php

namespace Tests\Feature;

use App\Empresa;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EmpresasTest extends TestCase
{
    public function testInserirEmpresa()
    {
        $empresa = Empresa::create([
            'cod_crva' => '9999',
            'endereco' => '',
            'telefone' => '',
            'email' => '',
            'seq_protocolo' => '999',
            'seq_nota' => '999',
            'cidade' => 999,
            'titular' => 999,
            'coordenador' => 999,
        ]);
        $this->assertDatabaseHas('empresas', ['cod_crva' => '999']);
        $empresa->delete();
        $this->assertDatabaseMissing('empresas', ['cod_crva' => '999']);
    }
}
