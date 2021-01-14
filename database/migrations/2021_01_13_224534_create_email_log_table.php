<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->timestamp('date')->nullable();
            $table->string('name_send')->nullable();
            $table->string('email_send')->nullable();
            $table->string('email_to')->nullable();
            $table->text('body')->nullable();
            $table->string('session')->nullable();
            $table->string('send', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_log');
    }
}
