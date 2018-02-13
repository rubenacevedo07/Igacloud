<?php

namespace App\Http\Controllers\Api\V1;

use App\Notice;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\NoticesInterface;
use App\Transformers\NoticeTransformer;
use Dingo\Api\Routing\Helpers;
use App\Http\Requests\NoticeCrudRequest as StoreRequest;
use App\Mercado;

class NoticesController extends Controller
{
    use Helpers;
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Notice::paginate(10);

        return $this->response->paginator($query, new NoticeTransformer);

    }

    public function bybussiness(Request $request)
    {
        $id = $request->id;

        $query = Notice::where('mercado_id', '=', $id)
            ->orderBy('created_at','desc')
                            ->paginate();

        return $this->response->paginator($query, new NoticeTransformer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\NoticeCrudRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //extract this to repository!!
        $notice = new Notice;
        
        $notice->title = $request->title;
        $notice->body = $request->body;
        $notice->visible = $request->visible;
        $notice->user_id = $request->user_id;
        $notice->save();

        
        return $this->response->item($notice, new NoticeTransformer);        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $notice = Notice::find($id);

        return $this->response->item($notice, new NoticeTransformer);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticeCrudRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
