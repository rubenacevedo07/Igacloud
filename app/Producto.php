<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $table = 'productos';

    public function mercados()
    {
    	return $this->belongsToMany('App\Mercado');
    }
}
