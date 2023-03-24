<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imscontroller;
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

// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/dashboard', function () {
//     return view('category');
// });

Route::view('','login');

Route::post('/login',[imscontroller::class,'index'])->name('login');
// Route::post('/password',[imscontroller::class,'class'])->name('password');


// if (isset($_POST['submit'])) {
//     echo "Hello";
//   }
// Route::post('login','imscontroller@login');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
