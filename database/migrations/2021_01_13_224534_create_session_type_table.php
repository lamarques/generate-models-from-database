<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->integer('order')->nullable()->default(999);
            $table->integer('parent_id')->default(0);
            $table->integer('service_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_type');
    }
}
