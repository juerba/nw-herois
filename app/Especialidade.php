<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $table = 'tb_especialidade';

    public function herois(){
    	return $this->hasMany(HeroiEspecialidade::class);
    }
}
