<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('characters', function (Blueprint $table) {
            //
            $table->integer('user_id')->after('id');
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->integer('level')->after('last_name');
            $table->integer('experience')->after('level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('characters', function (Blueprint $table) {
            //
            $table->dropColumn('user_id','first_name','last_name','level','experience');
        });
    }
}
