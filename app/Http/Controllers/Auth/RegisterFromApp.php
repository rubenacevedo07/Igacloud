<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use Dingo\Api\Routing\Helpers;

class RegisterFromApp extends Controller
{
    use AuthenticatesUsers;
    use Helpers;

    
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    

    public function register(Request $request)
    {
        $user = User::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => bcrypt($request->password)
        ]);
        $user->mercado_id = $request->mercado_id;
        $user->assignRole('Client');
        $user->save();
        return response()->json(compact('user'));
    }
}
