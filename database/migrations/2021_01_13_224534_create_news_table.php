<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('date')->nullable()->useCurrent();
            $table->integer('type_id')->nullable()->default(1);
            $table->string('tags')->nullable();
            $table->string('subtags')->nullable();
            $table->string('source')->nullable();
            $table->text('source_url')->nullable();
            $table->string('image')->nullable();
            $table->string('image_label')->nullable();
            $table->integer('highlight')->nullable()->default(0);
            $table->integer('total_view')->nullable()->default(1);
            $table->index(['id', 'type_id'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
