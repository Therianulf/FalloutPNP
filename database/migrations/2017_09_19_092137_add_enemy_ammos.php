<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnemyAmmos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enemy_ammos', function (Blueprint $table) {
            $table->integer('enemy_id');
            $table->string('ammo_name');
            $table->enum('ammo_type',['9mm','10mm','45_acp','556_nato','762_nato','762_warsaw','50_bmg','12_bird','12_buck','12_slug','20_bird','20_buck','20_slug','40mm','rocket_ap','rocket_he','mortar','20mm','55mm','75mm','120mm','155mm','fusion_cell','energy_cell','fusion_core']);
            $table->enum('ammo_class',['fmj','hp','ap','explosive','incendiary']);
            $table->integer('ammo_count');
            $table->integer('damage_mod')->default(0);
            $table->integer('damage_threshold_penetration')->default(0);
            $table->float('damage_resistance_penetration')->default(0.0);
            $table->float('jam_percentage')->default(0.0);
            $table->enum('aoe_radius',['direct','1megahex','2megahex','3megahex'])->default('direct');
            $table->float('weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enemy_ammos', function (Blueprint $table) {
            //
        });
    }
}
