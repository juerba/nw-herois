<?php

use Illuminate\Database\Seeder;

class TipoHeroiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $now = date('Y-m-d H:i:s', strtotime('now'));
        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Mago',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Sacerdote',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Lutador',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Arqueiro',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Cavaleiro',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);
        
        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Espadachim',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);
    }
}
