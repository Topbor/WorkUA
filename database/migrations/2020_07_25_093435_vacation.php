<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vacation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 255)->nullable(false);
            $table->string('company' , 255)->nullable(false);
            $table->mediumText('description')->nullable(true);
            $table->enum('type', ['PHP', 'Java Script','C#','C++','React','Ruby','Pyton','Assembler' ,'Angular'])->default('php');
            $table->integer('price') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacations', function (Blueprint $table) {
            //
        });
    }
}
