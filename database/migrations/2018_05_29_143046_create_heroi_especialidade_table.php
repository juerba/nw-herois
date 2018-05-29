<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroiEspecialidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_heroi_especialidade', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('HeroiID')->unsigned();
            $table->foreign('HeroiID')->references('id')->on('TB_Heroi');
            $table->integer('EspecialidadeID')->unsigned();
            $table->foreign('EspecialidadeID')->references('id')->on('TB_Especialidade');
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
        Schema::dropIfExists('tb_heroi_especialidade');
    }
}
