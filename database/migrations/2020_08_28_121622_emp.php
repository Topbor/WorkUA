<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Emp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploers', function (Blueprint $table) {
            $table->id();
            $table->string('username' , 255)->nullable(false);
            $table->string('email' , 255)->nullable(false);
            $table->integer('phone number') ;
            $table->string('password' , 255)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emploers');
    }
}
