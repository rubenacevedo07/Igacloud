<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mercado;
use Carbon\Carbon; 
use Image;
use Storage;
use Purifier;
use Session;
use App\Notification;

class PushAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idmercado = Auth::user()->mercado_id;
           $advise = null;
        if(! $idmercado){
            $advise = 'Primero proceda a cargar su negocio en la plataforma';
        }

        $pushes = Notification::where('mercado_id', $idmercado)->orderBy('id','desc')->paginate(7);
            return view('admin.push.index')
                ->withPushes($pushes)->withAdvise($advise);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.push.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request, array(

                'title'         => 'required|max:255',
                'description'         => 'required|max:1000'
            ));

            $push = new Notification;

            $push->title = $request->title;
            $push->description = $request->description;
            $push->mercado_id = Auth::user()->mercado_id;
            $push->save();
            
            if(!$this->sendNotification( $push->title, $push->description)){
				Session::flash('error', 'Error al enviar la notificacion!');
			}
            

            Session::flash('success', 'La notificación fue cargada y enviada exitosamente!');

            return redirect()->route('push.show', $push->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $push = Notification::find($id);

        return view('admin.push.show')
            ->withPush($push);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $push = Notification::find($id);

        return view('admin.push.edit')
                ->withPush($push);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request, array(
                'title'          => 'required|max:255',
                'description'    => 'required|max:1000'
            ));
          $push = Notification::find($id);

          $push->title = $request->input('title');
          $push->description = $request->input('description');
          $push->mercado_id = Auth::user()->mercado_id;
          $push->save();
   
          Session::flash('success', 'La notificación fue actualizada exitosamente!');

         return redirect()->route('push.show', $push->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notificación = Notification::find($id);

        $notificación->delete();

        Session::flash('success', 'Notificación eliminada');
        return redirect()->route('push.index');
    }
    /**
     * Send Notifications.
     *
     * 
     * @return true or false
     */
    
    public function sendNotification($title, $message){
    	
				$curl = curl_init();
				$token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJkMjhlOTU0Ny01Y2RiLTQ3OTItYTJmZC0yNTYxYTUxMWM2M2IifQ.xhjkMYdvFr8mrFIvFrZ7CBkrs_JqSDmiEHmGmlkORFw";
				$data = array(
				          'tokens' => array('ewdWM9hOrqQ:APA91bGxwJxSgf4UOzRhM3jn7LUaOgp_LLPUvPp7OEkSgAVBub8BT0emjdIknuUWi93KKuEM2pyfFeT2q5P0KcDFIhEo0RwdRRz9S3QGmUgqj59r5c9_yhu828v4U9fAWmB4uiQAU8hE'), 
						  'profile' => "peshapp",
				          'notification' => array('message' => $message,'title'=>$title),   
					      'send_to_all' => true
				          );
				$content = json_encode($data);			  
				curl_setopt_array($curl, array(
				CURLOPT_URL => "https://api.ionic.io/push/notifications",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => $content,
				CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_HTTPHEADER => array(
				"Authorization: Bearer $token",
				"Content-Type: application/json"
				),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);

				curl_close($curl);

				if ($err) {
				//echo "cURL Error #:" . $err;
				return false;
				} else {
				//echo $response;
				return true;
				}

	}
    
	
}
