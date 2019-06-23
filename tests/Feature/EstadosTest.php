<?php

namespace Tests\Feature;

use App\Estado;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstadosTest extends TestCase
{
    public function testInserirEstado()
    {
        $estado = Estado::create([
            'pais' => '999',
            'nome' => 'Test PHPUNIT',
            'uf' => 'TT'
        ]);
        $this->assertDatabaseHas('estados',['uf'=>'TT']);
        $estado->delete();
        $this->assertDatabaseMissing('estados',['uf'=>'TT']);
    }
}
