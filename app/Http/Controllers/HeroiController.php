<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroi;
use App\Http\Requests;
use App\Cla;
use DB;
use Image;

class HeroiController extends Controller
{

	public function index(){
	    //$tipo = DB::select('select id,nome from tb_tipo_heroi');
       	//$herois = Heroi::all();
        $herois =  DB::select('select h.thumb,h.id,h.nome,t.nome as tipo from tb_heroi h inner join tb_tipo_heroi t on h.tipoHeroiID = t.id');
        return view("herois")->with('herois',$herois);
        //return view('herois', ["herois"=>$herois,"tipo"=>$tipo]);
    
        //return view("herois")->with('herois',$herois);
	}
   
	public function show($heroiID){
	   $heroi = Heroi::findOrFail($heroiID);
       return $heroi;    
	}
    
    public function store(Request $request){
    	
        $now = date('Y-m-d H:i:s', strtotime('now'));
        
        $imageName = time().'.'.$request->thumb->getClientOriginalExtension();
        $request->thumb->move(public_path('/img'), $imageName);

        $especialidades = "";
        for($i=1;$i<9;$i++){
            if($request->input('especialidadeID_'.$i)){
                $especialidades .= $i.",";
            }
        }
        
        $heroi = Heroi::create([
            'nome'=> $request->input('nome'),
            'claID'=> $request->input('claID'),
            'tipoHeroiID'=>$request->input('tipoHeroiID'),
            'especialidade' => $especialidades,
            'thumb'=>$imageName,
            'vida'=>$request->input('vida'),
            'defesa'=>$request->input('defesa'),
            'dano'=>$request->input('dano'),
            'velocidadeAtaque'=>$request->input('velocidadeAtaque'),
            'velocidadeMovimento'=>$request->input('velocidadeMovimento'),
            'dataCriacao'=>$now,
            'dataAlteracao'=>$now
        ]);

		return redirect('/herois');
	}

    public function update(Request $request, $heroiID){
        $heroi = Heroi::findOrFail($heroiID);
        $now = date('Y-m-d H:i:s', strtotime('now'));

        $imageName = $request->input('oldthumb');

        if($request->thumb){
            $imageName = time().'.'.$request->thumb->getClientOriginalExtension();
            $request->thumb->move(public_path('/img'), $imageName);
        }

        $especialidades = "";
        for($i=1;$i<9;$i++){
            if($request->input('especialidadeID_'.$i)){
                $especialidades .= $i.",";
            }
        }

        $heroi->update([
            'nome'=> $request->input('nome'),
            'claID'=> $request->input('claID'),
            'vida'=>$request->input('vida'),
            'defesa'=>$request->input('defesa'),
            'dano'=>$request->input('dano'),
            'tipoHeroiID'=>$request->input('tipoHeroiID'),
            'especialidade' => $especialidades,
            'velocidadeAtaque'=>$request->input('velocidadeAtaque'),
            'velocidadeMovimento'=>$request->input('velocidadeMovimento'),
            'thumb'=>$imageName,
            'dataAlteracao'=>$now
        ]);

        return redirect('/herois');
    }

    public function edit($heroiID)
    {
        $heroi = Heroi::findOrFail($heroiID);
        $cla = DB::select('select id,nome from tb_cla');
        $tipo = DB::select('select id,nome from tb_tipo_heroi');
        $especialidade = DB::select('select id,nome from tb_especialidade');
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


