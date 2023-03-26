<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imscontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\logincontroller;

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
Route::view('','login');

// Route::post('/login',[imscontroller::class, 'index'])->name('login');
Auth::routes();
Route::get('/home', [imscontroller::class, 'index'])->name('home');

Route::post('/dashboard',[imscontroller::class,'home'])->name('dashboard');

// ?>