<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Mercado;

class MercadoTransformer extends TransformerAbstract
{
    public function transform(Mercado $mercado)
    {
        return [
            'name'	 		=> $mercado->mercado,
            'address' 		=> $mercado->domicilio,
            'logo'			=> env('APP_URL') . 'uploads/'.$mercado->logo,
            'image'			=> env('APP_URL') . 'uploads/'.$mercado->imagen,
            'phone'         => $mercado->telefono,
            'discount'      => $mercado->discount,
            'amount'        => $mercado->amountofpurchases
        ];
    }
}