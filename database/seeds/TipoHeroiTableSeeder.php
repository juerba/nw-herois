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
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Sacerdote',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Lutador',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Arqueiro',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);

        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Cavaleiro',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);
        
        DB::table('tb_tipo_heroi')->insert([
        	'nome'=>'Espadachim',
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);
    }
}
