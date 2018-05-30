<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/herois','HeroiController');
Route::get('/addherois',function() {
	$cla = DB::select('select id,nome from tb_cla where ativo = 1');
	$tipo = DB::select('select id,nome from tb_tipo_heroi where ativo = 1');
	$especialidade = DB::select('select id,nome from tb_especialidade where ativo = 1');
	$params = [
		'clas'=>$cla,
		'tipo'=>$tipo,
		'especialidade'=>$especialidade
	];
	return view('herois_create',['params'=>$params]);
});
/*Route::get('/', function () {
    return view('herois');
});*/
