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
	$cla = DB::select('select id,nome from tb_cla');
	$tipo = DB::select('select id,nome from tb_tipo_heroi');
	$especialidade = DB::select('select id,nome from tb_especialidade');
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
