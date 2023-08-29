<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Brand;
use App\Models\City;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{


    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required'],
            'alamat' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phonenumber' => ['required'],
            'name_brand' => ['required'],
            'logo' => ['required', 'max:5000', 'mimes:jpeg,png,bmp'],
            'cerita' => ['required'],
            'image' => ['required', 'max:5000', 'mimes:jpeg,png,bmp'],
            'image2' => ['required', 'max:5000', 'mimes:jpeg,png,bmp'],
            'image3' => ['required', 'max:5000', 'mimes:jpeg,png,bmp'],
            'domisili' => ['required'],
            'description' => ['required'],
            'tahun' => ['required'],
            'link' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // $imageName = time().'-'.$request->post('title').'-'.$request->file('image')->extension();

        $filename = '';
        $filename2 = '';
        $filename3 = '';
        $logoname = '';
        if (request()->file('image')) {
            $file = request()->file('image');
            $filename = time() . '-' . request()->post('name') . '1-.' . request()->file('image')->extension();
            $file->move('image', $filename);
        }

        if (request()->file('image2')) {
            $file = request()->file('image2');
            $filename2 = time() . '-' . request()->post('name') . '2-.' . request()->file('image2')->extension();
            $file->move('image', $filename2);
        }

        if (request()->file('image3')) {
            $file = request()->file('image3');
            $filename3 = time() . '-' . request()->post('name') . '3-.' . request()->file('image3')->extension();
            $file->move('image', $filename3);
        }


        if (request()->file('logo')) {
            $logo = request()->file('logo');
            $logoname = time() . '-' . request()->post('name') . '4-.' . request()->file('logo')->extension();
            $logo->move('image', $logoname);
        }


        return User::create([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phonenumber' => $data['phonenumber'],
            'name_brand' => $data['name_brand'],
            'domisili' => $data['domisili'],
            'cerita' => $data['cerita'],
            'description' => $data['description'],
            'tahun' => $data['tahun'],
            'link' => $data['link'],
            'logo' => $logoname,
            'image' => $filename,
            'image2' => $filename2,
            'image3' => $filename3,
        ]);
    }
    public function index()
    {

        return view('auth.register');
    }
}