<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\City;
use App\Models\Opinis;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

class OpiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::find(1);
        $opinis = Opinis::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(100);
        return view('admin.testimoni.index', compact('opinis', 'abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abouts = About::find(1);
        return view('admin.testimoni.create', compact('abouts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'opinion' => 'required',
            'gambar' => 'required',
            'nama' => 'required',
        ]);

        $input = $request->all();

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['gambar'] = "$filename";
        }

        Opinis::create($input);
        return redirect()->route('opinis.index')
            ->with('message', 'Testimoni added successfully');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opinis $opinis)
    {
        $opinis->delete();
        return redirect()->route('opinis.index')
            ->with('message', 'deleted successfully');
    }
}