<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnemyStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enemy_statuses', function (Blueprint $table) {
            $table->integer('enemy_id');
            $table->string('status_name');
            $table->string('status_description');
        });
    }
}
