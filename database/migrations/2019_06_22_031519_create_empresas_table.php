<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_crva', '4');
            $table->string('endereco', '50');
            $table->string('telefone', '12');
            $table->string('email', '50');
            $table->integer('seq_protocolo');
            $table->integer('seq_nota');

            $table->integer('cidade')->unsigned();
            $table->foreign('cidade')->references('id')->on('cidades');

            $table->integer('titular')->unsigned();
            $table->foreign('titular')->references('id')->on('pessoas');

            $table->integer('coordenador')->unsigned();
            $table->foreign('coordenador')->references('id')->on('pessoas');


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
        Schema::dropIfExists('empresas');
    }
}
