<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cla;

class ClaController extends Controller
{
    public function index(){
    	return Cla::paginate();
    }

    public function store(Request $request){
    	
        $now = date('Y-m-d H:i:s', strtotime('now'));
    	
        $cla = Cla::create([
    		'nome'=> $request->input('nome'),
            'ativo'=>true,
            'dataCriacao'=>$now,
            'dataAlteracao'=>$now
    	]);
		
		return $cla;
	}
}
