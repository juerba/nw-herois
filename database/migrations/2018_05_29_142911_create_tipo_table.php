<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tipo_heroi', function (Blueprint $table) {
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
        Schema::dropIfExists('tb_tipo_heroi');
    }
}
