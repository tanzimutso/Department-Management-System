<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('notices', function(Blueprint $table){
            $table->increments('id');
            $table->date('created_in');
            $table->string('title');
            $table->string('body');
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
        //
    }
}
