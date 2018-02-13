<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
	protected $fillable = ['title', 'description'];

    public function mercado()
    {
        return $this->belongsTo('App\Mercado');
    }
}
