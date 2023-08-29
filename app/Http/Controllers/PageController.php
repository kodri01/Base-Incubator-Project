<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Berita;
use App\Models\Opinis;
use App\Models\Struktur;
use App\Models\User;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $packages = User::Where('status', 1)->latest()->paginate(12);
        $abouts = About::find(1);
        $brand = User::Where('status', 1)->Where('roles', 0)->filter(request(['search']))->latest()->paginate(16);
        $brands = User::orderBy('id', 'desc')->Where('roles', 0)->filter(request(['search']))->oldest()->paginate(32);
        $admin = User::orderBy('id', 'ASC')->Where('roles', 1)->filter(request(['search']))->oldest()->paginate(10);
        $opini = Opinis::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        $strukturs = Struktur::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        $berita = Berita::orderBy('created_at', 'desc')->get();
        return view("pages.index", compact('abouts', 'brand', 'brands', 'berita', 'admin', 'opini', 'strukturs'));
    }

    public function allbrand()
    {
        $abouts = About::find(1);
        $brand = User::orderBy('id', 'asc')->Where('roles', 0)->filter(request(['search']))->oldest()->paginate(10000);
        return view('pages.allbrand', compact('brand', 'abouts'));
    }

    public function editproduct(User $user)
    {
        $abouts = About::find(1);
        return view('pages.editproduct', compact('user', 'abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $abouts = About::find(1);
        return view('pages.brand', compact('user', 'abouts'));
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
    public function destroy($id)
    {
        //
    }
}