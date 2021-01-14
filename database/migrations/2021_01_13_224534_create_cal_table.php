<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('date')->nullable()->useCurrent();
            $table->timestamp('dateend')->nullable();
            $table->integer('type_id')->nullable()->default(1);
            $table->string('source')->nullable();
            $table->text('source_url')->nullable();
            $table->string('image')->nullable();
            $table->string('image_label')->nullable();
            $table->integer('highlight')->nullable()->default(0);
            $table->string('tag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cal');
    }
}
