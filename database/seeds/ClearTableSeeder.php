<?php

use Illuminate\Database\Seeder;

class ClearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->truncate();
        DB::table('empresas')->truncate();
        DB::table('servicos')->truncate();
        DB::table('protocolos')->truncate();
        DB::table('cidades')->truncate();
        DB::table('estados')->truncate();
        DB::table('pais')->truncate();
    }
}
