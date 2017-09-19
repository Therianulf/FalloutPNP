<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCharacterArmorCondition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_armors', function (Blueprint $table) {
            $table->integer('armor_condition')->default(10)->after('armor_coverage');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_armors', function (Blueprint $table) {
            //
            $table->dropColumn('armor_condition');
        });
    }
}
