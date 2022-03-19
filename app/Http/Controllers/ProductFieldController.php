<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product_field;
class ProductFieldController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('product_field_create');

    }


    public function store(Request $request)
    {

        //dd($request);
        $product_field = new Product_Field();
        $product_field->field_name = $request->field_name;
        $product_field->field_type = $request->field_type;
        $product_field->field_id = $request->field_id;
        $product_field->field_classes = $request->field_classes;
        $product_field->product_id = $request->product_id;
        $product_field->is_active = $request->is_active === 'on' ? 1 : 0;
        $product_field->save();

        return back()->with('success', 'product Field inserted successful');
    }

    public function show(Request $request)
    {

         $product_field = product_field::all();

         return view('product_field_show',compact('product_field'));
    }

    public function edit( $id , Request $request)
    {

//dd($request);

        //$product_field =  Product_field::where("id",$id)->get();
        $product_field =  Product_field::find($id);

        return view('product_field_edit',compact('product_field'));
//$product_field_edit = product_field::select('select * from Product_field where request = ?', [$request]);

    }

    public function update($id , Request $request)
    {
        //

        //dd($request);
        $Product_field = Product_field::find($id);
        if (!$Product_field) {
            abort(404);
        } else {
            $this->validate($request, [
                'field_name' => 'required',
                'field_type' => 'required',
                'field_id' => 'required',
                'field_classes' => 'required',
                'product_id' => 'required',

            ]);


            $Product_field->field_name = $request->field_name;
            $Product_field->field_type = $request->field_type;
            $Product_field->field_id = $request->field_id;
            $Product_field->field_classes = $request->field_classes;
            $Product_field->product_id = $request->product_id;
            $Product_field->save();

            return back()->with('success', 'Product field updated successful');
        }
    }

    public function destroy(Request $request)
    {
        //
    }
}
