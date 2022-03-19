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

    public function edit($id , Request $request)
    {

          $themes =  Themes::find($id);
          return view('themes_edit',compact('themes'));

    }

    public function update($id,Request $request)
    {
        $themes = Themes::find($id);
        //dd($id);
        if (!$themes) {
            abort(404);
        } else {
            $this->validate($request, [
                'themes_code' => 'required',
                'themes_name' => 'required',
                'themes_desc' => 'required',
                'themes_link' => 'required',
            ]);

           // dd($request);

            $themes->t_code = $request->themes_code;
            $themes->t_name = $request->themes_name;
            $themes->t_desc = $request->themes_desc;
            $themes->link = $request->themes_link;
            $themes->save();

            return back()->with('success', 'Themes updated successful');
        }
    }

    public function destroy(Request $request)
    {
        //
    }
}
