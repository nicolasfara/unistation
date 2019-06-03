<?php

namespace App\Http\Controllers;

use App\Vendor;
use Log;
use Storage;
use Illuminate\Http\Request;

class VendorController extends Controller
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
        $vendor = Vendor::find($id);

        $vendor_name = $request->input('vendor_name');
        $vendor_email = $request->input('vendor_email');
        $vendor_piva = $request->input('vendor_piva');
        $vendor_img = $request->input('newavatar');

        if ($vendor_name != ''){
            $vendor->name = $vendor_name;
        }

        if ($vendor_email != ''){
            $vendor->email = $vendor_email;
        }

        if ($vendor_piva != ''){
            $vendor->p_iva = $vendor_piva;
        }

        if ($request->hasFile('newavatar')){
            $file = $request->file('newavatar');
            $path = Storage::putFile('avatar', $file, 'public');
            if ($vendor->image != 'placeholders/imageprofile-placeholder-350x350.png') {
                Storage::delete($vendor->image);
            }
            $vendor->image = $path;
        }

        $vendor->save();
        return redirect()->route('vendor.home');
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
