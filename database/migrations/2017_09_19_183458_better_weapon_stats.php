<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BetterWeaponStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enemy_weapons', function (Blueprint $table) {
            $table->dropColumn(['weight','minimum_strength']);
        });

        Schema::table('enemy_weapons', function (Blueprint $table) {
            $table->string('notes')->nullable();
            $table->double('weight')->nullable();
            $table->integer('minimum_strength')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enemy_weapons', function (Blueprint $table) {
            $table->dropColumn('notes','weight','minimum_strength');
        });
        Schema::table('enemy_weapons', function (Blueprint $table) {
            $table->double('weight');
            $table->integer('minimum_strength');
        });
    }
}
