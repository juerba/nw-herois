<?php

use Illuminate\Database\Seeder;

class ClaTableSeeder extends Seeder
{
	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	$now = date('Y-m-d H:i:s', strtotime('now'));
        DB::table('tb_cla')->insert([
        	'nome'=>'New Way',
        	'ativo'=>true,
        	'DataCriacao'=>$now,
        	'DataAlteracao'=>$now
        ]);
    }
}
