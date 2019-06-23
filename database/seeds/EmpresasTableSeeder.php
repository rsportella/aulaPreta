<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->delete();
        DB::table('empresas')->delete();
        $pessoa =
            DB::table('pessoas')->insert(
                [
                    'nome' => 'Teste PHPUNIT',
                    'cpf' => '',
                    'nascimento' => '1111-11-11',
                    'sexo' => 0,
                    'telefone' => '',
                    'email' => '',
                    'cidade' => 4148,
                    'endereco' => '',
                    'numero' => '',
                    'bairro' => '',
                    'cep' => '',
                    'complemento' => ''
                ]
            );
        DB::table('empresas')->insert(
            [
                'cod_crva' => '9999',
                'endereco' => '',
                'telefone' => '',
                'email' => '',
                'seq_protocolo' => 9999,
                'seq_nota' => 9999,
                'cidade' => 4148,
                'titular' => $pessoa,
                'coordenador' => $pessoa
            ]
        );
    }
}
