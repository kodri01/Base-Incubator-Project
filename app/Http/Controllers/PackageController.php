<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\City;
use App\Models\Package;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::find(2);
        $donations = Package::orderBy('city_id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        $donation_city = Package::orderBy('id', 'ASC')->join('cities', 'packages.city_id', '=', 'cities.id')
            ->get(['packages.id', 'cities.name']);
        // dd($user_city);
        return view('admin.packages.index', compact('donations', 'donation_city', 'abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abouts = About::find(2);
        $categories = Category::orderBy('id', 'ASC')->get();
        $cities = City::orderBy('id', 'ASC')->get();
        $users = User::orderBy('id', 'ASC')->get();
        return view('admin.packages.create', compact('cities', 'categories', 'users', 'abouts'));
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
            'doner_name' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'condition' => 'required',
            'title' => 'required',
            'phone_number' => 'required',
            // |regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
            'city_id' => '',
            'image' => 'image',
            'image2' => 'image',
            'image3' => 'image',
            'description' => '',
        ]);

        $input = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image'] = "$filename";
        }
        if ($request->file('image2')) {
            $file = $request->file('image2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image2'] = "$filename";
        }
        if ($request->file('image3')) {
            $file = $request->file('image3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image3'] = "$filename";
        }


        Package::create($input);



        // if (request('image')) {

        //     $imagePath = request('image')->store('uploads', 'public');
        // }
        // $save = Package::create(array_merge($data , request('image') != null ? ['image' => $imagePath ] : [] ));
        return redirect()->route('packages.index')
            ->with('message', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        $abouts = About::find(2);
        return view('pages.single-product', compact('package', 'abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $abouts = About::find(2);
        $categories = Category::orderBy('id', 'ASC')->get();
        $cities = City::orderBy('id', 'ASC')->get();
        return view('admin.packages.edit', compact('categories', 'cities', 'package', 'abouts'));
    }

    public function editproduct(Package $package)
    {
        $abouts = About::find(2);
        return view('pages.editproduct', compact('package', 'abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $data = $request->validate([
            'doner_name' => 'required',
            'category_id' => 'required',
            'condition' => 'required',
            'title' => 'required',
            'phone_number' => 'required',
            // |regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
            'city_id' => '',
            'image' => 'image',
            'image2' => 'image',
            'image3' => 'image',
            'description' => '',
        ]);

        $input = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image'] = "$filename";
        }
        if ($request->file('image2')) {
            $file = $request->file('image2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image2'] = "$filename";
        }
        if ($request->file('image3')) {
            $file = $request->file('image3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image3'] = "$filename";
        }

        $package->update($input);

        // if (request('image')) {
        //     $imagePath = request('image')->store('uploads', 'public');
        // }
        // $package->update(array_merge($data, request('image') != null ? ['image' => $imagePath] : []));
        return redirect()->route('packages.index')
            ->with('message', 'Your Product Updated Successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */

    public function updatemyproduct(Request $request, Package $package)
    {
        $data = $request->validate([
            'title' => 'required',
            'condition' => 'required',
            'image' => 'image',
            'image2' => 'image',
            'image3' => 'image',
            'description' => '',
        ]);

        $input = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image'] = "$filename";
        }
        if ($request->file('image2')) {
            $file = $request->file('image2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image2'] = "$filename";
        }
        if ($request->file('image3')) {
            $file = $request->file('image3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['image3'] = "$filename";
        }

        $package->update($input);

        return redirect()->route('categories.myproduct', 1)->withSuccess(__('Your Product Updated Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')
            ->with('message', 'Product Has Ben Deleted');
    }

    public function approve($id)
    {
        $Package = new Package;
        $Package->where('id', $id)->update(['status' => 1]);
        return redirect()->route('packages.index')
            ->with('message', 'Your Product has been approved successfully');
    }

    public function approveAll()
    {
        DB::table('packages')->update(['status' => 1]);
        // $user = new User;
        // $user->update(['status' => 1]);
        return redirect()->route('packages.index')
            ->with('message', 'All Product have been approved successfully');
    }

    public function softDelete(Package $package)
    {
        //
        $package->delete();
        return redirect()->route('categories.show', 1)->withSuccess(__('successfully.'));
    }
}