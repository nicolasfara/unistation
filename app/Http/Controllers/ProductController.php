<?php

namespace App\Http\Controllers;

use Validator;
use Log;
use App\Product;
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
            'dish_name' => 'required',
            'type' => 'required',
            'dish_price' => 'required',
        ]);

        if ($validator->fails()) {
            return;
        }

        $post_data = $request->all();

        Log::debug($post_data);

        $new_product = new Product;
        $new_product->name = $request->input('dish_name');
        $new_product->price = $request->input('dish_price');
        $new_product->type = $request->input('type');
        $new_product->vendor_id = Auth::id();
        $new_product->save();

        $types = Product::getProductsType();
        $products = Product::where('vendor_id', Auth::id())->get();

        return view('vendor.home', ['types' => $types, 'products' => $products]);
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


// vim: set ts=4 sw=4 :
