<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuario', function (Blueprint $table) {
            $table->integer('idUsuario', true);
            $table->string('strLogin')->nullable();
            $table->string('strNome')->nullable();
            $table->string('strSenha')->nullable();
            $table->string('strEmail')->default('');
            $table->integer('bitNivel')->nullable()->default(1);
            $table->integer('bitStatus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_usuario');
    }
}
