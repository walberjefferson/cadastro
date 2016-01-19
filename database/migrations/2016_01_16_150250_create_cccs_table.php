<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCccsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cccs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 20);
            $table->date('data_inic');
            $table->date('data_fim');
            $table->string('tema', 200);
            $table->string('cidade', 150);
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
        Schema::drop('cccs');
    }
}
