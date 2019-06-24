<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNovaToPaisTable extends Migration
{
    public function up()
    {
        Schema::table('pais', function (Blueprint $table) {
            $table->string('nova');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pais', function (Blueprint $table) {
            $table->dropColumn('nova');
        });
    }
}
