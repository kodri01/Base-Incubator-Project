<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Berita;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreberitaRequest;
// use App\Http\Requests\UpdateberitaRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::find(1);
        $data = Berita::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        return view("admin.beritas.index", compact("data", "abouts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abouts = About::find(1);
        return view("admin.beritas.create", compact("abouts"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreberitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['gambar'] = "$filename";
        }
        Berita::create($input);
        return redirect()->route('beritas.index')->with('message', 'Berita Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(berita $berita)
    {
        $abouts = About::find(1);
        return view('pages.berita_detail', compact('berita', 'abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(berita $berita)
    {
        $abouts = About::find(1);
        return view('admin.beritas.edit', compact('berita', 'abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateberitaRequest  $request
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berita $berita)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image',

        ]);

        $input = $request->all();

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['gambar'] = "$filename";
        }




        $berita->update($input);
        return redirect()->route('beritas.index')->with('message', 'Berita Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(berita $berita)
    {
        $berita->delete();
        return redirect()->route('beritas.index')
            ->with('message', 'Berita Deleted Successfully');
    }
}