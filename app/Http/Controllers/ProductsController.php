<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;
class ProductsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('products_create');
    }


    public function store(Request $request)
    {
        //
      //  dd($request);
        $products = new Products();
        $products->p_code = $request->p_code;
        $products->p_name = $request->p_name;
        $products->p_desc = $request->p_desc;
        $products->is_active = $request->is_active === 'on' ? 1 : 0;
        $products->save();

        return back()->with('success', 'product inserted successful');


    }

    public function show(Request $request)
    {



        $products = Products::all();

        return view('products_show',compact('products'));
    }

    public function edit($id , Request $request)
    {

       // $products = Products::where("id",$id)->get();
        //echo "<pre>".print_r($products,true)."</pre>";
          //$product_field =  Product_field::where("id",$id)->get();
          $products =  Products::find($id);

          return view('products_edit',compact('products'));
  //$product_field_edit = product_field::select('select * from Product_field where request = ?', [$request]);


    }

    public function update($id,Request $request)
    {
        $Products = Products::find($id);
        if (!$Products) {
            abort(404);
        } else {
            $this->validate($request, [
                'p_code' => 'required',
                'p_name' => 'required',
                'p_desc' => 'required',
            ]);


            $Products->p_code = $request->p_code;
            $Products->p_name = $request->p_name;
            $Products->p_desc = $request->p_desc;
            $Products->save();

            return back()->with('success', 'Product updated successful');
        }
    }

    public function destroy(Request $request)
    {
        //
    }
}
