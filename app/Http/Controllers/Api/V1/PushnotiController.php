<?php

namespace App\Http\Controllers\Api\V1;

use App\Transformers\PushnotiTransformer;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use App\User;
use App\Notification;

class PushnotiController extends Controller
{
	use Helpers;
	public function showbybusiness(Request $request)
	{
		$id = $request->id;
		$notification = Notification::where('mercado_id','=', $id)->paginate();

		return $this->response->paginator($notification, new PushnotiTransformer);
	}

}