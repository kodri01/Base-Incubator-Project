<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\City;
use App\Models\Opinis;
use App\Models\User;
use App\Models\Package;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $abouts = About::find(1);
        $users = User::orderBy('id', 'ASC')->Where('roles', 0)->filter(request(['search']))->oldest()->paginate(100);
        return view('admin.users.index', compact('users', 'abouts'));
    }

    public function user()
    {
        $abouts = About::find(1);
        $users = User::orderBy('id', 'ASC')->filter(request(['search']))->latest()->paginate(100);
        return view('admin.users.user', compact('users', 'abouts'));
    }

    public function edit(User $user)
    {
        $abouts = About::find(1);
        return view('admin.users.edit', compact('user', 'abouts'));
    }

    public function update(Request $request, User $user)
    {
        $input = $request->validate([
            'name' => 'required|regex:/^[a-z ]+$/i',
            'email' => ['required', 'email'],
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'roles' => '',
            'alamat' => ['required'],
            'name_brand' => ['required'],
            'logo' => ['max:5000', 'mimes:jpeg,png,bmp'],
            'image' => ['max:5000', 'mimes:jpeg,png,bmp'],
            'image2' => ['max:5000', 'mimes:jpeg,png,bmp'],
            'image3' => ['max:5000', 'mimes:jpeg,png,bmp'],
            'domisili' => ['required'],
            'description' => ['required'],
            'cerita' => ['required'],
            'tahun' => ['required'],
            'link' => ['required'],
        ]);

        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['logo'] = "$filename";
        }
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

        $user->update($input);
        return redirect()->route('users.user')
            ->with('message', 'user updated successfully');
    }


    public function updateimage(Request $request, User $user)
    {
        $input = $request->validate([
            'name' => 'required|regex:/^[a-z ]+$/i',
            'email' => ['required', 'email'],
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'roles' => '',
            'alamat' => ['required'],
            'name_brand' => ['required'],
            'logo' => ['max:5000', 'mimes:jpeg,png,bmp'],
            'image' => ['max:5000', 'mimes:jpeg,png,bmp'],
            'image2' => ['max:5000', 'mimes:jpeg,png,bmp'],
            'image3' => ['max:5000', 'mimes:jpeg,png,bmp'],
            'domisili' => ['required'],
            'description' => ['required'],
            'cerita' => ['required'],
            'tahun' => ['required'],
            'link' => ['required'],

        ]);
        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $input['logo'] = "$filename";
        }
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

        $user->update($input);
        return redirect()->route('brand.show', [$user->id])
            ->with('message', 'user updated successfully');
    }

    public function create()
    {
        $abouts = About::find(1);
        return view('admin.users.create', compact('abouts'));
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => ['required', 'email'],
            'phonenumber' => 'required',
            // |regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
            'roles' => '',
            'alamat' => ['required'],
            'name_brand' => ['required'],
            'logo' => ['image'],
            'image' => ['image'],
            'image2' => ['image'],
            'image3' => ['image'],
            'domisili' => ['required'],
            'description' => ['required'],
            'tahun' => ['required'],
            'link' => ['required'],
        ]);

        if (request('logo')) {
            $imagePath = request('logo')->store('uploads', 'public');
        }
        $save = User::create(
            array_merge($data, request('logo') != null ? ['logo' => $imagePath] : [])
        );
        return redirect()->route('users.index')
            ->with('message', 'User added successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.user')
            ->with('message', 'user deleted successfully');
    }

    public function show($id)
    {
        $user = new User;
        $user->where('id', $id)->update(['status' => 1]);
        return redirect()->route('users.index')
            ->with('message', 'Showcase Brand Berhasil');
    }

    public function hide($id)
    {
        $user = new User;
        $user->where('id', $id)->update(['status' => 0]);
        return redirect()->route('users.index')
            ->with('message', 'Showcase Brand Dibatalkan');
    }

    public function approveAll()
    {
        DB::table('users')->update(['status' => 1]);
        // $user = new User;
        // $user->update(['status' => 1]);
        return redirect()->route('users.index')
            ->with('message', 'All users have been approved successfully');
    }


    //profile
    public function showProfile(User $user)
    {
        $abouts = About::find(1);
        return view('pages.profile', compact('user', 'abouts'));
    }

    public function editProfile(User $user)
    {
        $abouts = About::find(1);
        return view('pages.editproduct', compact('user', 'abouts'));
    }

    public function updateProfile(Request $request, User $user)
    {
        $data = $request->validate([
            'image' => 'image',
        ]);
        // dd($request->file('logo'));
        // $filename = "";
        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->update(array_merge($data, request('image') != null ? ['image' => $imagePath] : []));
        // else {
        //     $filename = $request->hiddenlogo;
        // }
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->phonenumber = $request->phonenumber;
        // $user->image = $filename;
        // $user->update();
        return redirect("profile/$user->id")
            ->with('message', 'Yoyr Data Updated Successfully');
    }
}