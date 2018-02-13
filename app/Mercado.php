<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;
use App\Notice;

class Mercado extends Model
{
    use SoftDeletes;
    use CrudTrait;
    protected $table = 'mercados';

    protected $notices = [];

    protected $hidden = ['descripcion','url_youtube','provincia', 'horarios', 'deleted_at','url_web','url_facebook','localidad','created_at','updated_at','latitud','longitud','categoria','mercadocategory_id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'description', 'image','visible','user_id','discount' ,'amountofpurchases'];

    public function publish(Notice $notice)
    {
        $this->notices[] = $notice;
    }

    public function notices()
    {
        return $this->hasMany('App\Notice');
    }


    public function mercadocategories(){
        return $this->belongsTo('App\Mercadocategory');
    }

    public function notifications(){
        return $this->belongsToMany('App\Notification');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
