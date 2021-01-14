<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('type_id')->nullable()->default(1);
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('date')->nullable()->useCurrent();
            $table->string('image')->nullable();
            $table->integer('highlight')->nullable()->default(0);
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
