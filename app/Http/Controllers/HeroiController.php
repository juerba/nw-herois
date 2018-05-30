<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroi;
use App\Http\Requests;
use App\Cla;
use DB;

class HeroiController extends Controller
{

	public function index(){
		$herois = Heroi::all();
        //echo '<pre>'; print_r($herois); die();
        return view("herois")->with('herois',$herois);
	}
   
	public function show($heroiID){
	   $heroi = Heroi::findOrFail($heroiID);
       return $heroi;    
	}
    
    public function store(Request $request){
    	
        $now = date('Y-m-d H:i:s', strtotime('now'));
        $especialidades = "";
        for($i=1;$i<9;$i++){
            if($request->input('especialidadeID_'.$i)){
                $especialidades .= $i.",";
            }
        }
        
        //print_r($especialidade); die();
        $heroi = Heroi::create([
            'nome'=> $request->input('nome'),
            'claID'=> $request->input('claID'),
            'tipoHeroiID'=>$request->input('tipoHeroiID'),
            'especialidade' => $especialidades,
            'thumb'=>$request->input('thumb'),
            'vida'=>$request->input('vida'),
            'defesa'=>$request->input('defesa'),
            'dano'=>$request->input('dano'),
            'velocidadeAtaque'=>$request->input('velocidadeAtaque'),
            'velocidadeMovimento'=>$request->input('velocidadeMovimento'),
            'ativo'=>true,
            'dataCriacao'=>$now,
            'dataAlteracao'=>$now
        ]);

		return redirect('/herois');
	}

    public function update(Request $request, $heroiID){
        $heroi = Heroi::findOrFail($heroiID);
        $now = date('Y-m-d H:i:s', strtotime('now'));
        $heroi->update([
            'nome'=> $request->input('nome'),
            'claID'=> $request->input('claID'),
            'vida'=>$request->input('vida'),
            'defesa'=>$request->input('defesa'),
            'dano'=>$request->input('dano'),
            'TipoHeroiID'=>$request->input('tipoHeroiID'),
            'velocidadeAtaque'=>$request->input('velocidadeAtaque'),
            'velocidadeMovimento'=>$request->input('velocidadeMovimento'),
            'thumb'=>"",
            'dataAlteracao'=>$now
        ]);

        return redirect('/herois');
    }

    public function edit($heroiID)
    {
        $heroi = Heroi::findOrFail($heroiID);
        $cla = DB::select('select id,nome from tb_cla where ativo = 1');
        $tipo = DB::select('select id,nome from tb_tipo_heroi where ativo = 1');
        $especialidade = DB::select('select id,nome from tb_especialidade where ativo = 1');
        $heroiEspecialidades = $heroi->Especialidade;
        $heroiEspecialidades = explode(",", $heroiEspecialidades);
        
        $params = [
            'clas'=>$cla,
            'tipo'=>$tipo,
            'especialidade'=>$especialidade,
            'heroiEspecialidades'=>$heroiEspecialidades
        ];

        return view('herois_edit', ["heroi"=>$heroi,"params"=>$params]);
    }

    public function destroy($heroiID){

        $heroi = Heroi::findOrFail($heroiID);
        $heroi->delete();
        return $heroi;
    }
}


