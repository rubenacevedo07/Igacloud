<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;

class Notice extends Model
{
    use SoftDeletes;
    use CrudTrait;

    protected $table = 'notices';

    protected $fillable = ['title', 'body', 'visible'];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/

    public function mercados()
    {
    	return $this->belongsTo('App\Mercado');
    }

    public function shortDesc()
    {
        $short = substr(strip_tags($this->body), 0, 200);
        return $short;
    }
}
