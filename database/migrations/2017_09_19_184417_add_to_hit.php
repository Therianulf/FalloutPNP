<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToHit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enemy_weapons', function (Blueprint $table) {
            //
            $table->integer('to_hit')->nullable()->after('damage_type');
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
            //
            $table->dropColumn('to_hit');
        });
    }
}
