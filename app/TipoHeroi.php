<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHeroi extends Model
{
    protected $table = 'tb_tipo_heroi';
    public $fillable = ['nome'];

    public function herois(){

    	return $this->hasMany(Heroi::class);
    }
}
