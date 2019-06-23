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
        DB::table('servicos')->insert(
            [
                'empresa' => 999,
                'titulo' => 'Certidão de registro de veículo automotor',
                'valor' => '9.70'],
            [
                'empresa' => 999,
                'titulo' => 'Reclassificação de Veículo acidentado/sinistrado de grande para média monta',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Liberação de Restrição de Averbação de Execução',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Liberação de Restrição de Transferência',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Cancelamento/suspensão de Comunicação de venda quando solicitada pelo proprietário',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Impressão de GAD-E',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Reimpressão de GAD-E',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Impressão de Dados de Infra Infrações de Trânsito',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Impressão de Demonstrativo de Pagamento',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Impressão de Situação de envio de documentos',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Fornecimento de autorização SISCSV',
                'valor' => '31.40'],
            [
                'empresa' => 999,
                'titulo' => 'Reativação de Veículos desativados',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Autenticação de originalidade de documentos veiculares que se encontram arquivados no CRVA',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Impressão de Certidão Negativa de Débitos do INSS',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Liberação de Restrição de Arrolamento de Bens',
                'valor' => '4.40'],
            [
                'empresa' => 999,
                'titulo' => 'Foto Cópia',
                'valor' => '0.50'],
            [
                'empresa' => 999,
                'titulo' => 'Digitalização',
                'valor' => '1.60',
            ]);
    }
}
