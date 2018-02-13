<?php

namespace App\Transformers;
use League\Fractal\TransformerAbstract;
use App\Notification;

class PushnotiTransformer extends TransformerAbstract
{
    public function transform(Notification $model)
    {
        return [ 
            'title'  	  => $model->title,
            'content'     => $model->description,
            'business'    => $model->mercado_id
        ];
    }
}