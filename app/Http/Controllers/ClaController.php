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
            'dataCriacao'=>$now,
            'dataAlteracao'=>$now
    	]);
		return $cla;
	}
    public function show($id){
        $cla = Cla::findOrFail($id);
        return $cla;
    }

    public function update(Request $request, $id ){
        $now = date('Y-m-d H:i:s', strtotime('now'));
        $cla = Cla::findOrFail($id);
        $cla->update(['Nome' => $request->input('Nome'), 
                      'DataAlteracao' => $now
                     ]);
        return $cla;
    }
}
