<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSimple extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simple', function(Blueprint $table)
   {
           $table->increments('id');
           $table->string('name')->nullable();
           $table->text('desc')->nullable();
           
   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('simple');
    }
}
