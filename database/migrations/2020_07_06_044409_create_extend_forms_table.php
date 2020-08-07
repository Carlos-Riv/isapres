<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtendFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extend_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->string('rut')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('salary')->nullable();
            $table->set('work', ['dependiente', 'independiente'])->nullable();
            $table->integer('responsibilities')->nullable();
            $table->string('city')->nullable();
            $table->string('commune')->nullable();
            // 
            $table->unsignedBigInteger('isapre_id')->nullable();
            $table->foreign('isapre_id')->references('id')->on('isapres');
            // 
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('extend_forms');
    }
}
