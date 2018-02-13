<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;
use App\Notice;

class Business extends Model
{
    use SoftDeletes;
    use CrudTrait;
    protected $table = 'businesses';

    protected $notices = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'description', 'image','visible','user_id'];

    public function publish(Notice $notice)
    {
        $this->notices[] = $notice;
    }

    public function notices()
    {
        return $this->hasMany('App\Notice');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
