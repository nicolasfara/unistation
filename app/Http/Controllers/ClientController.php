<?php

namespace App\Http\Controllers;

use App\Client;
use Log;
use Storage;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $client = Client::find($id);

        $client_name = $request->input('client_name');
        $client_surname = $request->input('client_surname');
        $client_email = $request->input('client_email');

        $client_img = $request->input('newavatar');

        if ($client_name != ''){
            $client->name = $client_name;
        }

        if ($client_email != ''){
            $client->email = $client_email;
        }

        if ($request->hasFile('newavatar')){
            $file = $request->file('newavatar');
            $path = Storage::putFile('avatar', $file, 'public');
            if ($client->image != 'placeholders/imageprofile-placeholder-350x350.png') {
                Storage::delete($client->image);
            }
            $client->image = $path;
        }

        $client->save();
        return redirect()->route('settings');
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

// vim: set ts=4 sw=4 :
