<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cla', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nome');
            $table->boolean('Ativo');
            $table->date('DataCriacao'); 
            $table->date('DataAlteracao'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cla');
    }
}
