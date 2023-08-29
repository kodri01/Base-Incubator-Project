<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts = About::find(1);
        $data = About::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        return view("admin.about.index", compact("data", "abouts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $abouts = About::find(1);
        return view("admin.about.create", compact('abouts'));
    }

    public function footer()
    {
        $abouts = About::find(1);
        //
        $about = About::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        return view("layouts.footer", compact("about", "abouts"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'logo' => 'image',
            'contact' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tentang' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
        ]);
        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['logo'] = "$filename";
        }

        About::create($input);
        return redirect()->route('about.index')
            ->with('message', 'Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
        $abouts = About::find(1);
        return view('admin.about.edit', compact('about', 'abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
        $request->validate([
            'name' => 'required',
            'logo' => 'image',
            'contact' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tentang' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
        ]);
        $input = $request->all();
        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['logo'] = "$filename";
        }

        $about->update($input);
        return redirect()->route('about.index')
            ->with('message', 'Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
        $about->delete();
        return redirect()->route('about.index')
            ->with('message', 'Berita Deleted Successfully');
    }
}