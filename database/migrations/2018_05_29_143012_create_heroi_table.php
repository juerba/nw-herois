<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_heroi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ClaID')->unsigned();
            $table->foreign('ClaID')->references('id')->on('TB_Cla');
            $table->integer('TipoHeroiID')->unsigned();
            $table->foreign('TipoHeroiID')->references('id')->on('TB_Tipo_Heroi');
            $table->binary('Thumb');
            $table->string('Nome');
            $table->integer('Vida');
            $table->integer('Defesa');
            $table->integer('Dano');
            $table->decimal('VelocidadeAtaque',4,2);
            $table->integer('VelocidadeMovimento');
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
        Schema::dropIfExists('tb_heroi');
    }
}
