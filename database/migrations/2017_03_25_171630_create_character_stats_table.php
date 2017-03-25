<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id');
            $table->integer('strength')->default(5);
            $table->integer('perception')->default(5);
            $table->integer('endurance')->default(5);
            $table->integer('charisma')->default(5);
            $table->integer('intelligence')->default(5);
            $table->integer('agility')->default(5);
            $table->integer('luck')->default(5);
            $table->integer('hit_points')->comment('base 15 + (STR + (2 X EN)) Level: 3 + 1/2EN');
            $table->integer('base_armor')->comment('armor class without bonus');
            $table->integer('total_armor')->comment('armor class with bonus');
            $table->integer('action_points');
            /*
             * Agility #APs
                1 5
                2-3 6
                4-5 7
                6-7 8
                8-9 9
                10+ 10
             *
             * */
            $table->integer('carry_weight')->comment('25 lbs + 25 X STR.');
            $table->integer('melee_damage');
            /*
             * Strength Melee Damage
                1-6        1
                7          2
                8          3
                9          4
                10         5
                11         6
                12         7
                and so on…
             * */
            $table->integer('damage_threshold')->comment('Armor Only');
            $table->integer('damage_resistance')->comment('Armor Only');
            $table->integer('poison_resistance')->comment('5 X EN');
            $table->integer('radiation_resistance')->comment('2 X EN');
            $table->integer('gas_resistance')->comment('Armor Only');
            $table->integer('electric_resistance')->comment('Armor Only');
            $table->integer('sequence')->comment('2 x PE + INT');
            $table->integer('heal_rate')->comment('with 6 hours of rest or 1 day or activity');
            /*
             * Endurance Healing Rate
                1-5          1
                6-8          2
                9-10         3
                11+          4
             *
             * */
            $table->integer('critical_chance')->comment('equals luck');


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
        Schema::dropIfExists('character_stats');
    }
}
