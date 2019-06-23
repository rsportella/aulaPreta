<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pais')->insert([
            'nome' => 'Brasil',
            'sigla' => 'BR',
        ]);
    }
}
