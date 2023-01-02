<?php

use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/beauty-all', function () {
    return view('beauty-all');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/detail-product', function () {
    return view('detail-product');
});

Route::get('/manage-product', function () {
    return view('manage-product');
});

Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::get('/updateproduct', function () {
    return view('updateproduct');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/history', function () {
    return view('history');
});

// Route::post('/register', [RegisterController::class, 'Store'])

/// Authentication
// Route::middleware(['isGuest'])->group(function(){
//     Route::get('/', function () {
//         return view('login');
//     })->name('view.login');
    
//     Route::post('login-user', function(Request $req) {
//         $validator = Validator::make($req->all(), [
//             'email' => 'required',
//             'password' => 'required'
//         ]);
        
//         if($validator->fails()){
//             return redirect()->back()->withErrors($validator);
//         }
        
//         $rememberMe = true;
//         if($req->remember == null){
//             $rememberMe = false;
//         }
        
//         $cred = $req->only('email', 'password');
//         if(Auth::attempt($cred,$rememberMe)){
//             if($rememberMe == true){
//                 Cookie::queue('last_logged', $req->email, 60 * 24 * 30); //last value cookie time
//             }
//             return redirect()->route('view.userPage');
//         }
//         return redirect()->back()->withErrors('invalid credentials');
    
//     })->name('method.login.user');
    
//     Route::get('register', function() {
//         return view('register');
//     })->name('view.register');
    
//     Route::post('register-new-user', function(Request $req){
//         $validator = Validator::make($req->all(), [
//             'email' => 'required',
//             'username' => 'required',
//             'password' => 'required|same:con-pass',
//             'con-pass' => 'required'
//         ]);
//         if($validator->fails()){
//             return redirect()->back()->withErrors($validator);
//         }
//         $user = new User();
//         $user->name = $req->username;
//         $user->email = $req->email;
//         $user->password = Hash::make($req->password);
//         $user->save();
        
//         return redirect()->route('view.userPage');
//     })->name('method.register.user');
// });


// Route::middleware(['auth'])->group(function() {
//     Route::get('user-page', function() {
//         return view('userPage');
//     })->name('view.userPage');
    
//     Route::get('admin-page', function() {
//         return view('adminPage');
//     })->name('view.adminPage');
    
//     Route::get('logout-user', function() {
//         Auth::logout();
//         return redirect()->route('view.login'); 
//     })->name('method.logout.user');
// });