<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;
use App\Role;

class ImageTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'image' => env('APP_URL') .'uploads/'.$user->image
        ];
    }
}