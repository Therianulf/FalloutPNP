<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGroupInventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('group_inventories', function (Blueprint $table) {
            //
            $table->integer('group_id');
            $table->string('item_name');
            $table->string('item_description');
            $table->string('item_count');
            $table->double('weight');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('group_inventories', function (Blueprint $table) {
            //
            $table->dropColumn(['group_id',
                'item_name',
                'item_description',
                'item_count',
                'weight']);
        });
    }
}
