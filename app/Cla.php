<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cla extends Model
{
	protected $table = 'tb_cla';
    public $fillable = ['nome','ativo','dataCriacao','dataAlteracao'];
    public $timestamps = false;
    
    public function herois(){
    	return $this->hasMany(Heroi::class);
    }
}
