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
        //
    }


    public function store(Request $request)
    {
        //
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
