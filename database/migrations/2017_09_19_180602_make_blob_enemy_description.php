<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeBlobEnemyDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enemies', function (Blueprint $table) {
            $table->dropColumn('enemy_description');

        });
        Schema::table('enemies', function (Blueprint $table) {

            $table->binary('enemy_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enemies', function (Blueprint $table) {
            $table->dropColumn('enemy_description');
        });

        Schema::table('enemies', function (Blueprint $table) {
            $table->string('enemy_description');
        });
    }
}
