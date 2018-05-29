<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroi;

class HeroiController extends Controller
{

	public function index(){
		$heroi = Heroi::paginate();
		return $heroi;
	}
   
	public function show($id){
	    $heroi = Heroi::findOrFail($id);
	         
	    return $heroi;
	}
    
    public function store(Request $request, $claID=1, $tipoID=1){
    	
        $now = date('Y-m-d H:i:s', strtotime('now'));

        $heroi = Heroi::create([
    		'nome'=> $request->input('nome'),
    		'claID'=> $claID,
    		'tipoHeroiID'=>$tipoID,
    		'thumb'=>0,
        	'vida'=>$request->input('vida'),
        	'defesa'=>$request->input('defesa'),
        	'dano'=>$request->input('dano'),
        	'velocidadeAtaque'=>$request->input('velocidadeAtaque'),
        	'velocidadeMovimento'=>$request->input('velocidadeMovimento'),
            'ativo'=>true,
            'dataCriacao'=>$now,
            'dataAlteracao'=>$now
    	]);
		
		return $heroi;
	}
    public function update(Request $request){
     
        $now = date('Y-m-d H:i:s', strtotime('now'));
        $heroiID = $request->input('id');
        $heroi = Heroi::findOrFail($heroiID);
        echo $heroi;
        echo "lalala";
        $heroi->update([
            'nome'=> $request->input('nome'),
            'claID'=> $claID,
            'tipoHeroiID'=>$tipoID,
            'thumb'=>0,
            'vida'=>$request->input('vida'),
            'defesa'=>$request->input('defesa'),
            'dano'=>$request->input('dano'),
            'velocidadeAtaque'=>$request->input('velocidadeAtaque'),
            'velocidadeMovimento'=>$request->input('velocidadeMovimento'),
            'ativo'=>$request->input('ativo'),
            'dataAlteracao'=>$now
        ]);
        
        return $heroi;

    }
}
}

