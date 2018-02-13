<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Session;
use Log;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $idu = Auth::user()->mercado_id;
        if(! $idu){
            $clients = null;
        return view('admin.clients.index')
                ->withClients($clients);        
                }
        $clients = User::where('mercado_id',$idu)
            ->role('client')
            ->paginate();

        return view('admin.clients.index')
                ->withClients($clients);
    }

    public function addPoints(Request $request)
    {

        $client = User::find($request->id);

        $client->points += $request->puntos;
        $client->save();

        Session::flash('success', 'El cliente ' . $client->name .' ha obtenido '. $request->puntos . ' puntos!');

        return redirect()->route('clients.index');
    }

    public function quitpoints(Request $request)
    {

        $client = User::find($request->id);

        $client->points -= $request->points;
        $client->save();

        Session::flash('success', 'El cliente ' . $client->name .' recibió descuento de '. $request->points . ' puntos.');

        return redirect()->route('clients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
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
