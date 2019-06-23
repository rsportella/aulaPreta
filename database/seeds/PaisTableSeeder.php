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
        $table = 'pais';

        DB::table($table)->delete();
        DB::table($table)->insert(
            ['nome' => 'Brasil', 'sigla' => 'BR']
        );
    }
}
