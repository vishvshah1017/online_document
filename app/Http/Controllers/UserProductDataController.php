<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_product_data;
class UserProductDataController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user_product_data_create');
    }

    public function store(Request $request)
    {
         //dd($request);
         $user_product_data = new User_Product_Data();
         $user_product_data->product_id = $request->product_id;
         $user_product_data->user_id = $request->user_id;
         $user_product_data->field_data= $request->field_data;
         $user_product_data->save();
         return back()->with('success', 'User Product Data inserted successful');
    }

    public function show(Request $request)
    {
        $user_product_data = user_product_data::all();
       return view('user_product_data_show',compact('user_product_data'));
    }
    public function edit(Request $request)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Request $request)
    {
        //
    }

}
