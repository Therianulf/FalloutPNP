<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCharacterWeaponsDamageMod extends Migration
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
            $table->integer('damage_modifier')->default(0);
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
            $table->dropColumn('damage_modifier');
        });
    }
}
