<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\City;
use App\Models\Category;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;


class Donation_FormController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $donations = Package::all();
        $abouts = About::find(2);
        $city = City::all();
        $category = Category::all();
        $users = User::all();
        return view('pages.package_form', compact('city', 'category', 'users', 'abouts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { {
            $input = $request->all();

            //Validate the input
            $request->validate([

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

            //Redirect the user and send friendly message
            return redirect()->route('product.create')
                ->with('donation', 'Your Product is pending until approval.');
        }
    }
}