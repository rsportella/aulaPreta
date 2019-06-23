<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', '100');
            $table->string('cpf', '18');
            $table->date('nascimento');
            $table->boolean('sexo')->default(0);
            $table->string('telefone', '12');
            $table->string('email', '50');

            $table->integer('cidade')->unsigned();
            $table->foreign('cidade')->references('id')->on('cidades')->onDelete('cascade');

            $table->string('endereco', '100')->nullable(true);
            $table->string('numero', '20')->nullable(true);
            $table->string('bairro', '50');
            $table->string('cep', '10')->nullable(true);
            $table->string('complemento', '10')->nullable(true);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
