<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('UserId', true);
            $table->string('UserNome', 100);
            $table->string('UserEmail', 100)->nullable();
            $table->string('UserMatricula', 7)->nullable();
            $table->string('UserTelefone', 14)->nullable();
            $table->string('UserCidade', 75)->nullable();
            $table->string('UserUF', 2)->nullable();
            $table->string('UserLogin', 20);
            $table->string('UserSenha', 20);
            $table->dateTime('UltimaAtividade')->nullable();
            $table->tinyInteger('UserStatus')->nullable()->default(0);
            $table->string('Foto', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
