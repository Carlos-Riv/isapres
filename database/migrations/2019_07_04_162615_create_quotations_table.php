<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30);
            $table->string('last_name', 50);
            $table->string('rut', 10);
            $table->date('birthdate');
            $table->string('phone');
            $table->string('email');
            // fk worker type
            $table->unsignedBigInteger('isapre_id')->nullable();
            $table->foreign('isapre_id')->references('id')->on('isapres');
            // fk worker type
            $table->unsignedBigInteger('workertype_id')->nullable();
            $table->foreign('workertype_id')->references('id')->on('worker_types');
            // fk family burdens
            $table->unsignedBigInteger('familyburden_id')->nullable();
            $table->foreign('familyburden_id')->references('id')->on('family_burdens');
            //end fks
            $table->integer('rent');
            $table->string('city');
            $table->string('commune')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
