<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->smallIncrements('id')->change();
            $table->string('first_name', 100)->change();
            $table->string('last_name', 100)->change();
            $table->date('birthday')->nullable()->change();
            $table->string('dni', 20)->nullable(false)->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->increments('id')->change();
            $table->string('first_name', 255)->change();
            $table->string('last_name', 255)->change();
            $table->dateTime('birthday')->nullable(false)->change();
            $table->dropUnique('users_dni_unique')->nullable()->change();
        });
    }
}
