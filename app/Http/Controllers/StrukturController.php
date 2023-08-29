<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::find(1);
        $struktur = Struktur::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(100);
        return view('admin.struktur.index', compact('struktur', 'abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abouts = About::find(1);
        return view('admin.struktur.create', compact('abouts'));
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
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => ['max:5000', 'mimes:jpeg,png,bmp'],
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
        ]);

        $input = $request->all();

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['gambar'] = "$filename";
        }
        Struktur::create($input);
        return redirect()->route('strukturs.index')
            ->with('message', 'added successfully');
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
    public function edit(Struktur $struktur)
    {
        $abouts = About::find(1);
        return view('admin.struktur.edit', compact('struktur', 'abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Struktur $struktur)
    {
        $input = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => ['max:5000', 'mimes:jpeg,png,bmp'],
            // 'gambar' => ['max:5000', 'mimes:jpeg,png,bmp', 'dimensions:width=570,height=670'],
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['gambar'] = "$filename";
        }

        $struktur->update($input);
        return redirect()->route('strukturs.index')
            ->with('message', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktur $struktur)
    {
        $struktur->delete();
        return redirect()->route('strukturs.index')
            ->with('message', 'deleted successfully');
    }
}