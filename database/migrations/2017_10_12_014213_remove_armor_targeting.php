<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveArmorTargeting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_armor', function (Blueprint $table) {
            //
            $table->dropColumn('armor_coverage');
            $table->boolean('is_helmet');
            $table->boolean('is_body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_armor', function (Blueprint $table) {
            //
            $table->enum('armor_coverage',['head','torso','left_leg','right_leg','right_arm','left_arm','full_body']);
            $table->dropColumn('is_helmet','is_body');
        });
    }
}
