<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubNavTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_nav', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->longText('url');
            $table->unsignedInteger('main_nav_id');
            $table->foreign('main_nav_id')->references('id')->on('main_nav');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_nav');
    }
}
