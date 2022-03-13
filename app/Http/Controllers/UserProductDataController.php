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
        //
    }

    public function store(Request $request)
    {
        //
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
