<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGroupStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('group_statuses', function (Blueprint $table) {
            $table->integer('group_id');
            $table->string('status_name');
            $table->string('status_description');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('group_statuses', function (Blueprint $table) {
            $table->dropColumn(['group_id','status_name','status_description']);
        });
    }
}
