<?php

namespace Tests\Feature;

use App\Pais;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PaisTest extends TestCase
{

    public function testInserirPais()
    {
        $pais = Pais::create([
            'nome' => 'Test PHPUNIT',
            'sigla' => 'TT'
        ]);
        $this->assertDatabaseHas('pais',['sigla'=>'TT']);
        $pais->delete();
        $this->assertDatabaseMissing('pais',['sigla'=>'TT']);
    }

    public function testePrimeiroPaisBr()
    {

    }
}
