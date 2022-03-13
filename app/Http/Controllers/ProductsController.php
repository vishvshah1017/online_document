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


    }

    public function show(Request $request)
    {



        $products = Products::all();

        return view('products_show',compact('products'));
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
