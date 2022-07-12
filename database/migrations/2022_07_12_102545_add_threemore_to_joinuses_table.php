<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThreemoreToJoinusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('joinuses', function (Blueprint $table) {
            $table->text('gender');
            $table->text('preffered_pronouns');
            $table->json('identify_as_a_person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('joinuses', function (Blueprint $table) {
           
        });
    }
}
