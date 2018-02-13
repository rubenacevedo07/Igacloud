<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;
use App\Role;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'user'=> [
            	'id'			=> $user->id,
                'name'	 		=> $user->name,
                'email' 		=> $user->email,
                'points'		=> $user->points,
                'image'			=> env('APP_URL') . 'uploads/'.$user->image,
                'mercado_id'    => $user->mercado_id
            ]
        ];
    }
}