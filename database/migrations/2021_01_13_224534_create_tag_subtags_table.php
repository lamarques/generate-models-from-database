<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagSubtagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_subtags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtag');
            $table->string('id_subtag', 11);
            $table->text('description');
            $table->integer('id_news')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_subtags');
    }
}
