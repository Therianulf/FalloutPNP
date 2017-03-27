<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCharacterStatusesFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_statuses', function (Blueprint $table) {
            //
            $table->integer('character_id');
            $table->string('status_name');
            $table->string('status_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_statuses', function (Blueprint $table) {
            //
        });
    }
}
