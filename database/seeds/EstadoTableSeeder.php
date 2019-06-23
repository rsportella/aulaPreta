<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'estados';

        DB::table($table)->delete();

        DB::table($table)->insert([
            ['pais' => 1, 'nome' => 'Acre', 'uf' => 'AC'],
            ['pais' => 1, 'nome' => 'Alagoas', 'uf' => 'AL'],
            ['pais' => 1, 'nome' => 'Amapá', 'uf' => 'AP'],
            ['pais' => 1, 'nome' => 'Amazonas', 'uf' => 'AM'],
            ['pais' => 1, 'nome' => 'Bahia', 'uf' => 'BA'],
            ['pais' => 1, 'nome' => 'Ceará', 'uf' => 'CE'],
            ['pais' => 1, 'nome' => 'Distrito Federal', 'uf' => 'DF'],
            ['pais' => 1, 'nome' => 'Espírito Santo', 'uf' => 'ES'],
            ['pais' => 1, 'nome' => 'Goiás', 'uf' => 'GO'],
            ['pais' => 1, 'nome' => 'Maranhão', 'uf' => 'MA'],
            ['pais' => 1, 'nome' => 'Mato Grosso', 'uf' => 'MT'],
            ['pais' => 1, 'nome' => 'Mato Grosso do Sul', 'uf' => 'MS'],
            ['pais' => 1, 'nome' => 'Minas Gerais', 'uf' => 'MG'],
            ['pais' => 1, 'nome' => 'Pará', 'uf' => 'PA'],
            ['pais' => 1, 'nome' => 'Paraíba', 'uf' => 'PB'],
            ['pais' => 1, 'nome' => 'Paraná', 'uf' => 'PR'],
            ['pais' => 1, 'nome' => 'Pernambuco', 'uf' => 'PE'],
            ['pais' => 1, 'nome' => 'Piauí', 'uf' => 'PI'],
            ['pais' => 1, 'nome' => 'Rio de Janeiro', 'uf' => 'RJ'],
            ['pais' => 1, 'nome' => 'Rio Grande do Norte', 'uf' => 'RN'],
            ['pais' => 1, 'nome' => 'Rio Grande do Sul', 'uf' => 'RS'],
            ['pais' => 1, 'nome' => 'Rondônia', 'uf' => 'RO'],
            ['pais' => 1, 'nome' => 'Roraima', 'uf' => 'RR'],
            ['pais' => 1, 'nome' => 'Santa Catarina', 'uf' => 'SC'],
            ['pais' => 1, 'nome' => 'São Paulo', 'uf' => 'SP'],
            ['pais' => 1, 'nome' => 'Sergipe', 'uf' => 'SE'],
            ['pais' => 1, 'nome' => 'Tocantins', 'uf' => 'TO']
        ]);
    }
}
