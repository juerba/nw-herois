<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroi;
use App\Http\Requests;
use App\Cla;

class HeroiController extends Controller
{

	public function index($claID){
		return Heroi::ofCla($claID)->paginate();
	}
   
	public function show($claID,$heroiID){
	   $heroi = Heroi::ofCla($claID)->findOrFail($heroiID);
       return $heroi;    
	}
    
    public function store(Request $request, $claID){
    	
        $now = date('Y-m-d H:i:s', strtotime('now'));

        $cla = Cla::findOrFail($claID);

        $cla->herois()->save(new Heroi([
            'nome'=> $request->input('nome'),
            'tipoHeroiID'=>$request->input('tipoHeroiID'),
            'thumb'=>0,
            'vida'=>$request->input('vida'),
            'defesa'=>$request->input('defesa'),
            'dano'=>$request->input('dano'),
            'velocidadeAtaque'=>$request->input('velocidadeAtaque'),
            'velocidadeMovimento'=>$request->input('velocidadeMovimento'),
            'ativo'=>true,
            'dataCriacao'=>$now,
            'dataAlteracao'=>$now
        ]));
		return $cla->herois;
	}

    public function update(Request $request, $claID, $heroiID){
        $heroi = Heroi::ofCla($claID)->findOrFail($heroiID);
        $now = date('Y-m-d H:i:s', strtotime('now'));
        
        $heroi->update([
            'nome'=> $request->input('nome'),
            'claID'=> $claID,
            'vida'=>$request->input('vida'),
            'defesa'=>$request->input('defesa'),
            'dano'=>$request->input('dano'),
            'TipoHeroiID'=>$request->input('TipoHeroiID'),
            'velocidadeAtaque'=>$request->input('velocidadeAtaque'),
            'velocidadeMovimento'=>$request->input('velocidadeMovimento'),
            'thumb'=>0,
            'ativo'=>$request->input('ativo'),
            'dataAlteracao'=>$now
        ]);
        return $heroi;
    }
        public function destroy($claID,$heroiID){

        $heroi = Heroi::ofCla($claID)->findOrFail($heroiID);
        $heroi->delete();
        return $heroi;
    }
}


