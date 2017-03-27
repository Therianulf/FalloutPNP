<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCharacterWeaponsToHit extends Migration
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
            $table->float('to_hit_adjustment')->default(0)->after('range');
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
            $table->dropColumn('to_hit_adjustment');
        });
    }
}
