<?php

namespace App\Http\Controllers;

use Validator;
use Log;
use App\Product;
use Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('vendor.home');
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
        $validator = Validator::make($request->all(), [
            'new_dish_name' => 'required',
            'new_type' => 'required',
            'new_dish_price' => 'required',
        ]);

        if ($validator->fails()) {
            return;
        }

        $post_data = $request->all();

        Log::debug($post_data);

        $new_product = new Product;
        $new_product->name = $request->input('new_dish_name');
        $new_product->price = $request->input('new_dish_price');
        $new_product->type = $request->input('new_type');
        $new_product->vendor_id = Auth::id();

        if ($request->hasFile('product_img')) {
            $path = $request->file('product_img')->save('products');
            Storage::delete($new_product->image);
            $new_product->image = $path;
        }

        $new_product->save();

        return $this->index();
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
        $update_product = Product::find($id);

        $update_product->name = $request->input('update_dish_name');
        $update_product->price = $request->input('update_dish_price');

        if ($request->hasFile('productimg')) {
            $file = $request->file('productimg');
            $path = Storage::putFile('products', $file, 'public');
            if ($update_product->image != 'placeholders/imageprofile-placeholder-350x350.png') {
                Storage::delete($update_product->image);
            }
            $update_product->image = $path;
        }

        $update_product->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return $this->index();
    }
}


// vim: set ts=4 sw=4 :
