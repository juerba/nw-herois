<?php

use Illuminate\Database\Seeder;

class EspecialidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s', strtotime('now'));
        DB::table('tb_especialidade')->insert([
        	'nome'=>'Magia Branca',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Cura',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Tanker',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Invocação',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Ataque à distância',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Matador de chefes',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);
 
         DB::table('tb_especialidade')->insert([
        	'nome'=>'Antitanque',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Ataque em área',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);
    }
}
