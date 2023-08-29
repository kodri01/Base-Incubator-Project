<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Berita;
use App\Models\Package;
use App\Models\Category;
use App\Models\Opinis;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::find(2);
        $data = Category::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        return view("admin.categories.index", compact("data", "abouts"));
    }

    public function showCategory()
    {
        $data = Category::all();
        $abouts = About::find(2);
        $about = About::all();
        $berita = Berita::orderBy('created_at', 'desc')->get();
        $packages = Package::Where('status', 1)->latest()->paginate(12);
        $categories = Category::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        $join = Package::orderBy('created_at', 'ASC')->join('categories', 'packages.category_id', '=', 'categories.id')
            ->get(['packages.id', 'packages.created_at', 'packages.image', 'packages.title', 'packages.description', 'categories.name']);
        $opinis = Opinis::orderBy('created_at', 'ASC')->join('users', 'opinis.user_id', '=', 'users.id')
            ->get(['opinis.id', 'opinis.opinion', 'opinis.created_at', 'users.image', 'users.name']);
        return view("pages.index", compact('data', 'packages', 'categories', 'join', 'berita', 'opinis', 'about', 'abouts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abouts = About::find(2);
        return view("admin.categories.create", compact('abouts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image'] = "$filename";
        }


        Category::create($input);


        return redirect()->route('categories.index')->with('message', 'category created successfully.');
    }


    public function myproduct(Category $category)
    {
        $abouts = About::find(2);
        $categories = Category::all();
        if (auth()->user()) {
            $packages = Package::where('user_id', auth()->user()->id)->Where('status', 1)->latest()->paginate(12);
            return view('pages.my-product', compact('packages', 'categories', 'abouts'));
        }
    }

    public function showAll(Category $category)
    {
        $abouts = About::find(2);
        $categories = Category::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        // $packages = Package::Where('status', 1)->latest()->paginate(12);
        $packages = Package::orderBy('created_at', 'ASC')->join('categories', 'packages.category_id', '=', 'categories.id')
            ->get(['packages.id', 'packages.created_at', 'packages.image', 'packages.title', 'packages.description', 'categories.name']);
        return view('pages.allproduct', compact('packages', 'category', 'categories', 'abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $abouts = About::find(2);
        return view('admin.categories.edit', compact('category', 'abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {


        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'image',

        ]);

        $input = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image'] = "$filename";
        }
        $category->update($input);
        return redirect()->route('categories.index')->with('message', 'category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
            ->with('message', 'category deleted successfully');
    }
}