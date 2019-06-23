<?php

namespace Tests\Feature;

use App\Cidade;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CidadesTest extends TestCase
{
    public function testInserirCidade()
    {
        $cidade = Cidade::create([
            'estado' => '999',
            'nome' => 'Test PHPUNIT',
        ]);
        $this->assertDatabaseHas('cidades',['estado'=>'999']);
        $cidade->delete();
        $this->assertDatabaseMissing('cidades',['estado'=>'999']);
    }
}
