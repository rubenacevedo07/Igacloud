<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Notice;

class NoticeTransformer extends TransformerAbstract
{
    public function transform(Notice $model)
    {
        return [ 
            'title'             => $model->title,
            'full_description'  => $model->body,
            'visible'           => $model->visible,
            'image'		        => env('APP_URL') . 'uploads/' .$model->featured_image,
            'business'          => $model->mercado_id
        ];
    }
}