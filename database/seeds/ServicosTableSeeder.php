<?php

use Illuminate\Database\Seeder;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'servicos';

        DB::table($table)->delete();
        DB::table($table)->insert([
            ['empresa' => 1,'titulo' => 'Certidão de registro de veículo automotor', 'valor' => '9.70'],
            ['empresa' => 1,'titulo' => 'Reclassificação de Veículo acidentado/sinistrado de grande para média monta','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Liberação de Restrição de Averbação de Execução','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Liberação de Restrição de Transferência','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Cancelamento/suspensão de Comunicação de venda quando solicitada pelo proprietário','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Impressão de GAD-E','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Reimpressão de GAD-E','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Impressão de Dados de Infra Infrações de Trânsito','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Impressão de Demonstrativo de Pagamento','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Impressão de Situação de envio de documentos','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Fornecimento de autorização SISCSV','valor' => '31.40'],
            ['empresa' => 1,'titulo' => 'Reativação de Veículos desativados','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Autenticação de originalidade de documentos veiculares que se encontram arquivados no CRVA','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Impressão de Certidão Negativa de Débitos do INSS','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Liberação de Restrição de Arrolamento de Bens','valor' => '4.40'],
            ['empresa' => 1,'titulo' => 'Foto Cópia','valor' => '0.50'],
            ['empresa' => 1,'titulo' => 'Digitalização','valor' => '1.60']
        ]);
    }
}
