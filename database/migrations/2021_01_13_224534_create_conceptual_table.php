<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConceptualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conceptual', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('url')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['A', 'I'])->nullable();
            $table->integer('ordem')->nullable()->default(9999);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conceptual');
    }
}
