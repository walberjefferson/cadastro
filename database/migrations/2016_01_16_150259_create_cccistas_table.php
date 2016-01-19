<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCccistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cccistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 200);
            $table->text('endereco');
            $table->date('data_nasc');
            $table->string('email', 100);
            $table->string('tel1', 20);
            $table->string('tel2', 20);
            $table->string('cidade', 150);
            $table->integer('ccc_id')->unsigned();
            $table->foreign('ccc_id')->references('id')->on('cccs');
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
        Schema::drop('cccistas');
    }
}
