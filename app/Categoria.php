<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	public function produtos()
    {
    	//ele vai pertencer a varios 1 para varios
    	return $this->hasMany('App\Produto');
    }
    
}
