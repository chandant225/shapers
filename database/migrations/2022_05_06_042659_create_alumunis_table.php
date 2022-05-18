<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumunisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumunis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('is_male');
            $table->string('designation');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->string('instagram_link');
            $table->longText('description');
            $table->string('image');
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
        Schema::dropIfExists('alumunis');
    }
}
