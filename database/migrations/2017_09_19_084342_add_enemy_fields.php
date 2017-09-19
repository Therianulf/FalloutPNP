<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnemyFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('enemies', function (Blueprint $table) {
            //
            $table->string('name');
            $table->string('enemy_description')->nullable();
            $table->string('race')->nullable();
            $table->enum('size',['tiny','small','medium','large','huge','giant'])->default('medium');
            $table->integer('level')->default(1);
            $table->integer('experience')->default(10);

        });
    }
}
