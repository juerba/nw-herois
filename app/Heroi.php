<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Heroi extends Model
{
    //use SoftDeletes;
    
    protected $table = 'tb_heroi';
    public $timestamps = false;
    
    public $fillable = ['nome','claID','tipoHeroiID','thumb','vida','defesa','dano','velocidadeAtaque','velocidadeMovimento','ativo','dataCriacao','dataAlteracao'];

    public function cla(){
        return $this->belongsTo(Cla::class);
    }

    public function tipoHeroi(){
        return $this->belongsTo(TipoHeroi::class);
    }
    
    public function scopeOfCla($query, $claId){
    	return $query->where('claid', $claId);
	}

	
}
