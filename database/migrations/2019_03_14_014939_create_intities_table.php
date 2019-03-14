<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('snapchat');
            $table->string('address');
            $table->string('website');

            $table->integer('tollfree');
            $table->integer('landline');
            $table->integer('status');
            $table->integer('categories_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intities');
    }
}
