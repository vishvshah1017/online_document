<?php

namespace App\Http\Controllers;

use App\Models\product_field;
use App\Models\products;
use App\Models\user_product_data;
use Illuminate\Http\Request;

class UserProductsCrud extends Controller
{
    //

    public function openViewForProduct($product_id)
    {

        $product_fields = product_field::where('product_id', $product_id)->get();

        return view('user_products_crud', compact('product_fields'));

    }
    public function index($upd_id)
    {

        //get field_data from user_product_data table
        $field_data = user_product_data::where('id', $upd_id)->get('field_data')->first()->toArray();


        return view('themes.bcard', compact('field_data'));

    }

    public function UserOrderdProduct()
    {

        $user_id = auth()->user()->id;
        $user_products = user_product_data::join('products', 'user_product_datas.product_id', '=', 'products.id')
            ->where('user_id', $user_id)->select('user_product_datas.*','user_product_datas.id As upd_id', 'products.*')->get();



        //convert user_products to array
        $user_products_array = $user_products->toArray();
        //convert $user_products_array->field_data  to array
        foreach ($user_products_array as $key => $value) {


            $user_products_array[$key]['field_data'] = json_decode($value['field_data'],true);
        }

      //  $user_products_array = json_decode(json_encode($user_products), true);

        return view('orderd_user_product_data', compact('user_products_array'));

    }

    public function userproductstore(Request $request , $product_id)
    {

            $product_code = products::where('id', $product_id)->value('p_code');
            $field_ids = product_field::where('product_id', $product_id)->where('field_type', 'file')->pluck('field_id');
            $files = [];
            foreach($field_ids as $field_id)
            {
                $image_name = $request->file($field_id)->getClientOriginalName();
                $file_type = $request->file($field_id)->getClientOriginalExtension();
                $random_string = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
                $new_file_name = $random_string.'_'. $product_code . '_' . $image_name;
                if ($file_type == 'jpg' || $file_type == 'png' || $file_type == 'jpeg' || $file_type == 'gif') {
                    $request->file($field_id)->move(public_path('upload/product_images'),  $new_file_name);
                    $files[$field_id] =  'upload/product_images/'. $new_file_name;
                } else {
                    $request->file($field_id)->move(public_path('upload/product_files'),   $new_file_name);
                    $files[$field_id] =  'upload/product_files/'. $new_file_name;
                }
            }
            $form_data = $request->except('_token');
            $json_data = array_merge($form_data, $files);
            $json_data = json_encode($json_data);

            $user_product_data =  new user_product_data();
            $user_product_data->product_id = $product_id;
            $user_product_data->user_id = auth()->user()->id;
            $user_product_data->field_data = $json_data;
            $user_product_data->created_at = now();
            $user_product_data->updated_at = now();
            $user_product_data->save();

            return back()->with('success', 'Product Data inserted successful');






    }
}
