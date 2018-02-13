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
use App\Notice;

class NoticeAdminController extends Controller
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

        $notices = Notice::where('mercado_id', $idmercado)->orderBy('id','desc')->paginate(7);
        return view('admin.notices.index')
            ->withNotices($notices);
    }

    public function pendientes()
    {
        $mercados = Mercado::where('visible', 0)->orderBy('id','desc')->paginate(7);
        return view('admin.mercados.index')
            ->withMercados($mercados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.notices.create');
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
                'body'          => 'required',
                'featured_image'=> 'image'
            ));

            $notice = new Notice;
            $notice->title = $request->title;
            $notice->body = Purifier::clean($request->body);
            $notice->mercado_id = Auth::user()->mercado_id;

            if($request->hasFile('featured_image')){

                $image = $request->file('featured_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('uploads/' . $filename);

                Image::make($image)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($location);

                $notice->featured_image = $filename;
            }
            else{
                $notice->featured_image = " ";   
            }
            
            $notice->save();

                    Session::flash('success', 'La noticia fue cargada exitosamente!');

        return redirect()->route('notices.show', $notice->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::find($id);

        return view('admin.notices.show')
            ->withNotice($notice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);

        return view('admin.notices.edit')
                ->withNotice($notice);

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
                'title'         => 'required|max:255',
                'body'          => 'required',
                'featured_image'=> 'image'
            ));

            $notice = Notice::find($id);
            $notice->title = $request->input('title');
            $notice->body = Purifier::clean($request->input('body'));
            $notice->mercado_id = Auth::user()->mercado_id;

            if($request->hasFile('featured_image')){
                $image = $request->file('featured_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('uploads/' . $filename);

                Image::make($image)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($location);

                $notice->featured_image = $filename;
            }
            else{
                $notice->featured_image = $notice->featured_image;   
            }
            
            $notice->save();

            Session::flash('success', 'La noticia fue actualizada exitosamente!');

        return redirect()->route('notices.show', $notice->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);

      
        Storage::delete($notice->featured_image);

        $notice->delete();

        Session::flash('success', 'Noticia Eliminada');
        return redirect()->route('notices.index');
    }
}
