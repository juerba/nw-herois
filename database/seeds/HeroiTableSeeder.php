<?php

use Illuminate\Database\Seeder;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\Input;

class HeroiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  //       $now = date('Y-m-d H:i:s', strtotime('now'));

  //       $cla = DB::table('tb_cla')->where('nome', 'New Way')->first();
  //       $tipoMago = DB::table('TB_Tipo_Heroi')->where('nome','Mago')->first();
  //       $tipoSacerdote = DB::table('TB_Tipo_Heroi')->where('nome','Sacerdote')->first();
        
  // //       $steven = '/storage/app/public/herois/steven/1.gif';
		// // Image::make(Input::file('files')->getRealPath())
		// //    ->resize(25, 35, true, false)
		// //    ->save($steven);
		
		// $steven = Image::make(storage_path('public/herois/steven/1.gif'));
		// $steven->save('1.gif');
		   
  //       DB::table('tb_heroi')->insert([
  //       	'ClaID'=>$cla->id,
  //       	'TipoHeroiID'=>$tipoMago->id,
  //       	'thumb'=>$steven,
  //       	'nome'=>'Steven',
  //       	'vida'=>2900,
  //       	'defesa'=>200,
  //       	'dano'=>340,
  //       	'velocidadeAtaque'=>1.3,
  //       	'velocidadeMovimento'=>320,
  //       	'ativo'=>true,
  //       	'DataCriacao'=>$now,
  //       	'DataAlteracao'=>$now
  //       ]);

  //       DB::table('tb_heroi')->insert([
  //       	'ClaID'=>$cla->id,
  //       	'TipoHeroiID'=>$tipoSacerdote->id,
  //       	'thumb'=>$steven,
  //       	'nome'=>'Mona',
  //       	'vida'=>3100,
  //       	'defesa'=>200,
  //       	'dano'=>180,
  //       	'velocidadeAtaque'=>1.3,
  //       	'velocidadeMovimento'=>330,
  //       	'ativo'=>true,
  //       	'DataCriacao'=>$now,
  //       	'DataAlteracao'=>$now
  //       ]);
    }
}
