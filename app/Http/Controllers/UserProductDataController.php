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
       // $user_product_data = user_product_data::all();

        //userproductdata with product_name base on product_id
        $user_product_data = user_product_data::join('products', 'user_product_datas.product_id', '=', 'products.id')

            ->select('user_product_datas.*', 'user_product_datas.id As upd_id', 'products.*')->get();

       return view('user_product_data_show',compact('user_product_data'));
    }
    public function edit($id,Request $request)
    {

        $user_product_data =  user_product_data::find($id);

          return view('user_product_data_edit',compact('user_product_data'));
    }

    public function update($id,Request $request)
    {
        $user_product_data = user_product_data::find($id);
        if (!$user_product_data) {
            abort(404);
        } else {
            $this->validate($request, [
                'product_id' => 'required',
                'user_id' => 'required',
                'field_data' => 'required',
            ]);


            $user_product_data->product_id = $request->product_id;
            $user_product_data->user_id = $request->user_id;
            $user_product_data->field_data = $request->field_data;
            $user_product_data->save();

            return back()->with('success', 'user product data updated successful');
        }
    }

    public function destroy(Request $request)
    {
        //
    }

}
