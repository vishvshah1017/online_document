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
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {

         $product_field = product_field::all();

         return view('product_field_show',compact('product_field'));
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
