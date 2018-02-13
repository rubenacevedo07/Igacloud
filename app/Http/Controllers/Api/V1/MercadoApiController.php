<?php

namespace App\Http\Controllers\Api\V1;

use App\Transformers\MercadoTransformer;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use App\User;
use App\Mercado;

class MercadoApiController extends Controller
{
	use Helpers;
	
	public function showByUser(Request $request)
    {
        $id = $request->id;
    	$user = User::find($id);

    	$mercado = $user->mercado;
        return $this->response->item($mercado, new MercadoTransformer);
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $mercado = Mercado::find($request->id);
        return $this->response->item($mercado, new MercadoTransformer);
    }
}
