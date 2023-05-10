<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imscontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\logincontroller as ControllersLogincontroller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\resetpasswordcontroller;
use App\Http\Controllers\SettingController;
use App\Models\member;
// use App\Http\Controllers\DashboardController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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


Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/login',[LoginController::class,'showLoginForm']);

Route::middleware('auth')->group(function(){
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
});

Route::get('/category',[CategoryController::class,'index']);
Route::post('/category',[CategoryController::class,'store']);
Route::patch('/category',[CategoryController::class,'update']);
Route::patch('/category',[CategoryController::class,'update']);
Route::get('/category/delete/{id}',[CategoryController::class,'destroy']);

Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

Route::get('/member',[MemberController::class, 'index']);
Route::post('/member',[MemberController::class,'store']);
Route::patch('/member',[MemberController::class,'update']);
Route::get('/member/delete/{id}',[MemberController::class,'destroy']);

Route::get('/order', [OrderController::class, 'index']);
Route::get('/order/{order_id}/products', [OrderController::class, 'orderProducts']);
Route::post('/order',[OrderController::class,'store']);
Route::get('/order/delete/{id}',[OrderController::class,'destroy']);
Route::delete('/orders/{order}', [OrderController::class, 'destroy']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/getAllProducts', [ProductController::class, 'getProductsJson']);
Route::post('/product',[ProductController::class,'store']);
Route::patch('/product',[ProductController::class,'update']);
Route::patch('/product',[ProductController::class,'update']);
Route::get('/product/delete/{id}',[productController::class,'destroy']);

Route::get('/company', [imscontroller::class, 'company'])->name('company');

Route::get('/setting',[SettingController::class,'index']);
Route::patch('/setting',[logincontroller::class,'update']);

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/bill/{order_id}', [BillController::class, 'index'])->name('bill');
Route::get('/bill/paid/{order_id}', [BillController::class, 'confirmPayment'])->name('bill.confirmPayment');

Route::get('/test',function(){
    $d = User::all();
    foreach($d as $user){
        print_r($user->name);
    }
});

Route::get('/test2',function(){
    $d = member::all();
    foreach($d as $member){
        print_r($member->name);
    }
});


// forgot password
Route::get('/forgot-password',function(){
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');


Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );


    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

?>
