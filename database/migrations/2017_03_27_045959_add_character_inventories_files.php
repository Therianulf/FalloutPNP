<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCharacterInventoriesFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_inventories', function (Blueprint $table) {
            //
            $table->integer('character_id');
            $table->string('item_name');
            $table->string('item_description');
            $table->integer('item_count');
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
        Schema::table('character_inventories', function (Blueprint $table) {
            //
            $table->dropColumn('character_id','item_name','item_description','item_count','weight');
        });
    }
}
