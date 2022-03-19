<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UsersController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('users_create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {

        $users = Users::all();
        return view('users_show',compact('users'));
    }
    public function edit($id)
    {
        $users = Users::where("id",$id)->get();
        //echo "<pre>".print_r($users,true)."</pre>";
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
