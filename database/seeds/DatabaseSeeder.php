<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClearTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(CidadesTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(ServicosTableSeeder::class);
    }
}
