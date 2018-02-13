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

class LoginController extends Controller
{
    use AuthenticatesUsers;
    use Helpers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');
        
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        $user = JWTAuth::authenticate($token);


        // all good so return the token
        return $this->response->item($user, new UserTransformer);
    }

    
    public function getUserByEmail(Request $request)
    {
        // grab credentials from the request
        $email = $request->email;

        $user = User::where('email', $email)->first();

        if(! $user)
        {
            return response()->json(['error' => 'couldnt_find_email'], 401);
        }
        
        $token = JWTAuth::fromUser($user);
        $user = JWTAuth::authenticate($token);

        return $this->response->item($user, new UserTransformer);

    }

    public function register(Request $request)
    {
        /*
        *$this->validate($request, array(
         *       'name'      => 'required|max:255',
          *      'email'     => 'required|email|max:255|unique:users',
           *     'password'  => 'required|min:6',
            *    'mercadoid' => 'required|int',
        *));
        */
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->mercado_id = $request->mercadoid;
        
        $user->save();  
        $user->assignRole('client');
        $user->sendWelcomeMail();
        return $this->response->item($user, new UserTransformer);
    }
    
    // Esta funcion es para obligar a los clientes aactualizar la app
        public function checkupdate(Request $request)
    {

		$ping = $request->ping;
        echo json_encode(array('update'=>'false' ,'request' => $ping));
        return;

    }
}
