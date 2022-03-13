<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Themes;
class ThemesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('themes_create');
    }


    public function store(Request $request)
    {

        //dd($request);
        $themes = new Themes();
        $themes->t_code = $request->themes_code;
        $themes->t_name = $request->themes_name;
        $themes->t_desc = $request->themes_desc;
        $themes->link = $request->themes_link;
        $themes->is_active = $request->is_active === 'on' ? 1 : 0;
        $themes->save();

        return back()->with('success', 'themes inserted successful');
    }

    public function show(Request $request)
    {

         $themes = Themes::all();

         return view('themes_show',compact('themes'));
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
