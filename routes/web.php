<?php

// use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Donation_FormController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OpiniController;
use App\Http\Controllers\PageController;
use App\Models\About;
use App\Models\Berita;
use App\Models\Brand;
use Illuminate\Routing\RouteRegistrar;
use App\Models\Category;
use App\Models\Opinis;
use App\Models\Package;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('home.index');

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/berita', function () {
    $abouts = About::find(1);
    $berita = Berita::orderBy('created_at', 'desc')->get();
    $berita2 = Berita::orderBy('created_at', 'asc')->get();
    return view('pages.berita', compact('berita', 'berita2', 'abouts'));
});


Route::get('/blog', function () {
    return view('pages.blog');
});


Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/blog-single', function () {
    return view('pages.blog-single');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';





// Route::resource('users', UsersController::class);
// Route::get('users/', [UsersController::class, 'showProfile'])->name('users.showProfile');
Route::get('/editprofile/{user}', ['App\Http\Controllers\UsersController', 'editProfile'])->name('pages.editprofile');
Route::patch('/updateimage/{user}', ['App\Http\Controllers\UsersController', 'updateimage'])->name('users.updateimage');

Route::put('/updateprofile/{user}', ['App\Http\Controllers\UsersController', 'updateProfile'])->name('pages.updateProfile');

Route::get('/profile/{user}', ['App\Http\Controllers\UsersController', 'showProfile']);
Route::get('/profile/{id}', ['App\Http\Controllers\UsersController', 'profile'])->name('users.profile');



//admin routes
Route::get('admin/user/show/{id}', [UsersController::class, 'show']);
Route::get('admin/user/hide/{id}', [UsersController::class, 'hide']);
Route::get('admin/users/approve-all', [UsersController::class, 'approveAll']);
Route::get('admin/users/user', [UsersController::class, 'user'])->name('users.user');
Route::get('admin/order/approve/{id}', [OrderController::class, 'approve']);
Route::get('admin/package/approve/{id}', [PackageController::class, 'approve']);
Route::get('admin/packages/approve-all', [PackageController::class, 'approveAll']);

Route::resource('admin/users', 'App\Http\Controllers\UsersController')->middleware('auth');
Route::resource('admin/strukturs', 'App\Http\Controllers\StrukturController')->middleware('auth');
Route::resource('admin/categories', 'App\Http\Controllers\CategoryController')->middleware('auth');
Route::resource('admin/messages', 'App\Http\Controllers\MessageController')->middleware('auth');
Route::resource('admin/opinis', 'App\Http\Controllers\OpiniController')->middleware('auth');
Route::resource('admin/beritas', 'App\Http\Controllers\BeritaController')->middleware('auth');
Route::resource('admin/about', 'App\Http\Controllers\AboutController')->middleware('auth');
Route::get('items/{id}', 'App\Http\Controllers\OrderController@orderItems');

Route::get('orders/{id}', 'App\Http\Controllers\OrderController@orders');
Route::get('order/items/{id}', 'App\Http\Controllers\OrderController@profileItems');

Route::resource('beritas', BeritaController::class);
Route::get('beritas/', [BeritaController::class, 'show'])->name('berita.show');
// Route::delete('/beritas/{berita}', [App\Http\Controllers\BeritaController::class, 'destroy'])->name('beritas.destroy');

Route::resource('about', AboutController::class);
Route::get('about/', [AboutController::class, 'show'])->name('about.show');

Route::resource('opinis', OpiniController::class);
Route::get('opinis/', [Opinis::class, 'store'])->name('opinis.store');

Route::resource('categories', CategoryController::class);
Route::get('categories/{packages}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/', [CategoryController::class, 'showAll'])->name('categories.showAll');
Route::get('categories/my-product/{packages}', [CategoryController::class, 'myproduct'])->name('categories.myproduct');
Route::get('/softDelete/{package}', [PackageController::class, 'softDelete'])->name('packages.softDelete');
Route::resource('packages', PackageController::class);
Route::get('/editproduct/{package}', [PackageController::class, 'editproduct'])->name('packages.editproduct');
Route::put('package/updatemyproduct/{package}', [PackageController::class, 'updatemyproduct'])->name('packages.updatemyproduct');
Route::resource('orders', OrderController::class);

Route::get('', 'App\Http\Controllers\PageController@index');

route::resource('brand', PageController::class);
Route::get('brand/', [PageController::class, 'allbrand'])->name('brand.allbrand');
Route::get('brand/editimage/{user}', [PageController::class, 'editproduct'])->name('brand.editproduct');
Route::get('brand/show/{user}', [PageController::class, 'show'])->name('brand.show');

// Route::resource('users', User::class);
// Route::get('users/editimage', [User::class, 'editimage'])->name('users.editimage');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signup',  [RegisterController::class, 'index']);
//// Donation Form
// Route::resource('donations', Donation_FormController::class)->middleware('auth');
Route::resource('product', Donation_FormController::class);

// Route::get('donations/show', [Donation_FormController::class, 'show']);

//contact page
Route::resource('pages/contact', MessageController::class);