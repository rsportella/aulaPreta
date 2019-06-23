<?php

namespace Tests\Feature;

use App\Servico;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ServicosTest extends TestCase
{
    public function testInserirServico()
    {
        Servico::created([
            'empresa' => '999',
            'titulo' => 'Test PHPUNIT',
            'valor' => '99.99'
        ]);
        $this->assertDatabaseHas('servicos',['empresa'=>'999']);
    }
}
