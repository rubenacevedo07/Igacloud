<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPasswordNotification as ResetPasswordNotifi;
use App\Notifications\WelcomeMail as WelcomeMailNotification;

class User extends Authenticatable
{
    use Notifiable;
    use CrudTrait;
    use HasRoles; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','points','image','mercado_id'
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotifi($token));
    }


    public function sendWelcomeMail()
    {
        $this->notify(new WelcomeMailNotification());
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function mercado()
    {
        return $this->belongsTo('App\Mercado');
    }

    public function owner(Mercado $mercado)
    {
        $this->mercado_id = $mercado->id;
    }

    public function getId()
    {
        return $this->id;
    }

    
}
