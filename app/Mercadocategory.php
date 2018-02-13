<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercadocategory extends Model
{
	protected $table = 'mercadocategories';

    public function mercados(){
    	return $this->hasMany('App\Mercado');
    }
}
