<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSimples extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simples', function(Blueprint $table)
   {
           $table->increments('id');
           $table->string('name')->nullable();
           $table->text('desc')->nullable();
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
        Schema::drop('simples');
    }
}
