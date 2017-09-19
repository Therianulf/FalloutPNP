<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnemyInventories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enemy_inventories', function (Blueprint $table) {
            //
            $table->integer('enemy_id');
            $table->string('item_name');
            $table->string('item_description');
            $table->integer('item_count');
            $table->float('weight');
        });
    }
}
