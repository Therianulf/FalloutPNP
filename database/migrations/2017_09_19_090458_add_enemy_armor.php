<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnemyArmor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enemy_armors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enemy_id');
            $table->string('armor_name');
            $table->enum('armor_coverage',['head','torso','left_leg','right_leg','right_arm','left_arm','full_body']);
            $table->integer('armor_condition')->default(10);
            $table->integer('armor_class');
            $table->integer('damage_threshold');
            $table->integer('damage_resistance');
            $table->float('gas_resistance');
            $table->float('laser_resistance');
            $table->float('fire_resistance');
            $table->float('plasma_resistance');
            $table->float('explosion_resistance');
            $table->float('weight');
            $table->timestamps();
        });
    }
}
