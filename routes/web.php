<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imscontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/',function(){
    if(Auth::user()){
        return view('dashboard');
    }
    return view('login');
});

Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/login',[LoginController::class,'showLoginForm']);
// Route::post('/category',[imscontroller::class, 'category'])->name('category');
// Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [imscontroller::class, 'index'])->name('home');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});


// Route::post('/dashboard',[imscontroller::class,'home'])->name('dashboard');

Route::get('/test',function(){
    $d = User::all();
    foreach($d as $user){
        print_r($user->name);
    }
});

/**Start of Auth */

// Route::post('/login');

// 
?>