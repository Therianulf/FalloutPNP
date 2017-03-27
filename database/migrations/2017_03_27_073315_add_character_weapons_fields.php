<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCharacterWeaponsFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_weapons', function (Blueprint $table) {
            //
            $table->integer('character_id');
            $table->string('weapon_name');
            $table->boolean('functional')->default(true);
            $table->enum('ammo_type',['none','9mm','10mm','45_acp','556_nato','762_nato','762_warsaw','50_bmg','12_bird','12_buck','12_slug','20_bird','20_buck','20_slug','40mm','rocket_ap','rocket_he','mortar','20mm','55mm','75mm','120mm','155mm','fusion_cell','energy_cell','fusion_core'])->default('none');
            $table->enum("damage_type",['normal','laser','explosive','plasma']);
            $table->enum('damage',['1d4','2d4','3d4','1d6','2d6','3d6','1d8','2d8','3d8','1d10','2d10','3d10','1d12','2d12','3d12','1d20','2d20','3d20','1d100','2d100'])->default('2d6');
            $table->integer('ammo_capacity');
            $table->integer('ammo_loaded');
            $table->integer('weapon_condition')->default(10);
            $table->integer('range')->comment('range in hexes');
            $table->integer('action_snap_cost')->default(4);
            $table->boolean('target')->default(true);
            $table->integer('action_target_cost')->default(5);
            $table->boolean('burst')->default(false);
            $table->integer('action_burst_cost')->default(6);
            $table->integer('burst_max_count')->default(3);
            $table->integer('minimum_strength');
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
        Schema::table('character_weapons', function (Blueprint $table) {
        //
            $table->dropColumn('character_id','weapon_name','functional','range','action_snap_cost','target','action_target_cost','burst','action_burst_cost','burst_max_count','ammo_type','damage_type','damage','ammo_capacity','ammo_loaded','weapon_condition','minimum_strength','weight');
        });
    }
}
