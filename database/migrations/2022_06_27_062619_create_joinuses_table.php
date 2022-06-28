<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joinuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('date_of_birth');
            $table->string('email');
            $table->string('phone');
            $table->longText('social_media');
            $table->string('name_of_organization');
            $table->string('expertise');
            $table->longText('best_skills');
            $table->longText('get_to_know_about');
            $table->longText('involved_in_other_group');
            $table->longText('join_our_community');
            $table->longText('chance_to_lead_a_project');
            $table->longText('hours_per_week');
            $table->string('cv_file');
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
        Schema::dropIfExists('joinuses');
    }
}
