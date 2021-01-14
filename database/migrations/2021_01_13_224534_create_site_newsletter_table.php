<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteNewsletterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_newsletter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->tinyInteger('sendmail')->default(0);
            $table->string('queue_sendmail', 100);
            $table->dateTime('dtmodify')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_newsletter');
    }
}
