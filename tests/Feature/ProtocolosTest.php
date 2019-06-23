<?php

namespace Tests\Feature;

use App\Protocolo;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProtocolosTest extends TestCase
{
    public function testInserirProtocolo()
    {
        $protocolo = Protocolo::create([
            'empresa' => '999',
            'titulo' => '',
            'descricao' => '',
        ]);
        $this->assertDatabaseHas('protocolos', ['empresa' => 999]);
        $protocolo->delete();
        $this->assertDatabaseMissing('protocolos', ['empresa' => 9999]);
    }
}
