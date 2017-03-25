<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSkillSet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_skills', function (Blueprint $table) {
            //
            $table->integer('small_guns')->comment('5% + (4 X AG)');
            $table->integer('big_guns')->comment('0% + (2 X AG)');
            $table->integer('energy_weapons')->comment('0% + (2 X AG) + (PE X 2)');
            $table->integer('unarmed')->comment('30% + (2 X (AG + STR))');
            $table->integer('melee_weapons')->comment('20% + (2 X (AG + STR))');
            $table->integer('throwing')->comment('0% + (4 X AG )');
            $table->integer('first_aid')->comment('0% + (2 X (PE + END))');
            $table->integer('doctor')->comment('5% + (PE + int)');
            $table->integer('sneak')->comment('5% + (3 X AG)');
            $table->integer('lockpick')->comment('10% + (PE + AG)');
            $table->integer('steal')->comment('0% + (3 X AG)');
            $table->integer('traps')->comment('10% + (PE + AG)');
            $table->integer('science')->comment('0% + (4 X INT)');
            $table->integer('repair')->comment('0% + (3 X int)');
            $table->integer('pilot')->comment('0% + 2(PE + AG)');
            $table->integer('speech')->comment('0% + (5 X CHA)');
            $table->integer('barter')->comment('0% + (4 X CHA)');
            $table->integer('outdoorsman')->comment('0% + 2(END X INT)');
            $table->enum('first_tag',['small_guns','big_guns','energy_weapons','unarmed','melee_weapons','throwing','first_aid','doctor','sneak','steal','traps','science','repair','pilot','speech','barter','outdoorsman']);
            $table->enum('second_tag',['small_guns','big_guns','energy_weapons','unarmed','melee_weapons','throwing','first_aid','doctor','sneak','steal','traps','science','repair','pilot','speech','barter','outdoorsman']);
            $table->enum('third_tag',['small_guns','big_guns','energy_weapons','unarmed','melee_weapons','throwing','first_aid','doctor','sneak','steal','traps','science','repair','pilot','speech','barter','outdoorsman']);
            $table->enum('perk_tag',['small_guns','big_guns','energy_weapons','unarmed','melee_weapons','throwing','first_aid','doctor','sneak','steal','traps','science','repair','pilot','speech','barter','outdoorsman'])->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_skills', function (Blueprint $table) {
            //
        });
    }
}
