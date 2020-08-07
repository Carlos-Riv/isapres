<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotations', function (Blueprint $table) {
            $table->string('last_name', 50)->nullable()->change();
            $table->string('rut', 10)->nullable()->change();
            $table->date('birthdate')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->integer('rent')->nullable()->change();
            $table->string('city')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotations', function (Blueprint $table) {
            $table->string('last_name', 50)->change();
            $table->string('rut', 10)->change();
            $table->date('birthdate')->change();
            $table->string('phone')->change();
            $table->integer('rent')->change();
            $table->string('city')->change();
        });
    }
}
