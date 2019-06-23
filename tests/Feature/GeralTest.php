<?php

namespace Tests\Feature;

use App\Pais;
use App\Servico;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GeralTest extends TestCase
{
    public function testIndexAcessivel()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testIndexConteudoValido()
    {
        $response = $this->get('/');
        $response->assertSee("SisCRVA");
    }

    public function testIndexNaoContemPalavra()
    {
        $response = $this->get('/');
        $response->assertDontSee('sexy');
    }

    public function testLogin()
    {
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function testSessao()
    {
        $response = $this->withSession(['foo' => 'bar'])
            ->get('/');
    }

    public function testPaginaNaoEncontrada()
    {
        $response = $this->get('/ajuda');
        $response->assertStatus(404);
    }
}
