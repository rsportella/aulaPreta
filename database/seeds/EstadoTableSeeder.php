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
        DB::table($table)->insert(
            ['pais' => 1, 'Nome' => 'Acre', 'uf' => 'AC'],
            ['pais' => 1, 'Nome' => 'Alagoas', 'uf' => 'AL'],
            ['pais' => 1, 'Nome' => 'Amapá', 'uf' => 'AP'],
            ['pais' => 1, 'Nome' => 'Amazonas', 'uf' => 'AM'],
            ['pais' => 1, 'Nome' => 'Bahia', 'uf' => 'BA'],
            ['pais' => 1, 'Nome' => 'Ceará', 'uf' => 'CE'],
            ['pais' => 1, 'Nome' => 'Distrito Federal', 'uf' => 'DF'],
            ['pais' => 1, 'Nome' => 'Espírito Santo', 'uf' => 'ES'],
            ['pais' => 1, 'Nome' => 'Goiás', 'uf' => 'GO'],
            ['pais' => 1, 'Nome' => 'Maranhão', 'uf' => 'MA'],
            ['pais' => 1, 'Nome' => 'Mato Grosso', 'uf' => 'MT'],
            ['pais' => 1, 'Nome' => 'Mato Grosso do Sul', 'uf' => 'MS'],
            ['pais' => 1, 'Nome' => 'Minas Gerais', 'uf' => 'MG'],
            ['pais' => 1, 'Nome' => 'Pará', 'uf' => 'PA'],
            ['pais' => 1, 'Nome' => 'Paraíba', 'uf' => 'PB'],
            ['pais' => 1, 'Nome' => 'Paraná', 'uf' => 'PR'],
            ['pais' => 1, 'Nome' => 'Pernambuco', 'uf' => 'PE'],
            ['pais' => 1, 'Nome' => 'Piauí', 'uf' => 'PI'],
            ['pais' => 1, 'Nome' => 'Rio de Janeiro', 'uf' => 'RJ'],
            ['pais' => 1, 'Nome' => 'Rio Grande do Norte', 'uf' => 'RN'],
            ['pais' => 1, 'Nome' => 'Rio Grande do Sul', 'uf' => 'RS'],
            ['pais' => 1, 'Nome' => 'Rondônia', 'uf' => 'RO'],
            ['pais' => 1, 'Nome' => 'Roraima', 'uf' => 'RR'],
            ['pais' => 1, 'Nome' => 'Santa Catarina', 'uf' => 'SC'],
            ['pais' => 1, 'Nome' => 'São Paulo', 'uf' => 'SP'],
            ['pais' => 1, 'Nome' => 'Sergipe', 'uf' => 'SE'],
            ['pais' => 1, 'Nome' => 'Tocantins', 'uf' => 'TO']);
    }
}
