<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGroupId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_skills', function (Blueprint $table) {
            $table->dropColumn('first_tag','second_tag','third_tag','perk_tag');
        });
        Schema::table('character_skills', function (Blueprint $table) {
            $table->enum('first_tag',['small_guns','big_guns','energy_weapons','unarmed','melee_weapons','throwing','first_aid','doctor','sneak','steal','lockpick','traps','science','repair','pilot','speech','barter','outdoorsman']);
            $table->enum('second_tag',['small_guns','big_guns','energy_weapons','unarmed','melee_weapons','throwing','first_aid','doctor','sneak','steal','lockpick','traps','science','repair','pilot','speech','barter','outdoorsman']);
            $table->enum('third_tag',['small_guns','big_guns','energy_weapons','unarmed','melee_weapons','throwing','first_aid','doctor','sneak','steal','lockpick','traps','science','repair','pilot','speech','barter','outdoorsman']);
            $table->enum('perk_tag',['small_guns','big_guns','energy_weapons','unarmed','melee_weapons','throwing','first_aid','doctor','sneak','steal','lockpick','traps','science','repair','pilot','speech','barter','outdoorsman'])->nullable();
        });
        Schema::table('characters',function (Blueprint $table){
            $table->integer('group_id')->after('user_id')->nullable();
        });
        Schema::table('groups',function (Blueprint $table){
            $table->dropColumn('user_list','character_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character', function (Blueprint $table) {
            //
        });
    }
}
