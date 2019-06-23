<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('estados', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('pais')->unsigned();
            $table->foreign('pais')->references('id')->on('pais')->onDelete('cascade');

            $table->string('nome', '45');
            $table->string('uf', '2');
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
        Schema::dropIfExists('estados');
    }
}
