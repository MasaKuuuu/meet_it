<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_question', function (Blueprint $table){
          $table->increments('id');
          $table->string('url_key');
          $table->string('title');
          $table->string('item1');
          $table->string('item2');
          $table->string('item3');
          $table->string('item4');
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
      Schema::dropIfExists('t_question');
    }
}
