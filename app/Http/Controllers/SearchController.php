<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroi;
use App\Http\Requests;
use App\Cla;
use DB;
use Image;

class SearchController extends Controller
{
	public function index(Request $request){
        $especialidades = "";
        for($i=1;$i<9;$i++){
            if($request->input('especialidadeID_'.$i)){
                $especialidades .= $i.",";
            }
        }

        $query = "SELECT *, t.nome AS Tipo FROM tb_heroi h INNER JOIN tb_tipo_heroi t on h.TipoHeroiID = t.id WHERE ClaID=".$request->get('claID')." OR TipoHeroiID=".$request->get('tipoHeroiID');

        if(!empty($request->get('nome'))){
        	$query .= " OR Nome LIKE '%".$request->get('nome')."%'";
        }

        if($especialidades !== ""){
        	$query .= " OR Especialidade LIKE '%".$especialidades."%'";
        }
		$herois = DB::select($query);
		return view('search',['herois'=>$herois]);
	}
}
