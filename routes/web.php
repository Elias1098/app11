<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});
Route::get('/home',function()
{
    return view('home');
});

Route::get('/about',function()
{
    return view('about');
});
Route::get('/service',function()
{
    return view('service');
});
Route::get('/login',function()
{
    return view('login');
});
Route::get('/register',function()
{
    return view('register');
});
//Route::post('/register','App\Http\Controllers\UserController@register');
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('users',[UserController::class,'users']);
Route::get('show/{id}',[UserController::class,'show']);
Route::post('/update',[UserController::class,'update']);
Route::get('delete/{id}',[UserController::class,'delete']);
Route::get('logout',function(){
    Session::forget('user');
    return redirect('/login');
});

Route::get('flight',[FlightController::class,'index']);
Route::post('flight',[FlightController::class,'store']);
Route::get('/phone',[PhoneController::class,'index']);
Route::get('/products',[ProductController::class,'index']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('detail',[ProductController::class,'deatil']);
Route::get('add_to_cart',[ProductController::class,'addToCart'])->name('add_to_cart');
Route::get('cartItems',[CartController::class,'cartItems']);
Route::get('cartDetails',[CartController::class,'cartDetails']);
Route::get('ordernow',[ProductController::class,'orderNow']);
Route::post('orderplace',[OrderController::class,'orderPlace']);
Route::get('removecart/{id}',[CartController::class,'removeCart']);
Route::get('order',[OrderController::class,'order']);
Route::get('/search',[ProductController::class,'search']);

