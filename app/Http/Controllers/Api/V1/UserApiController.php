<?php

namespace App\Http\Controllers\Api\V1;

use App\Transformers\UserTransformer;
use App\Transformers\ImageTransformer;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use App\User;
use Image;


class UserApiController extends Controller
{

	use Helpers;
	
	public function show(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);

        return $this->response->item($user, new UserTransformer);

    }

    public function profile(Request $request)
    {

         $this->validate($request, array(
                'id'         => 'required',
                'image'=> 'image:jpg,jpeg,png'
         ));

        $id = $request->id;

        $user = User::find($id);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);

            Image::make($image)->resize(null, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $user->image = $filename;
        }
        
        $user->save();


        return $this->response->item($user, new ImageTransformer);

    }

    
	
}