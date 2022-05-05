<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('global_shaperss_community_desc');
            $table->string('global_shaperss_community_image');
            $table->string('video_link');
            $table->longText('global_shapers_kathmandu_hub');
            $table->string('global_shapers_kathmandu_image');
            $table->longText('objective');
            $table->longText('values');
            $table->longText('mission');
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
        Schema::dropIfExists('aboutuses');
    }
}
