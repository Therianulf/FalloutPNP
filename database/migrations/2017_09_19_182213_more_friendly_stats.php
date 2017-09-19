<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoreFriendlyStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enemy_stats', function (Blueprint $table) {
            //

            $table->integer('base_armor')->nullable()->change()->comment('armor class without bonus');
            $table->integer('total_armor')->nullable()->change()->comment('armor class with bonus');
            $table->integer('carry_weight')->nullable()->change()->comment('25 lbs + 25 X STR.');
            $table->integer('melee_damage')->nullable()->change();
            $table->integer('damage_threshold')->nullable()->change()->comment('Armor Only');
            $table->integer('damage_resistance')->nullable()->change()->comment('Armor Only');
            $table->integer('poison_resistance')->nullable()->change()->comment('5 X EN');
            $table->integer('radiation_resistance')->nullable()->change()->comment('2 X EN');
            $table->integer('gas_resistance')->nullable()->change()->comment('Armor Only');
            $table->integer('electric_resistance')->nullable()->change()->comment('Armor Only');
            $table->integer('sequence')->nullable()->change()->comment('2 x PE + INT');
            $table->integer('heal_rate')->nullable()->change()->comment('with 6 hours of rest or 1 day of activity');
            /*
             * Endurance Healing Rate
                1-5          1
                6-8          2
                9-10         3
                11+          4
             *
             * */
            $table->integer('critical_chance')->nullable()->change()->comment('equals luck');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enemy_stats', function (Blueprint $table) {
            //
        });
    }
}
