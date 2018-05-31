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
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Cura',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Tanker',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Invocação',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Ataque à distância',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Matador de chefes',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);
 
         DB::table('tb_especialidade')->insert([
        	'nome'=>'Antitanque',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

         DB::table('tb_especialidade')->insert([
        	'nome'=>'Ataque em área',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);
    }
}
